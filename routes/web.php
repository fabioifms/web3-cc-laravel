<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliografiaController;
use App\Http\Controllers\LivrosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bibliografia', [BibliografiaController::class,'index']);

Route::get('/livros', [LivrosController::class,'index']);
Route::get('/livros/novo', [LivrosController::class,'create']);
Route::get('/livros/editar/{id}', [LivrosController::class,'edit']);

