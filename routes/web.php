<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ZenlessController;
use App\Http\Controllers\ComptadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comptador', [ComptadorController::class, 'index']);
Route::post('/incrementar', [ComptadorController::class, 'incrementar']);
Route::post('/decrementar', [ComptadorController::class, 'decrementar']);
Route::post('/reset', [ComptadorController::class, 'reset']);

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::get('/books/{book}/delete', [BookController::class, 'delete'])->name('books.delete');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

Route::get('/Zenless', [ZenlessController::class, 'index'])->name('Zenless.index');
Route::get('/Zenless/create', [ZenlessController::class, 'create'])->name('Zenless.create');
Route::post('/Zenless', [ZenlessController::class, 'store'])->name('Zenless.store');
Route::get('/Zenless/{zenless}', [ZenlessController::class, 'show'])->name('Zenless.show');
Route::get('/Zenless/{zenless}/edit', [ZenlessController::class, 'edit'])->name('Zenless.edit');
Route::put('/Zenless/{zenless}', [ZenlessController::class, 'update'])->name('Zenless.update');
Route::get('/Zenless/{zenless}/delete', [ZenlessController::class, 'delete'])->name('Zenless.delete');
Route::delete('/Zenless/{zenless}', [ZenlessController::class, 'destroy'])->name('Zenless.destroy');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
