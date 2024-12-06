<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliografiaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bibliografia', [BibliografiaController::class,'index']);

