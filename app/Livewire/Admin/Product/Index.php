<?php

namespace App\Livewire\Admin\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Product_color;
use App\Models\Product_image;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    public $name, $description, $meta_title, $meta_keywords, $meta_description;

    public $category_id = -1, $brand_id = -1, $original_price = null, $selling_price = null, $trending = -1, $status = 0, $product_id = 0;

    public $images = [];
    public $images_edit = [], $images_edit_show = [];

    public $search;
    //* color
    public $color = [], $color_edit = [];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    use WithFileUploads;
    public function render()
    {
        $categories = Category::select('id', 'name')->where('status', 0)->get();
        $brands = Brand::select('id', 'name')->where('status', 0)->get()->unique('name');
        $products = Product::with('category')->with('brand')->orderby('id', 'desc');
        $products = $this->findSearchTrending($products);
        $products = $this->findSearchStatus($products);
        $products = $this->findSearchBrandID($products);
        $products = $this->findSearchCategoryID($products);
        if ($this->search) {
            $products = $this->searctext($products);
        }
        $products = $products->paginate(5);
        if (count($products) == 0) {
            session()->flash('error', 'No results found');
        }
        $colors = Color::select('id', 'name')->where('status', 0)->get();
        $color = $this->color_edit;
        return view(
            'livewire.admin.product.index',
            ['products' => $products, 'categories' => $categories, 'brands' => $brands, 'colors' => $colors, 'qtColor' => $color]
        )->extends('Admin.Layouts.adminApp', ['title' => 'Products lists'])->section('content');
    }
    //idea delete product color
    public function deleteProductColor($id)
    {
        try {
            $productColor = Product_color::where('product_id', $id);
            if ($productColor) {
                $productColor->delete();
                return true;
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return false;
        }
    }
    //idea update product color
    public function updateProductColor($id, $colors)
    {
        try {
            if ($this->deleteProductColor($id) && $this->addColor($id, $colors)) {
                return true;
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return false;
        }
    }
    //idea update product image
    public function updateProductImage($id)
    {
        try {
            if (count($this->images_edit) != 0) {
                $this->deleteProductImage($id);
                foreach ($this->images_edit as $file) {
                    $productImage = new Product_image();
                    $productImage->product_id = $id;
                    //todo chuyển file vào thư mục
                    $name = $file->getClientOriginalName();
                    $path = '/storage/' . 'uploads/' . date("Y/m/d") . '/Product';
                    $pathFull = $file->storeAs($path, $name, 'real_public');
                    $productImage->image = $pathFull;
                    $productImage->save();
                }
            }
            return true;
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return false;
        }
    }
    //idea update product
    public function updateProduct()
    {
        $validateData = $this->validate([
            'name' => 'required|string|max:255|unique:products,name,' . $this->product_id,
            'description' => 'required|string',
            'meta_title' => 'required|string|max:255|unique:products,meta_title,' . $this->product_id,
            'meta_keywords' => 'required|string|max:255|unique:products,meta_keywords,' . $this->product_id,
            'meta_description' => 'required|string|max:255|unique:products,meta_description,' . $this->product_id,
            'category_id' => 'required',
            'brand_id' => 'required',
            'original_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'trending' => 'required|numeric|in:0,1',
            'status' => 'required|numeric|in:0,1',
            'color' => 'required|array|min:1',
        ]);
        try {
            if ($validateData) {
                $validateData['slug'] = Str::slug($validateData['name']);
                $validateData['small_description'] = Str::limit($validateData['description'], 100);
                $validateData['quantity'] = $this->getTotalQuantity();
                $product = Product::find($this->product_id);
                if ($product) {
                    $product->fill($validateData);
                    $product->save();
                    if ($this->updateProductImage($this->product_id) && $this->updateProductColor($this->product_id, $this->color)) {
                        session()->flash('success', 'edit product successfully!');
                        $this->cleanUp();
                        return;
                    }
                } else {
                    session()->flash('error', 'Who deleted it :))))');
                }
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            session()->flash('error', 'edit product failed!');
        }
    }
    //idea edit product
    public function editProduct($id)
    {
        $product = Product::find($id);
        if ($product) {
            $productImage = Product_image::where('product_id', $product->id)->get();
            $productColor = Product_color::where('product_id', $product->id)->get();
            foreach ($productImage as $key => $value) {
                $this->images_edit_show = Arr::add($productImage, $key, $value);
            }
            $this->product_id = $product->id;
            $this->name = $product->name;
            $this->description = $product->description;
            $this->meta_title = $product->meta_title;
            $this->meta_keywords = $product->meta_keywords;
            $this->meta_description = $product->meta_description;
            $this->category_id = $product->category_id;
            $this->brand_id = $product->brand_id;
            $this->original_price = $product->original_price;
            $this->selling_price = $product->selling_price;
            $this->trending = $product->trending;
            $this->status = $product->status;
            $this->color = $productColor->pluck('quantity', 'color_id')->toArray();
            $this->color_edit = array_keys($productColor->pluck('quantity', 'color_id')->toArray());
        } else {
            session()->flash('error', 'Who deleted it :))))');
        }
    }
    //idea delete product image
    public function deleteProductImage($id)
    {
        try {
            $productImage = Product_image::where('product_id', $id); //!không được thêm ->get() nếu không ->delete() sẽ không tồn tại nói chung là lỗi
            if ($productImage) {
                // foreach ($productImage as $value) {
                //     Storage::disk('real_public')->delete($value->image);
                // }
                $productImage->delete();
                return true;
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return false;
        }
    }
    //idea delete product
    public function deleteProduct($id)
    {
        try {
            $product = Product::find($id);
            if ($product) {
                if ($this->deleteProductImage($id) && $this->deleteProductColor($id)) {
                    $product->delete();
                    session()->flash('success', 'delete product successfully!');
                    return;
                }
            } else {
                session()->flash('error', 'Who deleted it :))))');
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
        }
        session()->flash('error', 'delete product failed!');
    }
    //idea set id product
    public function setIdProduct($id)
    {
        $this->product_id = $id;
    }
    //idea get total quantity
    public function getTotalQuantity()
    {
        $total = array_map('intval', $this->color);
        return array_sum($total);
    }
    //idea add quantity and color
    public function addColor($id, $quantity_Color)
    {
        try {
            foreach ($quantity_Color as $key => $value) {
                $productColor = new Product_color();
                $productColor::create([
                    'product_id' => $id,
                    'color_id' => $key,
                    'quantity' => $value
                ]);
            }
            return true;
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return false;
        }
    }
    //idea add image to db product_image and move file image product
    public function addImage($id, $images)
    {
        try {
            $productId = Product::select('id')->find($id);
            if ($productId && count($images) > 0) {
                foreach ($images as $file) {
                    //todo chuyển file vào thư mục
                    $name = $file->getClientOriginalName();
                    $path = '/storage/' . 'uploads/' . date("Y/m/d") . '/Product';
                    $pathFull = $file->storeAs($path, $name, 'real_public');
                    //todo thêm data vào db lun
                    $newProductImage = [];
                    $newProductImage['image'] = $pathFull;
                    $newProductImage['product_id'] = $productId->id;
                    Product_image::create($newProductImage);
                }
                return true;
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return false;
        }
    }
    //idea create product
    public function storeProduct()
    {
        $data = $this->validate(
            [
                'name' => 'required|string|max:255|unique:products,name,' . $this->product_id,
                'description' => 'required|string',
                'meta_title' => 'required|string|max:255|unique:products,meta_title,' . $this->product_id,
                'meta_keywords' => 'required|string|max:255|unique:products,meta_keywords,' . $this->product_id,
                'meta_description' => 'required|string|max:255|unique:products,meta_description,' . $this->product_id,
                'category_id' => 'required',
                'brand_id' => 'required',
                'original_price' => 'required|numeric',
                'selling_price' => 'required|numeric',
                'trending' => 'required|numeric|in:0,1',
                'status' => 'required|numeric|in:0,1',
                'images' => 'required',
                'color' => 'required|array|min:1',
            ]
        );
        try {
            $totalQt = $this->getTotalQuantity();
            if ($data['category_id'] == -1 && $data['brand_id'] == -1) {
                $category_id = Category::select('id')->where('status', 0)->first();
                $brand_id = Brand::select('id')->where('status', 0)->first();
                $data['category_id'] = $category_id->id;
                $data['brand_id'] = $brand_id->id;
            }
            if ($data['category_id'] == -1 && $data['brand_id'] != -1) {
                $category_id = Category::select('id')->where('status', 0)->first();
                $data['category_id'] = $category_id->id;
            }
            if ($data['category_id'] != -1 && $data['brand_id'] == -1) {
                $brand_id = Brand::select('id')->where('status', 0)->first();
                $data['brand_id'] = $brand_id->id;
            }
            $data['quantity'] = $totalQt;
            if ($data) {
                $data['slug'] = Str::slug($data['name']);
                $data['small_description'] = Str::limit($data['description'], 100);
                $productnewAdd = Product::create($data);
                $this->product_id = $productnewAdd->id;
                if ($this->addImage($this->product_id, $this->images) && $this->addColor($this->product_id, $this->color)) {
                    $this->resetInput();
                    $this->cleanUp();
                    session()->flash('success', 'created product successfully!');
                    return;
                }
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            session()->flash('error', 'created product failed!');
        }
    }
    //idea reset input
    public function resetInput()
    {
        $this->name = '';
        $this->description = '';
        $this->meta_title = '';
        $this->meta_keywords = '';
        $this->meta_description = '';
        $this->original_price = null;
        $this->selling_price = null;
        // $this->quantity = null;
        $this->trending = 1;
        $this->status = 0;
        $this->images = [];
        $this->color = [];
    }
    //idea delete livewire-tmp
    public function cleanUp()
    {
        $files = Storage::files('livewire-tmp');
        foreach ($files as $file) {
            Storage::delete($file);
        }
    }
    //idea search
    public function searchCategoryID($id)
    {
        $this->category_id = $id;
    }
    public function selectBrandID($id)
    {
        $this->brand_id = $id;
    }
    public function searchStatus($id)
    {
        $this->status = $id;
    }
    public function searchTrending($id)
    {
        $this->trending = $id;
    }
    public function findSearchCategoryID($products)
    {
        if ($this->category_id > 0) {
            $products = $products->where('category_id', $this->category_id);
        }
        return $products;
    }
    public function findSearchBrandID($products)
    {
        if ($this->brand_id > 0) {
            $products = $products->where('brand_id', $this->brand_id);
        }
        return $products;
    }
    public function findSearchStatus($products)
    {
        $products = $products->where('status', $this->status);
        return $products;
    }
    public function findSearchTrending($products)
    {
        if ($this->trending != -1) {
            $products = $products->where('trending', $this->trending);
        }
        return $products;
    }
    public function searctext()
    {
        $int_var = (int)filter_var($this->search, FILTER_SANITIZE_NUMBER_INT);
        if (str_contains($this->search, '>')) {
            $products = Product::where('selling_price', '>', $int_var);
            $temp = $products->get();
            if (count($temp) == 0) {
                $products = Product::where('quantity', '>', $int_var);
            }
        } elseif (str_contains($this->search, '<')) {
            $products = Product::where('selling_price', '<', $int_var);
            $temp = $products->get();
            if (count($temp) == 0) {
                $products = Product::where('quantity', '<', $int_var);
            }
        } else {
            $products = Product::where('id', 'like', '%' . $this->search . '%')
                ->orWhere('name', 'like', '%' . $this->search . '%');
        }
        return $products;
    }
}
