<?php

namespace App\Livewire\User\Filter\DetailProduct;

use App\Models\cart;
use App\Models\Product;
use App\Models\wishList;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AnotherProduct extends Component
{
    public $ProductsAnotherBrand, $ProductsWithInBrand;

    public $category_slug, $category, $categories, $brands;
    public $price, $brand_id = -1, $category_id = -1;
    public $product_images, $colorChoose, $colors = [], $priceChoose, $product_id;
    public function mount($ProductsAnotherBrand, $ProductsWithInBrand)
    {
        $this->ProductsAnotherBrand = $ProductsAnotherBrand;
        $this->ProductsWithInBrand = $ProductsWithInBrand;
    }
    //idea show color product when click add to cart
    public function showColorProduct($product_id, $price)
    {
        $colors = Product::find($product_id)->product_colors;
        $this->colors = $colors;
        $this->priceChoose = $price;
        $this->product_id = $product_id;
    }
    //idea add product to cart
    public function addToCart($product_id = null, $price = null)
    {

        if (Auth::check()) {
            if (!$product_id) {
                $product_id = $this->product_id;
                $price = $this->priceChoose;
            }
            $this->validate([
                'colorChoose' => 'required',
                'colorChoose.required' => 'please choose color for product'
            ]);
            if (cart::where('user_id', auth()->user()->id)->where('product_id', $product_id)->exists()) {
                //todo xử lý khi sản phẩm đã tồn tại trong cart
                cart::where('user_id', auth()->user()->id)->where('product_id', $product_id)->delete();
                $this->dispatch('updateCartCount');
            } else {
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
    public function getAnotherProduct()
    {
        $this->ProductsAnotherBrand = $this->getProductFromWishList($this->ProductsAnotherBrand);
        $this->ProductsAnotherBrand = $this->getProductFromCart($this->ProductsAnotherBrand);
        $this->ProductsWithInBrand = $this->getProductFromWishList($this->ProductsWithInBrand);
        $this->ProductsWithInBrand = $this->getProductFromCart($this->ProductsWithInBrand);
    }
    public function render()
    {
        $this->getAnotherProduct();
        return view('livewire.user.filter.detail-product.another-product', ['ProductsAnotherBrand' => $this->ProductsAnotherBrand, 'ProductsWithInBrand' => $this->ProductsWithInBrand]);
    }
}
