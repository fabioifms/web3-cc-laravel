@section('css')
    <link rel="stylesheet" href="css/index.css">
@endsection

<x-layout titulo="Bibliografia - Negritude">

        <h2>Negritude na música de Chico César e os contrapontos com a Indústria Cultural</h2>
        
        <section class="container-livros">
            <div class="container-livros-titulo">
                <h3>Bibliografia</h3>
                <img class= "ornaments" src="img/ornamento.png" alt="ornaments">
            </div>
            <div class="container-bibliografia">
                @foreach ($bibliografia as $livro)
                <div class="container-livro">
                    <div class="container-foto">
                        <img src="{{ $livro->imagem }}">
                    </div>
                    <p>{{ $livro->titulo }}</p>
                    <p>{{ $livro->descricao }}</p>
                    <p>{{ $livro->autor }}</p>
                </div>
                @endforeach
            </div>
        </section>

</x-layout>