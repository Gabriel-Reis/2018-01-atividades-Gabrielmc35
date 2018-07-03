<?php
include './model/Database.php';
include './model/Aluno.php';
include './controller/AlunosController.php';
include './controller/CidadesController.php';
include './controller/EstadosController.php';
include './model/Cidade.php';
include './model/Estado.php';
use Controller\AlunosController;
use Controller\CidadesController;
use Controller\EstadosController;
$op = $_GET['op'];
 if ($op == 1){
  $alunoController = new AlunosController;
  $alunoController->create();
}else if ($op == 3){
  $estadoController = new EstadosController;
  $estadoController->create();
}else if ($op == 2){
  $cidadeController = new CidadesController;
  $cidadeController->create();
} else if ( $op == 4 ) {
  $alunoController = new AlunosController;
  $alunoController->store($_POST);
  header("Location: router.php?op=1");
}   else if ( $op == 5 ) {
  $estadoController = new EstadosController;
  $estadoController->store($_POST);
  header("Location: router.php?op=3");
} else if ( $op == 6 ) {
  $cidadeController = new CidadesController;
  $cidadeController->store($_POST);
  header("Location: router.php?op=2");
}
