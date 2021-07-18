<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\GenreController;
use App\Http\Controllers\admin\AnimeController;
use App\Http\Controllers\admin\UpdateController;
use App\Http\Controllers\admin\RequestController;
use App\Http\Controllers\admin\SeasonCateController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('genre', GenreController::class);
        Route::get('searchg', [GenreController::class, 'search'])->name('genre.search');
        Route::resource('list', AnimeController::class);
        Route::get('searcha', [AnimeController::class, 'search'])->name('list.search');
        Route::resource('update', UpdateController::class);
        Route::get('searchu', [UpdateController::class, 'search'])->name('update.search');
        Route::resource('request', RequestController::class);
        Route::get('searchr', [RequestController::class, 'search'])->name('request.search');
        Route::resource('category', SeasonCateController::class);
    });

Auth::routes();

