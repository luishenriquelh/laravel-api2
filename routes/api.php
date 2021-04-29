<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List musicas
Route::get('musicas', [MusicaController::class, 'index']);

// List single musica
Route::get('musica/{id}', [MusicaController::class, 'show']);

// Create new musica
Route::post('musica', [MusicaController::class, 'store']);

// Update musica
Route::put('musica/{id}', [MusicaController::class, 'update']);

// Delete musica
Route::delete('musica/{id}', [MusicaController::class,'destroy']);
