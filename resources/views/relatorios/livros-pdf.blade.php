<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    <style>
        table{
            width: 90%;
            margin: auto 0;
        }
        table, th, td{
            border: 1px solid #000;
        }

        table th{
            padding: 11px 0 11px;
            font-weight: bold;
            font-size: 18px;
            text-align: left;
            padding: 8px;
        }

        table tr{
            border: 1px solid #000;
        }

        table td{
            font-size: 18px;
            padding: 8px;
        }
        .container-admin-banner h1{
            margin-top: 40px;
            font-size: 30px;
        }
    </style>

    <main>

    <h3>Lista de Livros</h3>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Livro</th>
          <th>Autor</th>
          <th>Descricão</th>
        </tr>
      </thead>
      <tbody>

      @foreach ($livros as $livro)
      <tr>
        <td>{{ $livro->id }}</td>
        <td>{{ $livro->titulo }}</td>
        <td>{{ $livro->autor }}</td>
        <td>{{ $livro->descricao }}</td>       
      </tr>
      @endforeach
      
      </tbody>
    </table>

    </main>
    </body>
</html>