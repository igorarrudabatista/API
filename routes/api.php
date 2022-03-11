<?php
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
// */

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('teste', 'App\Http\Controllers\api\TesteController');

Route::apiResource('pessoa', 'App\Http\Controllers\api\PessoaController');

Route::apiResource('/educartech', 'App\Http\Controllers\api\EducartechController');

//Route::apiResource('/seduc', 'App\Http\Controllers\api\Seduc_alunos'); 
Route::get('/seduc/alunos',      'App\Http\Controllers\api\Seduc_alunos@show');
Route::get('seduc/professor', 'App\Http\Controllers\api\Seduc_Professor@show');




//Route::apiResource('/dashboard/home', 'App\Http\Controllers\api\Dashboard');

