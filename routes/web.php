<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DevelopersController;
use App\Http\Controllers\PoksController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// developers
Route::middleware('auth')->controller(DevelopersController::class)->group(function () {
    Route::get('/developers', 'index')->name('developers.index');
    Route::get('/developers/create', 'create')->name('developers.create');
    Route::get('/developers/update/{id}', 'update')->name('developers.update');
    Route::get('/developers/delete/{id}', 'delete')->name('developers.delete');
    Route::post('/developers/store', 'store')->name('developers.store');
    Route::get('/developers/{id}', 'show')->name('developers.show');
});










// warriors
Route::get('/warriors', [PoksController::class, 'index'])->name('warriors.index');


Route::middleware('auth')->controller(PostController::class)->group(function () {
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
