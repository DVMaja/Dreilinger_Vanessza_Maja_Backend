<?php

use App\Http\Controllers\SzavakController;
use App\Http\Controllers\TemaController;
use App\Models\Szavak;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('szavak', [SzavakController::class, 'szavakKategoriaNevvel']);
Route::get('tema', [TemaController::class, 'index']);
Route::get('szavak/{tema}', [SzavakController::class, 'szavakKategoriankent']);