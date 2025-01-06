<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use PDF;
use Illuminate\Support\Facades\DB;

class RelatorioController extends Controller
{
    public function gerarRelatorio()
    {
        $livros = DB::table('livros')
        ->where('titulo','LIKE','%a%')
        ->get();

        $pdf = PDF::loadView('relatorios.livros-pdf',['livros' => $livros]);

        return $pdf->stream('livros.pdf');
    }
}
