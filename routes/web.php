<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/posts',[PostsController::class,'index'])->name ('posts.index');
Route::post('/posts',[PostsController::class,'store'])->name ('posts.store');
Route::get('/posts/create',[PostsController::class,'create'])->name ('posts.create');
Route::get('/posts/archive',[PostsController::class,'archive'])->name ('posts.archive');

Route::get('/posts/{post}',[PostsController::class,'show'])->name ('posts.show');
Route::get('/posts/{post}/edit',[PostsController::class,'edit'])->name ('posts.edit');
Route::put('/posts/{post}',[PostsController::class,'update'])->name ('posts.update');
Route::put('/posts/{post}',[PostsController::class,'delete'])->name ('posts.delete');


Route::put('/posts/{post}/archive',[PostsController::class,'restore'])->name ('posts.restore');
Route::delete('/posts/{post}/archive',[PostsController::class,'destroy'])->name ('posts.destroy');





