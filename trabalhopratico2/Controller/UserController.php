<?php
namespace Controller;
use Model\User;

class UserController {

function ValidarUser($email, $password) {
    $users = new User;
    $op = $users->ValidarUser($email, $password);
    if ($op === null || !$op) {
        include '../trabalhopratico2/View/login.php';   
    } 
    else {
            $_SESSION['userData'] = $op;
            if ($op['type'] == 1) {
                include '../trabalhoPratico2/View/Administrador.php';
            } else if ($op['type'] == 2) {
                include '../trabalhoPratico2/View/UserArea.php';
            } else if ($op['type'] == 3) {
                include '../trabalhoPratico2/View/UserArea.php';
            }
        }
        
    }


function addNewUser($name, $email, $password) {
        $users = new User;
        $op = $users->addNewUser($name, $email, $password);
        if ($op == false) {
            include '../trabalhoPratico2/View/Registrar.php';
        }
    }

}
