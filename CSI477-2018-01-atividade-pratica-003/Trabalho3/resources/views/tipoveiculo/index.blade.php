@extends('layout.principal')

@section('conteudo')

<h1>Carro</h1>

<a href="{{ route('tipoveiculo.create') }}">Adicionar Carro</a>
<table class="table table-striped">

    <tr>
        <th>ID</th>
        <th>nome</th>
        <th>Tipo</th>
        <th>Valor</th>
        <th>Exibir</th>
        <th>Editar</th>
    </tr>

    @foreach($tipoveiculo as $c)
        <tr>
            <td>{{ $c->id }}</td>
            <td>{{$c->nome}}</td>
            <td>{{ $c->tipo }}</td>
            <td>{{$c->valor}}</td>
            <td><a href="{{ route('tipoveiculo.show', $c->id) }}">Exibir</a>
            <td><a href="{{ route('tipoveiculo.edit', $c->id) }}">Editar</a></td>
        </tr>
    @endforeach

</table>












@endsection('conteudo')