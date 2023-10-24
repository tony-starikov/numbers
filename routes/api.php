<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('numbers', [\App\Http\Controllers\NumberController::class, 'generate'])->name('numbers.store');
Route::get('numbers/{id}', [\App\Http\Controllers\NumberController::class, 'retrieve'])->name('numbers.show');
