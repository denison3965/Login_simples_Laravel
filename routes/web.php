<?php

use App\Http\Controllers\DepartamentoControlador;
use App\Http\Controllers\ProdutoControlador;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Usando middleware para verificar se o usuário esta logado 
Route::get('/produtos', [ProdutoControlador::class, "index"]);

//Verificando se o usuário esta logado pela controllert
Route::get('/departamentos', [DepartamentoControlador::class, 'index']);

//Verificando se o usuário esta logado pela view
Route::get('/departamentos2', function () {
    return view('departamentos');
});