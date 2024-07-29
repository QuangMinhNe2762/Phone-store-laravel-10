<?php

namespace App\Livewire\User\Index;

use App\Models\cart;
use App\Models\Product;
use App\Models\wishList;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PopularProduct extends Component
{
    public $products;

    public $colorChoose, $colors = [], $priceChoose, $product_id;
    public function mount($products)
    {
        $this->products = $products;
    }

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
            $this->validate([
                'colorChoose' => 'required',
                'colorChoose.required' => 'please choose color for product'
            ]);
            if (!$product_id) {
                $product_id = $this->product_id;
                $price = $this->priceChoose;
            }
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

    public function render()
    {
        $this->products = $this->getProductFromWishList($this->products);
        $this->products = $this->getProductFromCart($this->products);
        return view('livewire.user.index.popular-product', ['products' => $this->products]);
    }
}
