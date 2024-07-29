<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\BrandService;
use App\Http\Services\CategoryService;
use App\Http\Services\SliderService;
use App\Models\brand;
use App\Models\category;
use App\Models\Oder;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    protected $categoryService, $brandService, $sliderService;
    public function __construct(CategoryService $categoryService, BrandService $brandService, SliderService $sliderService)
    {
        $this->categoryService = $categoryService;
        $this->brandService = $brandService;
        $this->sliderService = $sliderService;
    }
    public function index()
    {
        $sliders = $this->sliderService->showVisibleSliders();
        $brands = $this->brandService->showVisibleBrands();
        $products = Product::where('status', 0)->inRandomOrder()->limit(10)->get();
        $sliderAnother = $this->sliderService->showliders();
        return view('User.index', ['title' => 'Home Page', 'sliders' => $sliders, 'brands' => $brands, 'products' => $products, 'sliderAnother' => $sliderAnother]);
    }

    public function allProducts()
    {
        return view('User.allProducts', ['title' => 'All Products']);
    }

    public function profile()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('User.Invoice.Account', ['title' => 'Profile', 'user' => $user]);
        } else {
            return redirect()->route('login');
        }
    }
    public function updateProfile(Request $request)
    {
        if (Auth::check()) {
            try {
                $user = User::find(auth()->user()->id);
                if ($request->password) {
                    $user->fill([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                    ]);
                } else {
                    $user->fill($request->except('password'));
                }
                $user->save();

                $user->details()->updateOrCreate(
                    [
                        'user_id' => $user->id
                    ],
                    [
                        'phone' => $request->phone,
                        'address' => $request->address
                    ]
                );
                return redirect()->back()->with('success', 'updated profile successfully');
            } catch (\Throwable $th) {
                Log::info($th->getMessage());
                return redirect()->back()->with('error', 'updated profile falsed');
            }
        } else {
            return redirect()->route('login');
        }
    }
    public function categories()
    {
        $categories = $this->categoryService->showVisibleCategories();
        return view('User.categories', ['title' => 'Categories', 'categories' => $categories]);
    }
    public function brands()
    {
        $brands = $this->brandService->showVisibleBrands();
        return view('User.brands', ['title' => 'Brands', 'brands' => $brands]);
    }
    public function quickview($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json([
                'error' => true,
            ]);
        }
        return response()->json([
            'error' => false,
            'product' => $product,
            'product_images' => $product->product_images,
            'brand' => $product->brand,
            'category' => $product->category,
        ]);
    }
    public function categoryDetail($slug)
    {
        return view('User.Category.detail', ['title' => $slug]);
    }
    public function brandDetail($slug)
    {
        return view('User.Brand.detail', ['title' => $slug]);
    }
    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $ProductAnotherBrand = Product::where('brand_id', '!=', $product->brand_id)->where('category_id', $product->category_id)->where('id', '!=', $product->id)->where('status', 0)->inRandomOrder()->limit(5)->get();
        $productWithInBrand = Product::where('brand_id', $product->brand_id)->where('status', 0)->inRandomOrder()->limit(5)->get();
        return view('User.ProductDetail', ['title' => $product->slug, 'product' => $product, 'ProductsAnotherBrand' => $ProductAnotherBrand, 'ProductsWithInBrand' => $productWithInBrand]);
    }
    public function YourInvoices()
    {
        $invoices = Oder::where('user_id', Auth::user()->id);
        $invoices = $invoices->whereColumn('id', 'order_id')->orderBy('id', 'desc')->paginate(5);
        return view('User.Invoice.Account', ['title' => 'Your Invoices', 'invoices' => $invoices]);
    }
    public function invoiceDetail($id)
    {
        $invoice = Oder::where('order_id', $id)->get();
        // dd($invoice[0]->product->product_images[0]->image);
        if (!$invoice) {
            return redirect()->back()->with('error', 'Invoice not found');
        }
        return view('User.Invoice.InvoiceDetail', ['title' => 'Invoice Detail', 'invoice' => $invoice]);
    }
    public function searchProduct(Request $request)
    {
        return view('User.searchProduct', ['title' => 'Search Product', 'search' => $request->search]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
