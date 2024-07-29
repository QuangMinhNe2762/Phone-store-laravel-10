<?php

namespace App\Livewire\User;

use App\Models\Product;
use Livewire\Component;

class ProductModalQuickView extends Component
{
    public $products, $product;
    public function mount($products)
    {
        $this->products = $products;
    }
    public function render()
    {
        return view('livewire.user.product-modal-quick-view', ['products' => $this->products, 'product' => $this->product]);
    }
    public function viewModal($id)
    {
        $this->product = Product::find($id);
    }
}
