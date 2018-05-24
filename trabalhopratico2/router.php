<?php


include '../trabalhopratico2/Controller/UserController.php';
include '../trabalhopratico2/Controller/TestsController.php';
include '../trabalhopratico2/Model/User.php';
include '../trabalhopratico2/Model/Test.php';
include '../trabalhopratico2/Model/Procedures.php';
include '../trabalhopratico2/Model/Database.php';
include '../trabalhopratico2/Controller/ProceduresController.php';




use Controller\ProceduresController;
use controller\UserController;
use controller\TestsController;

$op = $_GET['op'];

// Definição das rotas
if ( $op == 1 ) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $userController = new UserController;
    $userController->ValidarUser($email, $password);
} else if ( $op == 2 ) {
    include 'view/Registrar.php';
} else if ( $op == 3 ) {
 $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    //$remember = $_POST["remember"];

    $userController = new UserController;
    $userController->addNewUser($name, $email, $password);
        include '../trabalhopratico2/View/Inicial.php';

} else if ( $op == 4 ) {
    include './view/login.php';
}
else if ($op == 5) {
    $UsersController = new UsersController;
    $UsersController->TestesUsuario();
} else if ($op == 6) {
    $TestsController = new TestsController;
    $TestsController->Vertestes();
}else if ($op == 7) {
    $target = "../trabalhopratico2/View/AdminViewProcedures.php";
    $ProceduresController = new ProceduresController;
    $ProceduresController->AllProcedimentos($target);

}else if ($op == 8) {
    $ProceduresController = new ProceduresController;
    $ProceduresController->ModificaProcedimento();
}
