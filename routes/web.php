<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/blog-detail/{id}', [HomeController::class,'blogDetail'])->name('blog.detail');
Route::post('/make-blog-comment/{id}', [CommentController::class,'makeBlogComment'])->name('comment.make-blog-comment');
Route::get('/comments', [CommentController::class,'index'])->name('comments');
Route::post('/comment/publish/{id}', [CommentController::class,'publish'])->name('comment.publish');
Route::post('/comment/unpublish/{id}', [CommentController::class,'unpublish'])->name('comment.unpublish');


//Route::get('/category/manage',[CategoryController::class,'manage'])->name('category.manage');





Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::resource('/category',CategoryController::class);
    Route::resource('/blog',BlogController::class);
});
