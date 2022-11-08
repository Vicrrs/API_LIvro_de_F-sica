<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\ConteudoController;
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


// agora usando resource no plural
Route::apiResources([
    'livro' => LivrosController::class,
    'autor' => AutorController::class,
    'conteudo' => ConteudoController::class
]);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
