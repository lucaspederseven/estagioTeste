<?php

use App\Http\Controllers\CadastroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/



Route::get('/',[CadastroController::class,'index']);
Route::get('/doces/novo', [CadastroController::class, 'create']);
Route::get('/doces/editar/{id}',[CadastroController::class,'edit']);
Route::post('/doces/novo',[CadastroController::class,'store'])->name('registrar_doce');
Route::put('/doces/editar/{id}',[CadastroController::class,'update']);
Route::delete('/doces/{id}',[CadastroController::class,'destroy']);




