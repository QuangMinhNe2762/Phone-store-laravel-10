<?php

namespace App\Livewire\User\Filter;

use App\Models\cart;
use App\Models\Product;
use App\Models\Product_color;
use App\Models\wishList;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DetailProduct extends Component
{
    public $ProductSlug, $product, $quantity = 1;
    public $colorChoose, $colorChoosed, $quantityInStock;
    public function mount($product)
    {
        $this->product = $product;
        $this->checkQuantityInStock();
    }
    //idea add product to cart
    public function addToCart($product_id, $price)
    {

        if (Auth::check()) {

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
                    'quantity' => $this->quantity,
                    'price' => $price * $this->quantity,
                    'color_id' => $this->colorChoose
                ]);
                session()->flash('addCart', $product_id);
                $this->dispatch('updateCartCount');
            }
        } else {
            return redirect()->route('login')->with('error', 'Please login to add product to cart');
        }
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
                wishList::create([
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
    //idea get product from wishList
    public function displayProductWishList()
    {
        if (Auth::check()) {
            if (wishList::where('user_id', auth()->user()->id)->where('product_id', $this->product->id)->exists()) {
                $this->product->isWishList = true;
            }
        }
        return $this->product;
    }
    //idea get product from cart
    public function displayProductCart()
    {
        if (Auth::check()) {
            if (cart::where('user_id', auth()->user()->id)->where('product_id', $this->product->id)->exists()) {
                $this->product->isCart = true;
            }
        }
        return $this->product;
    }
    //idea check quantity in stock
    public function checkQuantityInStock()
    {
        $product_colors = Product_color::where('product_id', $this->product->id, 'color_id', $this->colorChoose)->get();
        $product_colors->map(function ($item) {
            $this->quantityInStock[$item->color_id] = $item->quantity;
        });
    }
    public function changeColor()
    {
        if ($this->colorChoosed != $this->colorChoose) {
            $this->quantity = 1;
        }
    }
    //idea increment quantity
    public function increment()
    {
        $this->validate([
            'colorChoose' => 'required',
        ], [
            'colorChoose.required' => 'please choose color for product'
        ]);
        $this->colorChoosed = $this->colorChoose;
        if ($this->quantity < $this->quantityInStock[$this->colorChoose]) {
            $this->quantity++;
        } else {
            session()->flash('quantity', 'Quantity in stock is not enough');
        }
    }
    //idea decrement quantity
    public function decrement()
    {
        $this->validate([
            'colorChoose' => 'required',
        ], [
            'colorChoose.required' => 'please choose color for product'
        ]);
        $this->colorChoosed = $this->colorChoose;
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }
    public function render()
    {
        $this->product = $this->displayProductWishList();
        $this->product = $this->displayProductCart();
        return view('livewire.user.filter.detail-product', ['product' => $this->product])->extends('User.Layouts.app', ['title' => 'Product detail'])->section('content');
    }
}
