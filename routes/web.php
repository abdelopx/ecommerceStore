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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/home', function () {
    return view('homePage');
});

Route::get('/addProducts', function(){
    $product = Product::create([
        'productcode' => 'CODE-001',
        'description' => 'Dell Latitude',
        'indate' => '2020-12-20',
        'quantityonhand'=>20,
        'price' => 4999.99,
        'discount'=> 0.20,
        'supplier'=> 'Electronic'
    ]);
});

Route::resource('/products', 'App\Http\Controllers\ProductsController');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
