<?php


use App\Http\Controllers\HomeController;        // for laravel 8
use App\Http\Controllers\ProductController;    // for laravel 8
use App\Http\Controllers\AboutController; 	  // for laravel 8
use App\Http\Controllers\FeatureController;  // for laravel 8
use App\Http\Controllers\ItemController; 	// for laravel 8
use App\Http\Controllers\ArticleController; 	// for laravel 8
use App\Http\Controllers\InvoiceController; 	// for laravel 8
use App\Http\Controllers\SearchController; 	// for laravel 8

use App\Http\Controllers\WelcomeController;        // for laravel 8

use Illuminate\Support\Facades\Route;

Route::get('/welcome', [WelcomeController::class, 'index']);

// Route::get('/',     [HomeController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);

Route::get('/about',   [AboutController::class, 'index']);

Route::get('/feature', [FeatureController::class, 'index']);

Route::get('/{cat}/{product_id}', [ItemController::class, 'show'])->name('itemProduct');

Route::get('/invoice', [InvoiceController::class, 'generate']);

Route::get('/article', [ArticleController::class, 'index']);

//Route::get('/search',  [SearchController::class, 'search'])->name('searchroute');
Route::get('/search',  [ProductController::class, 'search'])->name('searchroute');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
