<?php

namespace App\Livewire\User\Cart;

use App\Mail\PlaceOrderMailable;
use App\Models\cart;
use App\Models\Oder;
use App\Models\Product;
use App\Models\Product_color;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Index extends Component
{
    public $products;
    //todo buy all
    public $quantity = [], $price = [], $color = [];
    //todo buy can choose
    public $quantityChoose = [], $priceChoose = [], $colorChoose = [];
    //todo information order
    public $name, $phone, $address, $email;
    public $listeners = ['hideQuantity' => 'hideQuantity'];
    //todo quantity in stock
    public $quantityInStock = [];
    //todo use mount function to receive product when user click buy from wishlist page
    public function mount($product_id)
    {
        if ($product_id != -1) {
            if (!cart::where('product_id', $product_id)->where('user_id', auth()->user()->id)->exists()) {
                $product = Product::where('id', $product_id)->first();
                $this->addProductToWishList($product);
            }
        }
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
        ];
    }
    public function getProductsFromCart()
    {
        //! nếu như thêm toArray() vào sẽ không lấy được dữ liệu
        $this->products = cart::where('user_id', auth()->user()->id)->get();
        //todo get quantity in stock
        $this->products->map(function ($product) {
            $product_color = Product_color::select('quantity')->where('product_id', $product->product_id)->where('color_id', $product->color_id)->first();
            if ($product_color != null) {
                $this->quantityInStock[$product->product_id] = $product_color->quantity;
            }
        });
    }
    //idea when click go to cart to buy then add product to cart
    public function addProductToWishList($product)
    {
        cart::create([
            'product_id' => $product->id,
            'user_id' => auth()->user()->id,
            'quantity' => 1,
            'price' => $product->selling_price,
        ]);
    }
    //idea select product to delete
    public function selectDelete($quantity, $price)
    {
        array_map(function ($key) {
            cart::where('product_id', $key)->where('user_id', auth()->user()->id)->delete();
        }, array_keys($quantity));
        $quantity = [];
        $price = [];
        $color = [];
    }
    //idea delete product when paid
    public function deleteProduct()
    {
        if ($this->quantityChoose == []) {
            $this->selectDelete($this->quantity, $this->price, $this->color);
        } else {
            $this->selectDelete($this->quantityChoose, $this->priceChoose, $this->colorChoose);
        }
    }
    //idea find pro_id exsists in column to add column order_id
    public function add_order_id($id)
    {
        $order = Oder::select('id')->find($id);
        return $order->id;
    }
    //idea select pay all or piece
    public function selectPay($quantity, $price, $color)
    {
        $ArrayQuantity = array_keys($quantity);
        $order = Oder::create([
            'user_id' => auth()->user()->id,
            'product_id' => $ArrayQuantity[0],
            'Name' => $this->name,
            'Phone' => $this->phone,
            'Address' => $this->address,
            'Email' => $this->email,
            'total_price' => $price[$ArrayQuantity[0]],
            'total_quantity' => $quantity[$ArrayQuantity[0]],
            'color_id' => $color[$ArrayQuantity[0]]
        ]);
        $order->fill(['order_id' => $order->id]);
        $order->save();
        $this->decreaseQuantityProduct($ArrayQuantity[0], $color[$ArrayQuantity[0]], $quantity[$ArrayQuantity[0]]);
        unset($ArrayQuantity[0]);
        $order_id = $this->add_order_id($order->id);
        foreach ($ArrayQuantity as $key => $value) {
            Oder::create([
                'user_id' => auth()->user()->id,
                'product_id' => $value,
                'Name' => $this->name,
                'Phone' => $this->phone,
                'Address' => $this->address,
                'Email' => $this->email,
                'total_price' => $price[$value],
                'total_quantity' => $quantity[$value],
                'order_id' => $order_id,
                'color_id' => $color[$value]
            ]);
            $this->decreaseQuantityProduct($value, $color[$value], $quantity[$value]);
        }
        try {
            $orders = Oder::where('order_id', $order_id)->get();
            $total_price = array_sum($orders->pluck('total_price')->toArray());
            return [$orders, $total_price];
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
        }
    }
    //idea pay product
    public function payProduct()
    {
        $this->validate();
        try {
            $orders = "";
            $total_price = "";
            if ($this->quantityChoose == []) {
                [$orders, $total_price] = $this->selectPay($this->quantity, $this->price, $this->color);
            } else {
                [$orders, $total_price] = $this->selectPay($this->quantityChoose, $this->priceChoose, $this->colorChoose);
            }
            if ($orders == "" || $total_price == "") {
                return session()->flash('error', 'Pay fail!');
            }
            $this->deleteProduct();
            $this->dispatch('updateCartCount');
            session()->flash('success', 'Pay success!');
            Mail::to($orders[0]->Email)->send(new PlaceOrderMailable($orders, $total_price));
        } catch (\Throwable $th) {
            Log::info($th->getmessage());
            return session()->flash('error', 'Pay fail!');
        }
    }
    //idea cancel when chose product
    public function cancelChoose($prod_id)
    {
        unset($this->quantityChoose[$prod_id]);
        unset($this->priceChoose[$prod_id]);
    }
    //idea change total price when buy choose
    public function totalPriceChoose()
    {
        return array_sum($this->priceChoose);
    }
    //idea change button when product was chose
    public function productChose($prod_id)
    {
        $this->quantityChoose[$prod_id] = $this->quantity[$prod_id];
        $this->priceChoose[$prod_id] = $this->price[$prod_id];
        $this->colorChoose[$prod_id] = $this->color[$prod_id];
    }
    //idea total price for all product
    public function totalPrice()
    {
        return array_sum($this->price);
    }
    //idea add key=pro_id, value=quantity to array
    public function addQuantityPrice()
    {
        $this->products->map(function ($product) {
            if ($product->products->quantity > 0) {
                if ($product->quantity > $product->products->quantity) {
                    $this->quantity[$product->product_id] = $product->products->quantity;
                    $this->price[$product->product_id] = $product->price;
                    $this->color[$product->product_id] = $product->color->id;
                } else {
                    $this->quantity[$product->product_id] = $product->quantity;
                    $this->price[$product->product_id] = $product->price;
                    $this->color[$product->product_id] = $product->color->id;
                }
            }
        });
    }
    //idea find product by pro_id and update quantity,price
    public function increment($prod_id)
    {
        foreach ($this->products as $product) {
            if ($product->product_id == $prod_id && $product->quantity < $this->quantityInStock[$prod_id]) {
                $product->quantity += 1;
                $product->price = $product->products->selling_price * $product->quantity;
                $product->save();
                break;
            }
            if ($product->product_id == $prod_id && $product->quantity == $this->quantityInStock[$prod_id]) {
                return session()->flash($prod_id, 'Quantity in stock is not enough!');
            }
        }
    }
    public function decrement($prod_id)
    {
        foreach ($this->products as $product) {
            if ($product->product_id == $prod_id && $product->quantity > 1) {
                $product->quantity -= 1;
                $product->price = $product->products->selling_price * $product->quantity;
                $product->save();
            }
        }
    }
    //idea remove product on cart
    public function removeProductOnCart($id)
    {
        cart::where('product_id', $id)->where('user_id', auth()->user()->id)->delete();
        $this->dispatch('updateCartCount');
    }
    //idea decrease quantity product when user pay product
    public function decreaseQuantityProduct($prod_id, $color_id, $quantity)
    {
        $product_color = Product_color::where('product_id', $prod_id)->where('color_id', $color_id)->first();
        $product_color->fill(['quantity' => $product_color->quantity - $quantity]);
        $product_color->save();
        $product = Product::find($product_color->product_id);
        $product->fill(['quantity' => $product->quantity - $quantity]);
        $product->save();
    }
    //idea fill information user
    public function fillInformationUser()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        if (auth()->user()->details != null) {
            $this->phone = auth()->user()->details->phone;
            $this->address = auth()->user()->details->address;
        }
    }


    public function render()
    {
        $this->getProductsFromCart();
        $this->addQuantityPrice();
        $this->fillInformationUser();
        if ($this->quantityChoose != null) {
            $totalPrice = $this->totalPriceChoose();
        } else {
            $totalPrice = $this->totalPrice();
        }
        return view('livewire.user.cart.index', ['products' => $this->products, 'totalPrice' => $totalPrice]);
    }
}
