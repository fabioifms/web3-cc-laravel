<form action="{{ $action }}" method="post" enctype="multipart/form-data">

    @csrf
    @isset($livro->id)
        @method('PUT')
        <input type="hidden" name="id" id="id" value="{{ $livro->id }}">
    @endisset

    <label for="nome">Título</label>
    <input type="text" @isset($livro->titulo) value="{{ $livro->titulo }}" @endisset id="titulo" name="titulo" placeholder="Digite o título do livro" required>
    <label for="autor">Autor</label>
    <input type="text" @isset($livro->autor) value="{{ $livro->autor }}" @endisset id="autor" name="autor" placeholder="Digite o autor" required>
    <label for="descricao">Descrição</label>
    <input type="text" @isset($livro->descricao) value="{{ $livro->descricao }}" @endisset id="descricao" name="descricao" placeholder="Digite uma descrição" required>
    <label for="imagem">Envie uma imagem do livro</label>
    <input type="file" name="imagem" accept="image/*" id="imagem" placeholder="Envie uma imagem">

    <input type="submit" name="cadastro" class="botao-cadastrar" value="{{ $submit }}"/>
</form>