@extends('layout.principal')

@section('conteudo')

<h1>Dados do carro</h1>

<p>Código: {{ $tipoveiculo->id }}</p>
<p>Nome:{{$tipoveiculo->nome}}</p>
<p>Tipo: {{ $tipoveiculo->tipo }}</p>
<p>Valor: {{$tipoveiculo->valor}}</p>


<a href="{{ route('tipoveiculo.index') }}">Voltar</a>
<a href="{{ route('tipoveiculo.edit', $tipoveiculo->id) }}">Editar</a>

<form method="post" onsubmit="return confirm('Confirma exclusão do estado?');" action="{{ route('tipoveiculo.destroy', $tipoveiculo->id) }}">

  @csrf
  @method('DELETE')
  <input type="submit" value="Excluir">

</form>

@endsection