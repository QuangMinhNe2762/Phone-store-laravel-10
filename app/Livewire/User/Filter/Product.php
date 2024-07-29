<?php

namespace App\Livewire\User\Filter;

use App\Models\Brand;
use App\Models\cart;
use App\Models\Category;
use App\Models\Product as ModelsProduct;
use App\Models\Product_image;
use App\Models\wishList;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Product extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    //* category
    public $category_slug, $category, $categories, $brands;
    public $price, $brand_id = -1, $category_id = -1;
    public $product_images, $colorChoose, $colors = [], $priceChoose, $product_id;
    //* brand
    public $brand, $brand_slug;
    //* middle
    public $middle;
    public $search;
    public function mount($category_slug = null, $brand_slug = null, $seach = null)
    {
        $this->category_slug = $category_slug;
        $this->brand_slug = $brand_slug;
        $this->search == $seach;
    }
    //idea show color product when click add to cart
    public function showColorProduct($product_id, $price)
    {
        $colors = ModelsProduct::find($product_id)->product_colors;
        $this->colors = $colors;
        $this->priceChoose = $price;
        $this->product_id = $product_id;
    }
    //idea add product to cart
    public function addToCart($product_id = null, $price = null)
    {

        if (Auth::check()) {
            if (cart::where('user_id', auth()->user()->id)->where('product_id', $product_id)->exists()) {
                //todo xử lý khi sản phẩm đã tồn tại trong cart
                cart::where('user_id', auth()->user()->id)->where('product_id', $product_id)->delete();
                $this->dispatch('updateCartCount');
            }
            if (!$product_id) {
                $product_id = $this->product_id;
                $price = $this->priceChoose;
            } else {
                $this->validate([
                    'colorChoose' => 'required',
                    'colorChoose.required' => 'please choose color for product'
                ]);
                cart::create([
                    'user_id' => Auth::id(),
                    'product_id' => $product_id,
                    'quantity' => 1,
                    'price' => $price,
                    'color_id' => $this->colorChoose
                ]);
                session()->flash('addCart', $product_id);
                $this->dispatch('updateCartCount');
            }
        } else {
            return redirect()->route('login')->with('error', 'Please login to add product to cart');
        }
    }
    //idea get product in cart by user_id
    public function getProductFromCart($products)
    {
        if (Auth::check()) {
            $cart = cart::select('product_id')->where('user_id', auth()->user()->id)->get();
            $newCart = [];
            foreach ($cart as $item) {
                array_push($newCart, $item->product_id);
            }
            foreach ($products as $product) {
                if (in_array($product->id, $newCart)) {
                    $product->isCart = true;
                }
            }
        }
        return $products;
    }
    //idea get product in wishList by user_id
    public function getProductFromWishList($products)
    {
        if (Auth::check()) {
            $wishList = WishList::select('product_id')->where('user_id', auth()->user()->id)->get();
            $newWishList = [];
            foreach ($wishList as $item) {
                array_push($newWishList, $item->product_id);
            }
            foreach ($products as $product) {
                if (in_array($product->id, $newWishList)) {
                    $product->isWishList = true;
                }
            }
        }
        return $products;
    }
    //idea add product to wishList
    public function addToWishList($product_id)
    {
        if (Auth::check()) {
            if (wishList::where('user_id', auth()->user()->id)->where('product_id', $product_id)->exists()) {
                //todo xử lý khi sản phẩm đã tồn tại trong wishlist
                wishList::where('user_id', auth()->user()->id)->where('product_id', $product_id)->delete();
                $this->dispatch('updateWishListCount');
            } else {
                WishList::create([
                    'user_id' => Auth::id(),
                    'product_id' => $product_id
                ]);
                session()->flash('addWishList', $product_id);
                $this->dispatch('updateWishListCount');
            }
        } else {
            return redirect()->route('login')->with('error', 'Please login to add product to wish list');
        }
    }
    public function getProducts()
    {
        // $products = ModelsProduct::where('category_id', $this->category->id)->where('status', 0)->get();
        if ($this->category_slug == null && $this->brand_slug == null) {
            $this->categories = Category::where('status', 0)->pluck('name', 'id')->unique()->all();
            if (!$this->price) {
                $products = ModelsProduct::where('name', 'like', '%' . $this->search . '%')->paginate(10);
            } else {
                $products = ModelsProduct::where('name', 'like', '%' . $this->search . '%')->orderby('selling_price', $this->price)->paginate(10);
            }
            if ($this->category_id || $this->price) {
                $array_images = [];
                foreach ($products as $product) {
                    array_push($array_images, Product_image::where('product_id', $product->id)->first());
                }
                $this->product_images = $array_images;
            }
            if ($products->count() == 0) {
                session()->flash('error', 'not found product in this brand');
            }
        }
        if ($this->category_slug != null) {
            $this->category = Category::where('slug', $this->category_slug)->first();
            $this->brands = Brand::where('status', 0)->pluck('name', 'id')->unique()->all();
            //todo xử lý khi không có sắp xếp giá
            if ($this->brand_id == -1 && !$this->price) {
                $products = ModelsProduct::where('category_id', $this->category->id)->where('status', 0)->paginate(10);
            } else {
                if ($this->brand_id && !$this->price) {
                    $products = ModelsProduct::where('category_id', $this->category->id)->where('brand_id', $this->brand_id)->where('status', 0)->paginate(10);
                }
            }
            //todo xử lý khi có sắp xếp giá
            if ($this->brand_id == -1 && $this->price) {
                $products = ModelsProduct::where('category_id', $this->category->id)->orderby('selling_price', $this->price)->where('status', 0)->paginate(10);
            } else {
                if ($this->brand_id && $this->price) {
                    $products = ModelsProduct::where('category_id', $this->category->id)->where('brand_id', $this->brand_id)->orderby('selling_price', $this->price)->where('status', 0)->paginate(10);
                }
            }
            if ($this->brand_id || $this->price) {
                $array_images = [];
                foreach ($products as $product) {
                    array_push($array_images, Product_image::where('product_id', $product->id)->first());
                }
                $this->product_images = $array_images;
            }
            if ($products->count() == 0) {
                session()->flash('error', 'not found product in this category');
            }
        }
        if ($this->brand_slug != null) {
            $this->brand = Brand::where('slug', $this->brand_slug)->first();
            $this->categories = Category::where('status', 0)->pluck('name', 'id')->unique()->all();
            //todo xử lý khi không có sắp xếp giá
            if ($this->category_id == -1 && !$this->price) {
                $products = ModelsProduct::where('brand_id', $this->brand->id)->where('status', 0)->paginate(10);
            } else {
                if ($this->category_id && !$this->price) {
                    $products = ModelsProduct::where('brand_id', $this->brand->id)->where('category_id', $this->category_id)->where('status', 0)->paginate(10);
                }
            }
            //todo xử lý khi có sắp xếp giá
            if ($this->category_id == -1 && $this->price) {
                $products = ModelsProduct::where('brand_id', $this->brand->id)->orderby('selling_price', $this->price)->where('status', 0)->paginate(10);
            } else {
                if ($this->category_id && $this->price) {
                    $products = ModelsProduct::where('brand_id', $this->brand->id)->where('category_id', $this->category_id)->orderby('selling_price', $this->price)->where('status', 0)->paginate(10);
                }
            }
            if ($this->category_id || $this->price) {
                $array_images = [];
                foreach ($products as $product) {
                    array_push($array_images, Product_image::where('product_id', $product->id)->first());
                }
                $this->product_images = $array_images;
            }
            if ($products->count() == 0) {
                session()->flash('error', 'not found product in this brand');
            }
        }
        $products = $this->getProductFromWishList($products);
        $products = $this->getProductFromCart($products);
        return $products;
    }
    //idea get id brand when click filter brand
    public function filter($IdBrand)
    {
        if ($this->category_slug != null) {
            $this->brand_id = $IdBrand;
        }
        if ($this->brand_slug != null) {
            $this->category_id = $IdBrand;
        }
    }
    //idea get filter price when click filter price
    public function filterPrice($value)
    {
        $this->price = $value;
    }
    public function render()
    {
        if ($this->category_slug == null && $this->brand_slug == null) {
            $this->middle = 'search';
        }
        if ($this->category_slug != null) {
            $this->middle = 'category';
        }
        if ($this->brand_slug != null) {
            $this->middle = 'brand';
        }
        // $this->middle = $this->category_slug != null ? 'category' : 'brand';
        $products = $this->getProducts();
        return view('livewire.user.filter.product', ['products' => $products, 'brands' => $this->brands, 'middle' => $this->middle, 'search' => $this->search, 'category' => $this->category, 'categories' => $this->categories])->extends('User.Layouts.app', ['title' => 'Product'])->section('content');
    }
}
