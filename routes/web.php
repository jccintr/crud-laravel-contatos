<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CategoriaController;

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

/*
Route::get('/', function () {
    return view('index');
});
*/

Route::get('/',[ContatoController::class,'index']);
Route::get('/contatos/new',[ContatoController::class,'create']);
Route::post('/contatos',[ContatoController::class,'store'])->name('contatos.new');
Route::post('/contatos/{id}',[ContatoController::class,'update']);
Route::get('/contatos/delete/{id}',[ContatoController::class,'destroy']);
Route::get('/contatos/edit/{id}',[ContatoController::class,'edit']);

Route::get('/categorias',[CategoriaController::class,'index']);
Route::get('/categorias/edit/{id}',[CategoriaController::class,'edit']);
Route::post('/categorias/{id}',[CategoriaController::class,'update']);

Route::get('/categorias/new',[CategoriaController::class,'create']);
Route::post('/categorias',[CategoriaController::class,'store']);
Route::get('/categorias/delete/{id}',[CategoriaController::class,'destroy']);