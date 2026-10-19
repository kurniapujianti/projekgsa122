<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentikasioncontroller;
use App\Http\Controllers\latihan;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CheckoutController;

// LOGIN
Route::get('/login', [
    authentikasioncontroller::class, 'login'
])->name('login');

Route::post('/login', [
    authentikasioncontroller::class, 'loginProcess'
]);

// REGISTER
Route::get('/register', [
    authentikasioncontroller::class, 'register'
])->name('register');

Route::post('/register', [
    authentikasioncontroller::class, 'store'
]);

// HOME
Route::get('/home', [
    authentikasioncontroller::class, 'home'
])->name('home');

// CRUD BERITA - PUBLIK
Route::get('/berita', [
    BeritaController::class, 'index'
])->name('berita');

Route::get('/berita/create', [
    BeritaController::class, 'create'
])->name('berita.create');

Route::post('/berita', [
    BeritaController::class, 'store'
])->name('berita.store');

Route::get('/berita/{berita}/edit', [
    BeritaController::class, 'edit'
])->whereNumber('berita')->name('berita.edit');

Route::put('/berita/{berita}', [
    BeritaController::class, 'update'
])->whereNumber('berita')->name('berita.update');

Route::delete('/berita/{berita}', [
    BeritaController::class, 'destroy'
])->whereNumber('berita')->name('berita.destroy');

Route::get('/berita/{berita}', [
    BeritaController::class, 'show'
])->whereNumber('berita')->name('berita.show');

// LOGOUT
Route::post('/logout', [
    authentikasioncontroller::class, 'logout'
])->name('logout');

// PRODUK
Route::get('/produk', [
    ProductController::class, 'produk'
])->name('produk.index');

Route::get('/produk/create', [
    ProductController::class, 'create'
])->name('produk.create');

Route::post('/produk', [
    ProductController::class, 'store'
])->name('produk.store');

Route::get('/produk/{id}/edit', [
    ProductController::class, 'edit'
])->name('produk.edit');

Route::put('/produk/{id}', [
    ProductController::class, 'update'
])->name('produk.update');

Route::delete('/produk/{id}', [
    ProductController::class, 'destroy'
])->name('produk.destroy');


// // KALKULATOR
// Route::get('/kalkulator', [
//     latihan::class, 'kalkulator'
// ]);

// Route::post('/kalkulator/hitung', [
//     latihan::class, 'hitung'
// ]);

// KERANJANG
Route::post('/cart/add/{id}', [
    CheckoutController::class, 'addToCart'
])->name('cart.add');

Route::get('/cart', [
    CheckoutController::class, 'cart'
])->name('cart');

Route::post('/cart/increase/{id}', [
    CheckoutController::class, 'increase'
])->name('cart.increase');

Route::post('/cart/decrease/{id}', [
    CheckoutController::class, 'decrease'
])->name('cart.decrease');

Route::delete('/cart/remove/{id}', [
    CheckoutController::class, 'remove'
])->name('cart.remove');

// CHECKOUT - WAJIB LOGIN
Route::get('/checkout', [
    CheckoutController::class, 'checkout'
])->middleware('auth')->name('checkout');

Route::post('/checkout/process', [
    CheckoutController::class, 'processCheckout'
])->middleware('auth')->name('checkout.process');

Route::get('/checkout/success/{id}', [
    CheckoutController::class, 'success'
])->middleware('auth')->name('checkout.success');