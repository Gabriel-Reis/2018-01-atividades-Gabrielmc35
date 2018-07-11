@extends('usuarios.areaAdministrador')

@section('conteudo')
  <style >
    <body style=" background: #FEAC5E;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4BC0C8, #C779D0, #FEAC5E);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4BC0C8, #C779D0, #FEAC5E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
"> 
    body {
  perspective: 100vw;
}

main {
  color: #FFF;
  width: 300px;
  height: 450px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  transform-origin: 25% 50%;
  transform-style: preserve-3d;
  transition: all 1s ease-in-out;
  
  &.flip {
    transform: translate(0, -50%) rotateY(180deg);
  }
}

hgroup {
  width: 100%;
  height: 80px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  background-color: #FFF;
  border: 1px solid #39D1B4;
  h2 {
    font-weight: 300;
    line-height: 40px;
    color: #39D1B4;
  }
}

form, section {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  text-align: center;
  backface-visibility: hidden;
}

form {
  background-color: #39D1B4;
  transform: rotateY(0);
}

section {
  background-color: #5B7383;
  padding: 15px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  transform: rotateY(180deg);
  h2 {
    color: #39D1B4;
  }
}

fieldset {
  padding-top: 40px;
  width: 100%;
  height: 260px;
}

input {
  transition: all 0.2s ease-in-out;
  width: 250px;
  height: 30px;
  color: #5B7383;
  font-weight: 600;
  border-bottom: 1px solid rgba(255,255,255,.6);
  margin: 10px;
  &::placeholder {
    color: #FFF;
    font-weight: 300;
    opacity: .7;
  }
  
  &:focus,
  &:valid {
    border-color: white;
  }
}

button {
  width: 250px;
  height: 45px;
  border: 1px solid #FFF;
  border-radius: 25px;
  transition: all 300ms ease-in-out;
}

button:hover {
  background-color: HSLA(0, 0%, 100%, .2);
}


  </style>
    <h1 class="jumbotron text-center">Editar Procedimento</h1>

    <form class="fomr-inline" method="post" action="{{ route('procedimentos.update', $procedimento->id) }}">

        @csrf
        @method('PATCH')
        <h1 align="center">Editar Procedimento</h1>
        <label>Nome: </label>
        <input class="form-control" type="text" name="name" value="{{ $procedimento->name }}" required> <br>
        
        <label>Preço: </label>
        <input class="form-control" type="text" name="price" value="{{ $procedimento->price }}" required> <br>

        <select name="user_id">
          <option value="">Selecione o ADM/OPERADOR:</option>
          @foreach($usuarios as $u)
            <option value="{{ $u->id }}"
                
              > {{ $u->name }}</option>
          @endforeach
        </select>

        <br>
        <input class="btn btn-info" type="submit" name="btnSalvar" value="Salvar">

    </form>

@endsection