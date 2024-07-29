<?php

namespace App\Livewire\User\Index;

use App\Models\Brand;
use App\Models\cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\wishList;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class AllProduct extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $colorChoose, $colors = [], $priceChoose, $product_id;

    public $price, $brand_id = -1, $category_id = -1;
    //idea show color product when click add to cart
    public function showColorProduct($product_id, $price)
    {
        $this->resetColor();
        $colors = Product::find($product_id)->product_colors;
        $this->colors = $colors;
        $this->priceChoose = $price;
        $this->product_id = $product_id;
    }
    //idea reset input
    public function resetColor()
    {
        $this->colorChoose = null;
        $this->priceChoose = null;
        $this->product_id = null;
    }
    //idea add product to cart
    public function addToCart($product_id = null, $price = null)
    {
        if (Auth::check()) {
            if (!$product_id) {
                $product_id = $this->product_id;
                $price = $this->priceChoose;
            }
            if (cart::where('user_id', auth()->user()->id)->where('product_id', $product_id)->exists()) {
                //todo xử lý khi sản phẩm đã tồn tại trong cart
                cart::where('user_id', auth()->user()->id)->where('product_id', $product_id)->delete();
                $this->dispatch('updateCartCount');
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
            $wishList = wishList::select('product_id')->where('user_id', auth()->user()->id)->get();
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
            return redirect()->route('login')->with('error', 'Please login to add product to wishlist');
            // return redirect()->route('login')->with('error', 'Please login to add product to wish list');
        }
    }
    //idea get filter price when click filter price
    public function filterPrice($value)
    {
        $this->price = $value;
    }
    //idea get id brand when click filter brand
    public function filterBrand($id)
    {
        $this->brand_id = $id;
    }
    //idea get id category when click filter category
    public function filterCategory($id)
    {
        $this->category_id = $id;
    }
    //idea select brand
    public function selectBrand($products)
    {
        if ($this->brand_id != -1) {
            $products = $products->where('brand_id', $this->brand_id);
        }
        return $products;
    }
    //idea select category
    public function selectCategory($products)
    {
        if ($this->category_id != -1) {
            $products = $products->where('category_id', $this->category_id);
        }
        return $products;
    }
    //idea sort by price
    public function sortByPrice($products)
    {
        if ($this->price == 'desc') {
            $products = $products->sortByDesc('selling_price');
        } elseif ($this->price == 'asc') {
            $products = $products->sortBy('selling_price');
        }
        return $products;
    }
    //idea get product
    public function getProducts()
    {
        $products = Product::where('status', 0)->get();
        $brands = Brand::select('id', 'name')->whereIn('id', $products->pluck('brand_id')->unique()->all())->get();
        $categories = Category::select('id', 'name')->whereIn('id', $products->pluck('category_id', 'name')->unique()->all())->get();
        $products = $this->selectBrand($products);
        $products = $this->selectCategory($products);
        $products = $this->sortByPrice($products);
        $products = $this->getProductFromWishList($products);
        $products = $this->getProductFromCart($products);
        return [$products, $brands, $categories];
    }
    public function render()
    {
        [$products, $brands, $categories] = $this->getProducts();
        return view('livewire.user.index.all-product', ['products' => $products, 'brands' => $brands, 'categories' => $categories]);
    }
}
