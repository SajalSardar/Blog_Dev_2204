<?php

use App\Http\Controllers\AbcdController;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog/', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('blog/create', [BlogController::class, 'insert'])->name('blog.insert');
Route::get('blog/show/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');