<?php

use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TipoContatoController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('pessoa', PessoaController::class)->only([
    'index', 'show', 'store', 'destroy'
]);
Route::resource('contato', ContatoController::class)->only([
  'index', 'show', 'store', 'destroy'
]);
Route::resource('tipocontato', TipoContatoController::class)->only([
  'index'
]);