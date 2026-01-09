<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TestRelationship\UserController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('welcome');
});
Route::get('/articles/details', function () {
 return 'Article Details';
})->name('article.details');

Route::get('/articles/more', function() {
 return redirect()->route('article.details');
});

Route::get('/products',[ProductController::class,'product']);

Route::get('/articles',[ArticleController::class,'index'])
    ->middleware('auth');
Route::get('/articles/detail',[ArticleController::class,'index1'])->middleware('auth');
Route::get('/employees',[EmployeeController::class,'index']);
Route::get('/employees/detail',[EmployeeController::class,'index1']);
Route::get('/employees/byposition',[EmployeeController::class,'index2']);
Route::get('/employees/create',[EmployeeController::class,'create']);
Route::get('/employees/update',[EmployeeController::class,'update']);
Route::get('/employees/delete',[EmployeeController::class,'delete']);
Route::get('/test-relation', [UserController::class, 'index']);
Route::get('/test-relation1', [UserController::class, 'index1']);
Route::get('/post-list', [UserController::class, 'index2']);
Route::get('/userprofile', [UserController::class, 'index3']);
Route::get('/likedposts', [UserController::class, 'index4']);
Route::get('/post/likers', [UserController::class, 'showPostLikers']);
Route::get('/user/{id}/latest-comment', [UserController::class, 'showLatestComment']);
Route::get('/user/{id}/comments', [UserController::class, 'showUserComments']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/guest', function () {
    return 'Guest Page - Only guest can access';
})->middleware('guest');

Route::get('/auth_user', function () {
    return 'Auth User Page - Only Auth User can access';
})->middleware('auth');
Route::get('/admin', function () {
    return 'Admin Page - Only admin can access';
})->middleware('check.email');

require __DIR__.'/auth.php';
