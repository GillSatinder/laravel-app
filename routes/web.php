<?php
use App\Product;

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

Route::get('/insert', function(){

    $product = new Product;
    $product->title = 'Title';
    $product->price = 22;
    $product->category = 'food';
    $product->imageUrl = 'yes';
    $product->save();
});
