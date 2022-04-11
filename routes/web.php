<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
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

// frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/index', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/detail-product/{product_id}', [ProductController::class, 'detail_product']);

// user
Route::get('/login', [UserController::class, 'login']);
Route::get('/logout-user', [UserController::class, 'logout_user']);
Route::post('/login-user', [UserController::class, 'login_user']);
Route::post('/register-user', [UserController::class, 'register_user']);

// list products by category
Route::get('/shop/category/{category_id}', [CategoryController::class, 'category_product']);

// list products by brand
Route::get('/shop/brand/{brand_id}', [BrandController::class, 'brand_product']);

// cart
Route::get('/cart', [CartController::class, 'cart']);
Route::post('/save-cart', [CartController::class, 'save_cart']);
Route::get('/delete-cart/{cart_id}', [CartController::class, 'delete_cart']);

// checkout
Route::get('/checkout', [CheckoutController::class, 'checkout'])->middleware('checklogin');
Route::post('/save-checkout', [CheckoutController::class, 'save_checkout']);
Route::get('/payment', [CheckoutController::class, 'payment']);




// backend
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard'])->middleware('isadmin');
Route::post('/login', [AdminController::class, 'login']);
Route::get('/logout', [AdminController::class, 'logout']);

// Category 
Route::get('/list-categories', [CategoryController::class, 'list_categories']);
Route::get('/delete-category/{category_id}', [CategoryController::class, 'delete_category']);
Route::post('/add-category', [CategoryController::class, 'add_category']);
Route::post('/update-category', [CategoryController::class, 'update_category']);

Route::get('/active-category/{category_id}', [CategoryController::class, 'active_category']);
Route::get('/unactive-category/{category_id}', [CategoryController::class, 'unactive_category']);

// Brand Product
Route::get('/list-brands', [BrandController::class, 'list_brands']);
Route::get('/delete-brand/{brand_id}', [BrandController::class, 'delete_brand']);
Route::post('/add-brand', [BrandController::class, 'add_brand']);
Route::post('/update-brand', [BrandController::class, 'update_brand']);

Route::get('/active-brand/{brand_id}', [BrandController::class, 'active_brand']);
Route::get('/unactive-brand/{brand_id}', [BrandController::class, 'unactive_brand']);

// Product
Route::get('/list-products', [ProductController::class, 'list_products']);
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);
Route::post('/add-product', [ProductController::class, 'add_product']);
Route::post('/update-product', [ProductController::class, 'update_product']);

Route::get('/active-product/{product_id}', [ProductController::class, 'active_product']);
Route::get('/unactive-product/{product_id}', [ProductController::class, 'unactive_product']);
