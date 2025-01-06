<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliografiaController;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\RelatorioController;

Route::get('/', [BibliografiaController::class,'index']);
Route::get('/bibliografia', [BibliografiaController::class,'index']);

Route::get('/livros', [LivrosController::class,'index']);
Route::get('/livros/novo', [LivrosController::class,'create']);
Route::get('/livros/editar/{id}', [LivrosController::class,'edit']);
Route::post('/livros/salvar', [LivrosController::class,'store']);
Route::delete('livros/excluir', [LivrosController::class,'destroy']);
Route::put('livros/alterar', [LivrosController::class,'update']);

Route::get('/relatorio',[RelatorioController::class,'gerarRelatorio']);
