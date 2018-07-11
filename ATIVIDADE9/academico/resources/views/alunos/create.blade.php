@extends('layout.principal')


@section('conteudo')

    <h1>Inserir aluno</h1>

    <a href="{{ route('alunos.index') }}">Voltar</a>

    <form method="post" action="{{ url('/alunos') }}">

        @csrf

        Nome: <input type="text" name="nome"> <br>
       
         
         Rua: <input type="text" name="rua"> <br>
         Numero: <input type="text" name="numero"> <br>
         bairro: <input type="text" name="bairro"> <br>
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