<?php

use App\Models\Product;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
Route::get('products/sendemail','App\Http\Controllers\ProductsController@sendemail')->name('products.sendemail');
Route::get('products/singleProduct/{product}','App\Http\Controllers\ProductsController@singleProduct')->name('products.singleProduct');
Route::get('products/allProducts','App\Http\Controllers\ProductsController@allProducts')->name('products.allProducts');
Route::get('products/{product}/addOrder','App\Http\Controllers\ProductsController@addOrder')->name('products.addOrder');
Route::resource('invoices', 'App\Http\Controllers\InvoicesController');
Route::resource('products', 'App\Http\Controllers\ProductsController');



Route::get('/', function () {
    return view('welcome');
});
//Route::get('/ProductsTest', function () {
 //   return view('Products.list');
//});

Route::get('/homePage', function () {
    return view('homePage');
});

Route::get('/success', function () {
    return view('Products.successOrder');
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::resource('/orders', 'App\Http\Controllers\OrdersController');
Route::resource('/order_detail', 'App\Http\Controllers\OrderDetailsController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
