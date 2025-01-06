@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

<x-layout titulo='Negritude - Novo Livro'>

    <div class="container-livros-titulo">
        <h3>Novo Livro</h3>
        <img class= "ornaments" src="{{ asset('img/ornamento.png') }}" alt="ornaments">
    </div>
    <section class="container-form">
        
        <x-livros.form action="/livros/salvar" submit="Cadastrar Livro"/>
    
    </section>

</x-layout>