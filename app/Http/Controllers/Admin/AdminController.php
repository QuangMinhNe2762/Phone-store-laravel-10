<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Product_imageService;
use App\Http\Services\UserService;
use App\Models\Oder;
use App\Models\Product;
use App\Models\Product_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected $product_imageService;
    public function __construct(Product_imageService $product_imageService)
    {
        $this->product_imageService = $product_imageService;
    }
    public function index()
    {
        $user = Auth::user();
        return view('Admin.index', ['title' => 'Admin Dashboard', 'user' => $user]);
    }



    //idea view all image of product
    public function ViewImageProduct($id)
    {
        $imagesProduct = Product_image::where('product_id', $id)->get();
        return view('Admin.Product_images.AllImage', ['title' => 'View Image Product', 'imagesProduct' => $imagesProduct]);
    }
    //idea update for 1 image
    public function update_image(Request $request, $id)
    {
        if ($this->product_imageService->update($id, $request->file('image'))) {
            return redirect()->back()->with('success', 'Update image successfully!');
        }
        return redirect()->back()->with('error', 'Update image failed!');
    }
    //idea delete image
    public function delete_image($id)
    {
        if ($this->product_imageService->delete($id)) {
            return redirect()->back()->with('success', 'Delete image successfully!');
        }
        return redirect()->back()->with('error', 'Delete image failed!');
    }
    //idea detail product
    public function detailProduct($id)
    {
        $product = Product::find($id);
        if ($product) {
            return view('livewire.admin.product.detail', ['title' => 'Detail Product', 'product' => $product]);
        }
        return redirect()->back()->with('error', 'Product not found!');
    }
    //idea detail invoice
    public function detailInvoice($id)
    {
        $invoice = Oder::where('order_id', $id)->get();
        if ($invoice) {
            return view('livewire.admin.invoice.InvoiceDetail', ['title' => 'Detail Invoice', 'invoice' => $invoice]);
        }
        return redirect()->back()->with('error', 'Invoice not found!');
    }
}
