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

Route::group(['middleware' => ['auth:sanctum']], function(){
    // agora usando resource no plural
    Route::apiResources([
        'livro' => LivrosController::class,
        'autor' => AutorController::class,
        'conteudo' => ConteudoController::class
    ]);

    Route::post('/logout', [AuthController::class, 'logout']);
});


Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);
