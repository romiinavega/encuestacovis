<?php

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
//version nueva de Laravel
/*use App\Http\Controllers\Api\RespuestasController;
Route::post('/respuestas',
    [RespuestasController::class,'store'])->
    name('api.respuestas.store');
    
Route::get('/tiposusuario',
    [TiposUsuarioController::class,'index'])->
    name('api.tiposusuario.index');*/

Route::post('/respuestas',
    'Api\RespuestasController@store')->
    name('api.respuestas.store');

Route::get('/tiposusuario',
    'Api\TiposUsuarioController@index')->
    name('api.tiposusuario.index');
