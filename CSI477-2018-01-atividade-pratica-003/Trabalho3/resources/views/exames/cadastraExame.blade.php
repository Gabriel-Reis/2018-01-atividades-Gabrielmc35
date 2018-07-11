

  <title>Cadastra Exame</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
  <body style=" background: #FEAC5E;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4BC0C8, #C779D0, #FEAC5E);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4BC0C8, #C779D0, #FEAC5E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
 <br>
        <br>
        <br> <br>
        <br>
        <br>
         <br>
        <br>
        <br>
    <h1 align="center">Inserir Exame</h1>
    <br>

    <center>

      <form method="post" action="{{ route('exames.store') }}">

        @csrf

        <label >ID do usuário : </label> 

        <input type="number" name="user_id" required align="center"><br>

        <label>Dia do exame: </label>
        <input type="date" name="date" required align="center"><br>
        <label>Procedimento desejado</label>
        <!-- <input type="text" name="estado_id"> <br> //-->
        <select name="procedure_id" required >
          <option value="">Selecione:</option>
          <!-- Dados dos estados //-->
          @foreach($procedimentos as $p)
          <option value="{{ $p->id }}">Nome: {{ $p->name }} | Preço: {{ $p->price }}</option>
          @endforeach
        </select>

        <br><br>
        <input class="btn btn-info" type="submit" name="btnSalvar" value="Salvar">
        

      </form>
        <a href="/Paciente"><button class="btn btn-warning">Cancelar</button></a>

    </center>

</body>
</html>