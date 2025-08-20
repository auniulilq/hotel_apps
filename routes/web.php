<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// get, post, put, delete (meelihat/read, insert, create, update, )
Route::get('belajar', function () {
    return "<h1>selamat datang di laravel</h1>";
});

route::get('belajar', [\App\Http\Controllers\BelajarController::class, 'index']);
route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
route::post('login_action', [\App\Http\Controllers\LoginController::class, 'loginAction'])->name('login_action');

route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
route::resource('user', \App\Http\Controllers\UserController::class);
route::resource('categories', \App\Http\Controllers\CategotiesController::class);
route::resource('room', \App\Http\Controllers\RoomController::class);

Route::get('callName', [\App\Http\Controllers\BelajarController::class, 'getCallName']);
Route::get('tambah', [\App\Http\Controllers\BelajarController::class, 'tambah'])->name('tambah');
Route::get('kurang', [\App\Http\Controllers\BelajarController::class, 'kurang'])->name('kurang');
Route::get('bagi', [\App\Http\Controllers\BelajarController::class, 'bagi'])->name('bagi');
Route::get('kali', [\App\Http\Controllers\BelajarController::class, 'kali'])->name('kali');
route::post('store_tambah', [\App\Http\Controllers\BelajarController::class, 'storeTambah'])->name('store_tambah');
route::post('store_kurang', [\App\Http\Controllers\BelajarController::class, 'storeKurang'])->name('store_kurang');
route::post('store_bagi', [\App\Http\Controllers\BelajarController::class, 'storeBagi'])->name('store_bagi');
route::post('store_kali', [\App\Http\Controllers\BelajarController::class, 'storeKali'])->name('store_kali');
