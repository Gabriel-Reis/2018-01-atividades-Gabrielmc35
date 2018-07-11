@extends('layout.principal')


@section('conteudo')

    <h1>Inserir carro</h1>

    <a href="{{ route('tipoveiculo.index') }}">Voltar</a>

    <form method="post" action="{{ url('/tipoveiculo') }}">

        @csrf

        Nome: <input type="text" name="nome"> <br>
       
         
         Tipo: <input type="text" name="tipo"> <br>

          Valor: <input type="number" name="valor" <br>

        <input type="submit" name="btnSalvar" value="Salvar">

    </form>

@endsection