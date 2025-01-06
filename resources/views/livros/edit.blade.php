@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

<x-layout titulo='Negritude - Editar Livro'>

  <div class="container-livros-titulo">
        <h3>Editar Livros</h3>
        <img class= "ornaments" src="{{ asset('img/ornamento.png') }}" alt="ornaments">
  </div>

  <section class="container-form">

    <x-livros.form action="/livros/alterar" submit="Atualizar livro" :livro="$livro" />

  </section>
  
</x-layout>