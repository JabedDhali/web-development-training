<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;

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




/// Blog Create, Show, Delete, Update
Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');

Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create')->middleware('checkuser');
Route::post('blogs', [BlogController::class, 'store'])->name('blogs.store');

Route::get('blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');

Route::delete('blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');

Route::get('blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::put('blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');





/// Category Create, Show, Delete, Update
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');

Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');




/// Tag Create, Show, Delete, Update
Route::get('tags', [TagController::class, 'index'])->name('tags.index');

Route::get('tags/create', [TagController::class, 'create'])->name('tags.create');
Route::post('tags', [TagController::class, 'store'])->name('tags.store');

Route::get('tags/{tag}', [TagController::class, 'show'])->name('tags.show');

Route::delete('tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');

Route::get('tags/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit');
Route::put('tags/{tag}', [TagController::class, 'update'])->name('tags.update');
