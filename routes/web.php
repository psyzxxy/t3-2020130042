<?php
use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

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

// Route::resources('books', BooksController::class);
Route::get('/books', [BooksController::class,'index'])->name('books.index');
Route::get('/books/create', [BooksController::class,'create'])->name('books.create');
Route::post('/books', [BooksController::class,'store'])->name('books.store');
Route::get('/books/{books}', [BooksController::class,'show'])->name('books.show');
Route::get('/books/{books}/edit', [BooksController::class,'edit'])->name('books.edit');
Route::patch('/books/{books}', [BooksController::class,'update'])->name('books.update');
Route::delete('/books/{books}', [BooksController::class,'destroy'])->name('books.destroy');
