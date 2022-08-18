<?php

use App\Http\Livewire\Admin\Brand\BrandCreate;
use App\Http\Livewire\Admin\Brand\BrandEdit;
use App\Http\Livewire\Admin\Brand\BrandIndex;
use App\Http\Livewire\Admin\Category\CategoryIndex;
use App\Http\Livewire\Admin\Coupons\CouponCreate;
use App\Http\Livewire\Admin\Coupons\CouponEdit;
use App\Http\Livewire\Admin\Coupons\CouponIndex;
use App\Http\Livewire\Admin\DashboardIndex;
use App\Http\Livewire\Admin\Orders\OrderCreate;
use App\Http\Livewire\Admin\Orders\OrderEdit;
use App\Http\Livewire\Admin\Orders\OrderIndex;
use App\Http\Livewire\Admin\Product\ProductIndex;
use App\Http\Livewire\Admin\Sale\SaleEdit;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\MyOrdersComponent;
use App\Http\Livewire\ProductDetailComponent;
use App\Http\Livewire\ProfileComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\ThankYouComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('home');
Route::get('/cart', CartComponent::class)->name('cart');
Route::get('/shop', ShopComponent::class)->name('shop');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/{product}/product-detail', ProductDetailComponent::class)->name('product.detail');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');



Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/profile', ProfileComponent::class)->name('profile');
    Route::get('/my-orders', MyOrdersComponent::class)->name('my_orders');
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('/checkout', CheckoutComponent::class)->name('checkout');
    Route::get('/thank-you', ThankYouComponent::class)->name('thankyou');


    Route::group(['middleware' => 'is_admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {

        Route::get('dashboard', DashboardIndex::class)->name('dashboard.index');
        Route::get('categories', CategoryIndex::class)->name('categories.index');
        Route::get('products', ProductIndex::class)->name('products.index');


        //Brands
        Route::get('brands', BrandIndex::class)->name('brands.index');
        Route::get('brands/create', BrandCreate::class)->name('brands.create');
        Route::get('brands/{brand}/edit', BrandEdit::class)->name('brands.edit');

        //Sale
        Route::get('sale', SaleEdit::class)->name('sale.edit');

        //Coupons
        Route::get('coupons', CouponIndex::class)->name('coupons.index');
        Route::get('coupons/create', CouponCreate::class)->name('coupons.create');
        Route::get('coupons/{coupon}/edit', CouponEdit::class)->name('coupons.edit');

        //Orders
        Route::get('orders', OrderIndex::class)->name('orders.index');
        Route::get('orders/create', OrderCreate::class)->name('orders.create');
        Route::get('orders/{order}/edit', OrderEdit::class)->name('orders.edit');

    });
    
});
