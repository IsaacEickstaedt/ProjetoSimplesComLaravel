<?php

use App\Http\Controllers\AtualizarClienteController;
use App\Http\Controllers\ClientesController;
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

// Route::get('/', 'ClientesController::index');
Route::get('/', [ClientesController::class, 'index']);
Route::get('/AtualizarCadastro/{id}', [AtualizarClienteController::class, 'carregarcliente']);
Route::post('/AtualizarCadastro/{id}/Carregando', [AtualizarClienteController::class, 'CadastrarAlteracoes']);
Route::get('/{id}/Excluir', [ClientesController::class, 'excluir']);
Route::get('/{id}', [ClientesController::class, 'getIdCliente']);
Route::post('/', [ClientesController::class, 'salvar']);

