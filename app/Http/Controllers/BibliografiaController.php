<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibliografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Pegar dados vindos na requisição via GET
        //var_dump($request->get('id'));

        //Pegar dados vindos na requisição via formulário POST
        //var_dump($request->input('id'));

        //Pegar dados da url
        //var_dump($request->url());

        //Redirecionamento
        //return redirect('http://www.google.com');

        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
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
