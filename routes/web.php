<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Product\ProductController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles/detail', function () {
 return 'Article Detail';
});

Route::get('/articles/details', function () {
 return 'Article Details';
})->name('article.details');

Route::get('/articles/more', function() {
 return redirect()->route('article.details');
});

Route::get('/products',[ProductController::class,'product']);

Route::get('/articles',[ArticleController::class,'index']);

Route::get('/articles/detail',[ArticleController::class,'index1']);