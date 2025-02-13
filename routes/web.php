<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VitrineController;
use App\Http\Controllers\ItensController;
use App\Http\Controllers\RelatorioController;

Route::get('/', [vitrineController::class, 'index']);

Route::get('/itens', [itensController::class, 'index']);
Route::get('/itens/novo', [itensController::class, 'create']);
Route::get('/itens/editar/{id}', [itensController::class, 'edit']);
Route::post('itens/salvar', [itensController::class, 'store']);
Route::delete('itens/excluir', [itensController::class, 'destroy']);

Route::get('/relatorio', [RelatorioController::class, 'gerarRelatorio']);