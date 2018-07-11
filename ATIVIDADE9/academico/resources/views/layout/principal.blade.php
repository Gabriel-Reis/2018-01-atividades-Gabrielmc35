<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema Acadêmico</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>

    <!-- Flash: mensagem //-->
    @if ( Session::has('mensagem') )
      <p class="alert alert-info">{{ Session::get('mensagem') }}</p>
    @endif

    <!-- LINKS //-->
    <a href ="/estados" class="btn btn-success">Estados </a >
    <a href="/cidades" class="btn btn-danger">Cidades</a>
    <a href="/alunos" class="btn btn-info" > Alunos</a>

    <!-- CONTEUDO //-->
    @yield('conteudo')







  </body>
</html>
