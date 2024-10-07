<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;        // for laravel 8
use App\Http\Controllers\ProductController;    // for laravel 8
use App\Http\Controllers\AboutController; 	  // for laravel 8
use App\Http\Controllers\FeatureController;  // for laravel 8
use App\Http\Controllers\ItemController; 	// for laravel 8
use App\Http\Controllers\ArticleController; 	// for laravel 8
use App\Http\Controllers\InvoiceController; 	// for laravel 8
use App\Http\Controllers\SearchController; 	// for laravel 8
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



/*
Route::get('/', function () {
    return view('welcome');  // folder /home/index.blade.php
});
*/

Route::get('/',        [HomeController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);

Route::get('/about',   [AboutController::class, 'index']);

Route::get('/feature', [FeatureController::class, 'index']);

Route::get('/{cat}/{product_id}', [ItemController::class, 'show'])->name('itemProduct');

Route::get('/invoice', [InvoiceController::class, 'generate']);

Route::get('/article', [ArticleController::class, 'index']);

//Route::get('/search',  [SearchController::class, 'search'])->name('searchroute');
Route::get('/search',  [ProductController::class, 'search'])->name('searchroute');

//Route::get('/{cat}', [ProductController::class, 'showCategory'])->name('showCategory');
//Route::get('/{cat}/{product_id}', [ProductController::class, 'show'])->name('showProduct');
// отдельная страница для товара:
// Route::get('/{cat}/{product_id}', 'ProductController@show')->name('showProduct');

/*
Route::get('/', function () {
    return view('home.index');  // folder /home/index.blade.php
});

Route::get('/', function () {
    return view('home.product');
});
*/