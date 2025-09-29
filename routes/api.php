<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::prefix('books')->group(function(){
Route::get('/', [BooksController::class, 'index'])->name('books.index');
Route::post('/', [BooksController::class, 'store'])->name('books.store');
Route::get('/{id}', [BooksController::class, 'show'])->name('books.show');
Route::put('/{id}', [BooksController::class, 'update'])->name('books.update');
Route::delete('/{id}', [BooksController::class, 'destroy'])->name('books.destroy');
});
