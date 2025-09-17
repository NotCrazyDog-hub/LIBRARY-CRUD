<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');