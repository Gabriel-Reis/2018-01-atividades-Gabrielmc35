@extends('layout.principal')

@section('conteudo')

<h1 align="center">Alunos</h1>

<a href="{{ route('alunos.create') }}">Adicionar Aluno</a>
<table class="table table-striped">

    <tr>
        <th>ID</th>
        <th>nome</th>
        <th>Rua</th>
        <th>Bairro</th>
        <th>cidade_id</th>
        <th>cep</th>
        <th>mail</th>
        <th>Exibir</th>
        <th>Editar</th>
    </tr>

    @foreach($aluno as $c)
        <tr>
            <td>{{ $c->id }}</td>
            <td>{{$c->nome}}</td>
            <td>{{ $c->rua }}</td>
            <td>{{$c->bairro}}</td>
            <td>{{$c->cidade_id}}</td>
            <td>{{$c->cep}}</td>
            <td>{{$c->mail}}</td>

            <td><a href="{{ route('alunos.show', $c->id) }}">Exibir</a>
            <td><a href="{{ route('alunos.edit', $c->id) }}">Editar</a></td>
        </tr>
    @endforeach

</table>












@endsection('conteudo')