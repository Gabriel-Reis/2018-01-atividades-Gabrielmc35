@extends('layout.principal')

@section('conteudo')

<h1>Dados da cidade</h1>

<p>Código: {{ $aluno->id }}</p>
<p>Nome:{{$aluno->nome}}</p>
<p>Estado_id: {{ $aluno->estado_id }}</p>



<a href="{{ route('cidades.index') }}">Voltar</a>
<a href="{{ route('cidades.edit', $cidade->id) }}">Editar</a>

<form method="post" onsubmit="return confirm('Confirma exclusão do cidade?');" action="{{ route('alunos.destroy', $cidade->id) }}">

  @csrf
  @method('DELETE')
  <input type="submit" value="Excluir">

</form>

@endsection