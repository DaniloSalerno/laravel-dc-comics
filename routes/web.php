<?php

use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Admin\ComicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/comics', [PageController::class, 'comics'])->name('comics');
Route::get('/show/{comic} ', [PageController::class, 'show'])->name('show');

Route::get('/admin/comics/cestino', [ComicController::class, 'deleted_comics'])->name('cestino');
//creare rotte per restore e forceDelete

Route::resource('admin/comics', ComicController::class);
