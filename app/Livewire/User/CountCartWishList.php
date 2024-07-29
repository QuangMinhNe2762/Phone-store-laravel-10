<?php

namespace App\Livewire\User;

use App\Models\cart;
use App\Models\wishList;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class CountCartWishList extends Component
{
    public $countCart = 0, $countWishList = 0, $Type;
    #[On('updateCartCount')]
    public function fncountCart()
    {
        if (Auth::check()) {
            $this->countCart = cart::where('user_id', auth()->user()->id)->count();
        }
    }
    #[On('updateWishListCount')]
    public function fncountWishList()
    {
        if (Auth::check()) {
            $this->countWishList = wishList::where('user_id', auth()->user()->id)->count();
        }
    }
    public function mount($type)
    {
        $this->Type = $type;
    }
    public function render()
    {
        $this->fncountWishList();
        $this->fncountCart();
        return view(
            'livewire.user.count-cart-wish-list',
            ['Type' => $this->Type, 'countCart' => $this->countCart, 'countWishList' => $this->countWishList]
        );
    }
}
