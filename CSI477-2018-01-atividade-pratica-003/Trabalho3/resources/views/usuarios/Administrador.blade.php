<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Área Administrador</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
  <body style=" background: #FEAC5E;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4BC0C8, #C779D0, #FEAC5E);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4BC0C8, #C779D0, #FEAC5E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
"> 
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Area Do Administrador</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PROCEDIMENTOS <span class="caret"></span></a>
        <ul class="dropdown-menu">
      <li class="passive"><a href="/listaProc">Mostrar Procedimentos</a></li>
            <li class="passive"><a href="/create"> Criar Procedimentos</a></li>

        </ul>


  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">USUÁRIOS <span class="caret"></span></a>
        <ul class="dropdown-menu">
     
      <li class="passive"><a href="/cadastraAll">Cadastrar User</a></li>
      <li class="passive"><a href="/mostraUser"> Lista User </a></li>
        </ul>


      </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">EXAMES <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="passive"><a href="/lista">Listar Exames</a></li>
  
        </ul>


      </li>
     
    </ul>
    </ul>

      </li>
     
    </ul>

    <ul class="nav navbar-nav navbar-right">
       <li><a href="/"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

    </ul>



  </div>
</nav>
  
<div class="container">
  
</div>
</body>
</html>






	
	@yield('conteudo')


</body>
</html>