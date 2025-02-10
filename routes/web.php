<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VitrineController;
use App\Http\Controllers\ItensController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vitrine', [vitrineController::class, 'index']);

Route::get('/itens', [itensController::class, 'index']);
Route::get('/itens/novo', [itensController::class, 'create']);
Route::get('/itens/editar/{id}', [itensController::class, 'edit']);
Route::post('itens/salvar', [itensController::class, 'store']);