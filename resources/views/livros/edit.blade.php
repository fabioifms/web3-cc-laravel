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
    <form action="#">

      <label for="nome">Título</label>
      <input type="text" id="titulo" name="titulo" placeholder="Digite o título do livro" required>
      <label for="autor">Autor</label>
      <input type="text" id="autor" name="autor" placeholder="Digite o autor" required>
      <label for="descricao">Descrição</label>
      <input type="text" id="descricao" name="descricao" placeholder="Digite uma descrição" required>
      <label for="imagem">Envie uma imagem do livro</label>
      <input type="file" name="imagem" accept="image/*" id="imagem" placeholder="Envie uma imagem">

      <input type="submit" name="editar" class="botao-cadastrar"  value="Editar livro"/>
    </form>

  </section>
  
</x-layout>