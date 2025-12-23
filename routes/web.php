<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TestRelationship\UserController;
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
Route::get('/employees',[EmployeeController::class,'index']);
Route::get('/employees/detail',[EmployeeController::class,'index1']);
Route::get('/employees/byposition',[EmployeeController::class,'index2']);
Route::get('/employees/create',[EmployeeController::class,'create']);
Route::get('/employees/update',[EmployeeController::class,'update']);
Route::get('/employees/delete',[EmployeeController::class,'delete']);
Route::get('/test-relation', [UserController::class, 'index']);
Route::get('/test-relation1', [UserController::class, 'index1']);