<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\UserController as UserUserController;
use App\Livewire\Admin\Brands\Index as brandsIndex;
use App\Livewire\Admin\Categories\Index as categoriesIndex;
use App\Livewire\Admin\Colors\Index as colorsIndex;
use App\Livewire\Admin\Invoice\Index as InvoiceIndex;
use App\Livewire\Admin\Product\Index as productIndex;
use App\Livewire\User\Filter\DetailProduct;
use App\Livewire\User\Wishlist\Index as wishlistIndex;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserUserController::class, 'index'])->name('home.index');
Route::get('quickview/{id}', [UserUserController::class, 'quickview'])->name('home.quickview');

Route::get('login', [AuthController::class, 'loginIndex'])->name('login');
Route::get('register', [AuthController::class, 'registerIndex'])->name('register');

Route::get('all-products', [UserUserController::class, 'allProducts'])->name('home.allProducts');

Route::get('categories', [UserUserController::class, 'categories'])->name('home.categories');
Route::get('/category/{slug}', [UserUserController::class, 'categoryDetail'])->name('home.category.detail');

Route::get('brands', [UserUserController::class, 'brands'])->name('home.brands');
Route::get('brands/{slug}', [UserUserController::class, 'brandDetail'])->name('home.brand.detail');

Route::get('product-detail/{slug}', [UserUserController::class, 'productDetail'])->name('home.product.detail');
Route::get('searchProduct', [UserUserController::class, 'searchProduct'])->name('home.searchProduct');
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);


Route::middleware(['auth', 'role'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::resource('users', UserController::class);
    Route::get('searchUser/{search}', [UserController::class, 'search'])->name('users.search');
    Route::get('destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('admincategories', categoriesIndex::class)->name('admin.categories');

    Route::get('adminbrands', brandsIndex::class)->name('brands.index');

    Route::get('admincolors', colorsIndex::class)->name('colors.index');

    Route::get('adminproducts', productIndex::class)->name('products.index');
    Route::get('adminproducts/{id}', [AdminController::class, 'detailProduct'])->name('products.detail');
    Route::get('ViewImageProduct/{id}', [AdminController::class, 'ViewImageProduct'])->name('products.ViewImageProduct');
    Route::post('update_image/{id}', [AdminController::class, 'update_image'])->name('update_image');
    Route::get('delete_image/{id}', [AdminController::class, 'delete_image'])->name('delete_image');

    Route::resource('sliders', SliderController::class);
    Route::get('delete/{id}', [SliderController::class, 'delete'])->name('sliders.delete');
    Route::get('status/{value}', [SliderController::class, 'status'])->name('sliders.status');
    Route::get('searchSlider/{search}', [SliderController::class, 'search'])->name('sliders.search');

    Route::get('invoices', InvoiceIndex::class)->name('invoice.index');
    Route::get('invoice/{id}', [AdminController::class, 'detailInvoice'])->name('invoice.detail');
});
Route::middleware(['auth'])->group(function () {
    Route::get('wishlist', wishlistIndex::class)->name('home.wishlist');
    Route::get('cart', function () {
        if (Auth::check()) {
            return view('User.Cart.index', ['product' => -1, 'title' => 'Cart']);
        } else {
            return redirect()->route('login');
        }
    })->name('home.cart');

    Route::get('profile', [UserUserController::class, 'profile'])->name('home.profile');
    Route::post('updateProfile', [UserUserController::class, 'updateProfile'])->name('home.updateProfile');

    Route::get('YourInvoices', [UserUserController::class, 'YourInvoices'])->name('home.YourInvoices');
    Route::get('YourInvoices/{id}', [UserUserController::class, 'invoiceDetail'])->name('home.invoiceDetail');
    Route::get('test', [UserUserController::class, 'test'])->name('home.test');
    Route::get('logout', [UserUserController::class, 'logout'])->name('home.logout');
});
