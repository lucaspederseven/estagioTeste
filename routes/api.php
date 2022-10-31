<?php

use App\Http\Controllers\ApiCadastroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('doces',[ApiCadastroController::class,'index']);
Route::get('doces/{id}',[ApiCadastroController::class,'show']);
Route::post('doces',[ApiCadastroController::class,'store'])->name('registrar_doce');;
Route::put('doces/{id}',[ApiCadastroController::class,'update']);
Route::delete('doces/{id}',[ApiCadastroController::class,'destroy']);
