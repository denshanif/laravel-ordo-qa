<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FeatureController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/hello',  [HomeController::class, 'hello']);

Route::get('/perkalian/{angka}', [HomeController::class, 'perkalian']);

Route::get('/tambah', [HomeController::class, 'tambah']);

Route::get('/cars', [CarController::class, 'index']);

Route::get('/cars/insert', [CarController::class, 'store']);

Route::get('/manufactures', [ManufactureController::class, 'index']);

Route::get('/manufactures/insert', [ManufactureController::class, 'store']);

Route::get('/reviews', [ReviewController::class, 'index']);

Route::get('/reviews/insert', [ReviewController::class, 'store']);

Route::get('/features', [FeatureController::class, 'index']);

Route::get('/features/insert', [FeatureController::class, 'store']);
