<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
//welcome route

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// //User Route
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.delete');

// //category route

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');

// //products route
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.delete');

// //banners route
Route::get('/banners/create', [BannerController::class, 'create'])->name('banners.create');
Route::get('/banners', [BannerController::class, 'index'])->name('banners');
Route::post('/banners/store', [BannerController::class, 'store'])->name('banners.store');
Route::get('/banners/delete/{id}', [BannerController::class, 'destroy'])->name('banners.delete');

// Shopping Cart Route
Route::post('cart/store', [CartController::class, 'store'])->name('cart.store');
Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::get('cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('checkout', [CartController::class, 'checkoutindex'])->name('checkout.index');