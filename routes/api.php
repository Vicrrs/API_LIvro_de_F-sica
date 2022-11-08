<?php

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

// Route::get('/livro', [LivrosController::class, 'index']);
// Route::get('/livro/{id}', [LivrosController::class, 'show']);
// Route::put('/livro/{id}', [LivrosController::class, 'update']);
// Route::post('/livro', [LivrosController::class, 'store']);
// Route::delete('/livro/{id}', [LivrosController::class, 'destroy']);


// Route::get('/autor', [AutorController::class, 'index']);
// Route::get('/autor/{id}', [AutorController::class, 'show']);
// Route::put('/autor/{id}', [AutorController::class, 'update']);
// Route::post('/autor', [AutorController::class, 'store']);
// Route::delete('/autor/{id}', [AutorController::class, 'destroy']);


// Route::get('/conteudo', [ConteudoController::class, 'index']);
// Route::get('/conteudo/{id}', [ConteudoController::class, 'show']);
// Route::put('/conteudo/{id}', [ConteudoController::class, 'update']);
// Route::post('/conteudo', [ConteudoController::class, 'store']);
// Route::delete('/conteudo/{id}', [ConteudoController::class, 'destroy']);

//Com essa mudança nao usamos mais id mais sim a variavel de cada controller
// Route::apiResource('livro', LivrosController::class);
// Route::apiResource('autor', AutorController::class);
// Route::apiResource('conteudo', ConteudoController::class);

// agora usando resource no plural
Route::apiResources([
    'livro' => LivrosController::class,
    'autor' => AutorController::class,
    'conteudo' => ConteudoController::class
]);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
