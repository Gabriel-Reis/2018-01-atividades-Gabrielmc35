
@extends('layout.principal')

@section('conteudo')

    <h1>Editar aluno</h1>

    <a href="{{ route('alunos.index') }}">Voltar</a>

    <form method="post" action="{{ route('alunos.update',[ 'aluno' => $aluno->id]) }}">

        @csrf
        @method('PATCH')
    <p>Nome: <input type="text" name="nome" value="{{ $aluno->nome }}"></p>
    <p>Rua: <input type="text" name="rua" value="{{ $aluno->rua }}"></p>[
    <p>numero: <input type="text" name="numero" value="{{ $aluno->numero }}"></p>[
    <p>bairro: <input type="text" name="bairro" value="{{ $aluno->bairro }}"></p>
            cidade_id:<select name="cidade_id">
            <option value="">Selecione:</option>
            <!-- Dados dos estados //-->
            @foreach($cidades as $e)
              <option value="{{ $e->id }}">{{ $e->nome }}</option>
            @endforeach
          </select>
          <br>

         cep: <input type="text" name="cep"> <br>

         Email: <input type="text" name="mail"> <br>

      


       <input type="submit" name="btnSalvar" value="Salvar">

    </form>

@endsection