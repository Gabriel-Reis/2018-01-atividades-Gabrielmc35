<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
    box-sizing: border-box;
}

body {
 background-image :url(./view/analista-controle.jpg);
}

.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 20px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: right: ;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 25px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: orange;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 100%;
    left: 0;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content .header {
    background: blue;
    padding: 19px;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    background-color: #ccc;
    height: 250px;
}

.column a {
    float: none;
    color: black;
    padding: 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.column a:hover {
    background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="#home">HOME</a>
  <div class="dropdown">
    <button class="dropbtn">MENU 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Sistema de Controle de Solicitações de Análises Laboratoriais</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h3>Cliente</h3>
          <a href="./view/login.php">Login</a>
         <a href="./view/Registrar.php">Cadastro</a>
        <a href="./view/login.php">Mostrar Exames</a>

        </div>
        <div class="column">
      
<h3>Administrador</h3>
          <a href="./view/login.php">Login</a>
         <a href="./view/Registrar.php">Cadastro</a>
        <a href="./view/verProcedimentos.php">Procedimentos</a>

        </div>
        <div class="column">
       
        </div>
      </div>
    </div>
  </div> 
</div>

<div style="padding:16px">
            <figure>

               
                </figure>
</div>

</body>
</html>
