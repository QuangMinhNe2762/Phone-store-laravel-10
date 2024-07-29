<?php

namespace App\Livewire\User\Wishlist;

use App\Models\cart;
use App\Models\Product;
use App\Models\wishList;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    public $products, $status = null;
    public $product_images, $colorChoose, $colors = [], $priceChoose, $product_id;
    //idea get all wishlist by user id
    #[On('notificationRemoveItem')]

    //idea show color product when click add to cart
    public function showColorProduct($product_id, $price)
    {
        $this->resetColor();
        $colors = Product::find($product_id)->product_colors;
        $this->colors = $colors;
        $this->priceChoose = $price;
        $this->product_id = $product_id;
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
            }
            cart::create([
                'user_id' => Auth::id(),
                'product_id' => $product_id,
                'quantity' => 1,
                'price' => $price,
                'color_id' => $this->colorChoose
            ]);
            session()->flash('addCart', $product_id);
            $this->dispatch('updateCartCount');
        } else {
            return redirect()->route('login')->with('error', 'Please login to add product to cart');
        }
    }
    //idea reset input
    public function resetColor()
    {
        $this->colorChoose = null;
        $this->priceChoose = null;
        $this->product_id = null;
    }

    public function getWishListByUserId()
    {
        $product_ids = wishList::select('product_id')->where('user_id', auth()->user()->id)->get()->toArray();
        $this->products = Product::whereIn('id', $product_ids)->orderby('id', 'desc')->get();
        $this->products = $this->getProductFromCart($this->products);
    }
    public function render()
    {
        if (Auth::check()) {
            $this->getWishListByUserId();
            return view('livewire.user.wishlist.index', ['products' => $this->products])->extends('User.layouts.app', ['title' => 'Wish list'])->section('content');
        } else {
            return view('auth.login')->extends('layouts.app2')->section('content');
        }
    }
    public function removeItemWishList($product_id)
    {
        try {
            wishList::where('product_id', $product_id)->where('user_id', auth()->user()->id)->delete();
            $this->dispatch('updateWishListCount');
            // $this->dispatch('notificationRemoveItem', ['message' => 'Remove success', 'status' => 1]);
        } catch (\Throwable $th) {
            // $this->dispatch('notificationRemoveItem', ['message' => 'Remove fail', 'status' => 0]);
        }
    }
}
