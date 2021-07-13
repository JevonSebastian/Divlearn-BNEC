<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/list-past-champions', [\App\Http\Controllers\PastChampionsController::class, 'listPastChampion'])->name('list-past-champions');
Route::get('/login', function () {
    return view('pages.login');
})->name('login');
Route::get('/register', function () {
    return view('pages.register');
})->name('register');

// Route::post('/create',[\App\Http\Controllers\HomeController::class, 'create']);
