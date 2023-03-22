<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add', [\App\Http\Controllers\ArrayController::class, 'addToArray']);
Route::get('/remove', [\App\Http\Controllers\ArrayController::class, 'removeFromArray']);
Route::get('/send', [\App\Http\Controllers\CheckStandartInterfaceController::class, 'sendMessage']);
Route::get('/foreach_arr', [\App\Http\Controllers\CheckStandartInterfaceController::class, 'foreachArr']);
