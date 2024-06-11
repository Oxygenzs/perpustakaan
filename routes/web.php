<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\BacaController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\UserController;

Route::resource('levels', LevelController::class);
Route::resource('bukus', BukuController::class);
Route::resource('bacas', BacaController::class);
Route::resource('penulis', PenulisController::class);
Route::resource('penerbits', PenerbitController::class);
Route::resource('users', UserController::class);
Route::get('/', function () {
    return view('welcome');
});



