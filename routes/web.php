<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\eleclandController;
use Illuminate\Support\Facades\Auth;

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

/* Route::get('/', function () {
    return view('index');
})->name('index'); */

Route::get('/', [eleclandController::class, 'topProducts'])->name('index');

/* Route::get('/store', function () {
    return view('store');
})->name('store'); */

Route::get('/profile', function () {
    return view('profile');
})->name('profile');


Route::get('/favorite', function () {
    return view('favorite');
})->name('favorite');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

/* Route::get('/product-details', function () {
    return view('product-details');
})->name('product-details');
 */

Route::get('/store', [eleclandController::class, 'products'])->name('store');

Route::get('/product-details/{id}', [eleclandController::class, 'productDetails'])->name('product-details');

Route::get('/cart/{id}', [eleclandController::class, 'addToCart'])->name('cart');

Route::get('/checkout/{id}', [eleclandController::class, 'checkout'])->name('checkout');

Route::post('/invoice', [eleclandController::class, 'invoice'])->name('invoice');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
