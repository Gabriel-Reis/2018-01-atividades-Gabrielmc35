
@extends('layout.principal')

@section('conteudo')

    <h1>Editar carro</h1>

    <a href="{{ route('tipoveiculo.index') }}">Voltar</a>

    <form method="post" action="{{ route('tipoveiculo.update',[ 'tipoveiculo' => $tipoveiculo->id]) }}">

        @csrf
        @method('PATCH')
    <p>Nome: <input type="text" name="nome" value="{{ $tipoveiculo->nome }}"></p>
    <p>tipo: <input type="text" name="tipo" value="{{ $tipoveiculo->tipo }}"></p>
    <p>Valor: <input type="text" name="valor" value="{{ $tipoveiculo->valor }}"></p>
      


       <input type="submit" name="btnSalvar" value="Salvar">

    </form>

@endsection