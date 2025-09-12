<?php

use App\Http\Controllers\DevelopersController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/developers', [DevelopersController::class, 'index'])->name('developers.index');


Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::get('/posts/{id}',  'show')->name('posts.show');
    Route::get('/posts/edit/{id}',  'edit')->name('posts.update');
    Route::get('/posts/delete/{id}',  'delete')->name('posts.delete');
    Route::get('/posts/reset',  'reset')->name('posts.reset');
});