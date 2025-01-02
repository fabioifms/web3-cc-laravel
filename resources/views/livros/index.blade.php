@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

<x-layout titulo='Negritude - Admin'>

  <section class="container-table">
    <div class="container-livros-titulo">
        <h3>Lista de Livros</h3>
        <img class= "ornaments" src="img/ornamento.png" alt="ornaments">
    </div>
    <table>
      <thead>
        <tr>
          <th>Livro</th>
          <th>Autor</th>
          <th>Descricão</th>
          <th colspan="2">Ação</th>
        </tr>
      </thead>
      <tbody>
      
      @foreach ($livros as $livro)
      <tr>
        <td>{{ $livro->titulo }}</td>
        <td>{{ $livro->autor }}</td>
        <td>{{ $livro->descricao }}</td>
        <td><a class="botao-editar" href="livros/editar/id={{ $livro->id }}">Editar</a></td>
        <td>
          <form>
            <input type="button" class="botao-excluir" value="Excluir">
          </form>
        </td>        
      </tr>
      @endforeach
      
      </tbody>
    </table>
  <a class="botao-cadastrar" href="livros/novo">Cadastrar livro</a>
  <form action="#" method="post">
    <input type="submit" class="botao-cadastrar" value="Baixar Relatório"/>
  </form>
  </section>

</x-layout>