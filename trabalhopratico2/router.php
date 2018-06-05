<?php


include '../trabalhopratico2/Controller/UserController.php';
include '../trabalhopratico2/Controller/TestsController.php';
include '../trabalhopratico2/Model/User.php';
include '../trabalhopratico2/Model/Test.php';
include '../trabalhopratico2/Model/Procedures.php';
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
        include '../trabalhopratico2/Inicial.php';

} else if ( $op == 4 ) {
      include '../trabalhopratico2/Inicial.php';
}

else if ($op == 5) {
    $testsController = new TestsController;
    $testsController->TestesUsuario();
} else if ($op == 6) {
    $target = "../trabalhopratico2/View/verProcedimentos.php";
    $ProceduresController = new ProceduresController;
    $ProceduresController->AllProcedimentos($target);

}else if ($op == 7) {
    
    session_start();
        if($_SESSION['tipo'] == 1){
            include '../trabalhopratico2/View/MostrarUsuarios.php';
        }
        else
        {
            include '../trabalhopratico2/View/Administrador.php';

           // $target = "../trabalhopratico2/View/MostrarUsuarios.php";
           // $UserController= new UserController;
        }

}else if ($op == 8) {
    $ProceduresController = new ProceduresController;
    $ProceduresController->ModificaProcedimento();

}else if ($op == 9) {
          include '../trabalhopratico2/View/Administrador.php';

    
}else if ($op == 10) {
   $TestsController = new TestsController;
    $TestsController->TestesUsuario();
}
    else if ($op == 11) {
         include '../trabalhopratico2/view/login.php';
}

    else if ($op == 12) {
         include '../trabalhopratico2/view/Registrar.php';
}
else if ($op == 13) {
            $procedureController =  new ProceduresController();
        $procedureController->updatePrice($_POST);
}else if ($op == 14) {
    $proceduresController = new ProceduresController;
    $name = $_POST["name"];
    $price = $_POST["price"];
    $proceduresController->AddProcedimento($name, $price);

}
/*else if ($op == 14) {
    $usersController = new UserController;
    $id = $_POST['id'];
    $usersController->removeUser($id);
} */


//operações com usuario a partir do 20
else if ($op == 20) {
    session_start();
         include '../trabalhopratico2/view/UpdateProcedimento.php';
}

else if ($op == 23) {
    session_start();
         include '../trabalhopratico2/view/CadastrarExame.php';
}




