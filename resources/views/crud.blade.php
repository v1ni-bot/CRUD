<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        sdfgsdfgsdfg
        
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Autor</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
      @foreach($book as $books)
    <tr>
      <th scope="row">1</th>
      <td>{{$books->nome}}</td>
      <td>{{$books->autor}}</td>
      <td>{{$books->valor}}</td>
    </tr>
      @endforeach
    </tr>
  </tbody>
</table>
    </body>
</html>
