<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index',['livros' => $livros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->file('imagem'));

        $livro = new Livro();
        $livro->autor = $request->autor;
        $livro->titulo = $request->titulo;
        $livro->descricao = $request->descricao;
        $livro->imagem = $request->file('imagem')->store('imagens_livros','public');
        $livro->save();

        return redirect('/livros');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('livros.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
