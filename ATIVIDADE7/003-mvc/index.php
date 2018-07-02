<!DOCTYPE html>
<html>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <head>
    <meta charset="utf-8">
    <title>Sistema de Controle Acadêmico</title>
  </head>
  <body>

    <?php
      session_start();
      if ( isset($_SESSION['mensagem']) ) {
        echo "<h2>" . $_SESSION['mensagem'] . "</h2>";
        unset($_SESSION['mensagem']);
      }
    ?>

    <!-- Links //-->
    <a href="router.php?op=1" class="btn btn-info">Listar alunos</a>
    <a href="router.php?op=4" class="btn btn-info">Listar cidade</a>
    <a href="router.php?op=5" class="btn btn-info"> Listar estados</a>

  </body>
</html>
