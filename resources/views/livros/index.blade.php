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
      <tr>
        <td>Pele negra máscaras brancas</td>
        <td>Frantz Fanon</td>
        <td>Neste livro, Fanon examina a negação do racismo contra o negro na França. É um clássico do pensamento sobre a diáspora africana, sobre a descolonização, a arquitetura psicológica, a teoria das ciências, a filosofia e a literatura caribenha. Analisa o axioma que causou grande turbulência nas décadas de 1960 e 1970: como a ideologia que ignora a cor pode apoiar o racismo que nega. Sua primeira edição, em português, foi publicada em 1963.</td>
        <td><a class="botao-editar" href="livros/editar/id=1">Editar</a></td>
        <td>
          <form>
            <input type="button" class="botao-excluir" value="Excluir">
          </form>
        </td>        
      </tr>
      <tr>
        <td>Crítica da razão negra</td>
        <td>Achille Mbembe</td>
        <td>De todos os humanos, o negro é o único cuja carne foi convertida em mercadoria. Aliás, negro e raça têm sido sinônimos no imaginário das sociedades europeias. Desde o século XVIII, constituíram ambos o subsolo inconfesso e muitas vezes negado a partir do qual se difundiu o projeto moderno de conhecimento - e também de governo. Será possível que a relegação da Europa à categoria de mera província do mundo acarretará a extinção do racismo, com a dissolução de um de seus mais cruciais significantes, o negro? Ou, pelo contrário, uma vez desmantelada essa figura histórica, todos nós nos tornaremos os negros do novo racismo fabricado em escala global pelas políticas neoliberais e securitárias, pelas novas guerras de ocupação e predação e pelas práticas de zoneamento? Neste ensaio ao mesmo tempo erudito e iconoclasta, Achille Mbembe empreende uma reflexão crítica indispensável para responder à principal questão sobre o mundo contemporâneo: como pensar a diferença e a vida, o semelhante e o dessemelhante?</td>
        <td><a class="botao-editar" href="livros/editar/id=2">Editar</a></td>
        <td>
          <form>
            <input type="button" class="botao-excluir" value="Excluir">
          </form>
        </td>        
      </tr>
      <tr>
        <td>Capitalismo em Debate: uma Conversa na Teoria Crítica</td>
        <td>Nancy & Rahel Jaeggi</td>
        <td>Capitalismo em debate faz ao leitor o irrecusável convite de se juntar a uma conversa entre Nancy Fraser e Rahel Jaeggi. Construída de modo não ortodoxo, a obra se apresenta como um verdadeiro debate entre as filósofas em torno do contexto atual do capitalismo, levando em conta problemas econômicos, sociais, políticos e ambientais. Estruturada em quatro capítulos – “Conceitualizando o capitalismo”, “Historicizando o capitalismo”, “Criticando o capitalismo” e, finalmente, “Contestando o capitalismo” –, essa conversa na teoria crítica induz o leitor a refletir sobre o que define o capitalismo, sobre as transformações e as permanências desse modelo ao logo da história, sobre como criticá-lo e como se contrapor a ele. Ao abordar temas de tamanha complexidade de forma acessível, sem abrir mão do rigor conceitual, Nancy Fraser e Rahel Jaeggi permitem-se aprofundamentos teóricos e críticos ao mesmo tempo que se abrem a novos públicos. Capitalismo em debate é uma obra essencial para tempos que, cada vez mais, demandam uma transposição do conhecimento teórico para além dos moldes acadêmicos tradicionais em busca de chaves de compreensão e intervenção na contemporaneidade.</td>
        <td><a class="botao-editar" href="livros/editar/id=3">Editar</a></td>
        <td>
          <form>
            <input type="button" class="botao-excluir" value="Excluir">
          </form>
        </td>        
      </tr>
      <tr>
        <td>Indústria cultural</td>
        <td>Theodor W. Adorno</td>
        <td>Este volume apresenta ao público brasileiro uma antologia de importantes textos de Theodor Adorno sobre “Indústria Cultural”, conceito estabelecido por ele e Max Horkheimer na década de 1940. Os nove ensaios que compõem esta coletânea abordam criticamente questões de várias artes e áreas do conhecimento (música, rádio, cinema, literatura, política, sociologia e filosofia), possibilitando uma compreensão abrangente da evolução histórica de um dos temas centrais da reflexão adorniana.</td>
        <td><a class="botao-editar" href="livros/editar/id=4">Editar</a></td>
        <td>
          <form>
            <input type="button" class="botao-excluir" value="Excluir">
          </form>
        </td>        
      </tr>
      </tbody>
    </table>
  <a class="botao-cadastrar" href="livros/novo">Cadastrar livro</a>
  <form action="#" method="post">
    <input type="submit" class="botao-cadastrar" value="Baixar Relatório"/>
  </form>
  </section>

</x-layout>