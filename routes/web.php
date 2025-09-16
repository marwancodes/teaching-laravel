<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DevelopersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/developers', [DevelopersController::class, 'index'])->name('developers.index');
Route::get('/developers/create', [DevelopersController::class, 'create'])->name('developers.create');
Route::get('/developers/{id}', [DevelopersController::class, 'show'])->name('developers.show');
Route::get('/developers/update/{id}', [DevelopersController::class, 'update'])->name('developers.update');
Route::get('/developers/delete/{id}', [DevelopersController::class, 'delete'])->name('developers.delete');







Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::get('/posts/{id}',  'show')->name('posts.show');
    Route::get('/posts/edit/{id}',  'edit')->name('posts.update');
    Route::get('/posts/delete/{id}',  'delete')->name('posts.delete');
    Route::get('/posts/reset',  'reset')->name('posts.reset');
});


Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::get('/comments/create', [CommentController::class, 'create'])->name('comments.create');


Route::get('/tags', [App\Http\Controllers\TagController::class, 'index'])->name('tags.index');
Route::get('/tags/create', [App\Http\Controllers\TagController::class, 'create'])->name('tags.create');
Route::get('/tags/test-many', [App\Http\Controllers\TagController::class, 'testManyToMany']);
Route::get('/tags/create', [App\Http\Controllers\TagController::class, 'create'])->name('tags.create');
Route::get('/tags/{id}', [App\Http\Controllers\TagController::class, 'delete'])->name('tags.delete');
