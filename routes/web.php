<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\GenreController;
use App\Http\Controllers\admin\AnimeController;
use App\Http\Controllers\admin\UpdateController;

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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('admin')
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('genre', GenreController::class);
        Route::get('searchg', [GenreController::class, 'search'])->name('genre.search');
        Route::resource('list', AnimeController::class);
        Route::get('searcha', [AnimeController::class, 'search'])->name('list.search');
        Route::resource('update', UpdateController::class);
        Route::get('searchu', [UpdateController::class, 'search'])->name('update.search');
    });
