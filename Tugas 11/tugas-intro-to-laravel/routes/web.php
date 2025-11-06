<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/welcome', [AuthController::class, 'handleRegister']);
Route::get('/table', [HomeController::class, 'showTable']);
Route::get('/data-table', [HomeController::class, 'showDataTable']);

Route::resource('cast', CastController::class);
