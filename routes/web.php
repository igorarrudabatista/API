<?php

use App\Http\Controllers\api\{
Dashboard,
RelatoriosController,
Seduc_Doc

};
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('base', function () {
    return view('base');
}); 
 
Route::get('/dashboard/home',               [Dashboard::class,     'home']);


Route::get('/seduc',               [Seduc_Doc::class,                'index']);
Route::get('/dashboard/conteudo',   [Dashboard::class,                'index']); 
Route::get('/dashboard',            [Dashboard::class,                'index']); 


Route::apiResource('teste', 'App\Http\Controllers\api\TesteController');

//Route::get('/dashboard/conteudo','App\Http\Crontrollers\api\Dashboard');



Route::get('/relatorios/home', [RelatoriosController::class,     'index']);
Route::get('/seduc',           [Seduc_Doc::class,                'index']);

Route::apiResource('/', 'App\Http\Controllers\api\Dashboard'); // Rota para a index






