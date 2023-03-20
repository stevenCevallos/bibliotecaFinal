<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});

Route::get('/books', [BookController::class, 'index'])->name('book.index');
Route::get('books/create', [BookController::class, 'create']) ->name('books.create');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::post('books', [BookController::class, 'store'])->name('books.store');
Route::get('books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('books/{id}', [BookController::class, 'update'])->name('books.update');
// Route::delete('books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');

