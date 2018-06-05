<?php

namespace Controller;

use Model\Test;
use Model\Procedures;

class TestsController {

function TestesUsuario() {
        $tests = new Test;
        $results = $tests->TestesUsuario();
        $totalCount = $tests->ContadorTestes();
        $proc = new Procedures(TRUE);
        $list = $proc->AllProcedimentos();
         include '../trabalhopratico2/View/testesUsuario.php';
        
    }

    function insertTest($date, $procedure) {
        $tests = new Tests;
        $result = $tests->insertTest($date, $procedure);
        
    }

    function removeTest($id) {
        $tests = new Tests;
        $tests->RemoveTest($id);
       
    }

    function Vertestes() {
        $tests = new Tests;
        $results = $tests->viewAllTests();
    }


    
   public function ContadorTestes() {
        $userData = $_SESSION['userData'];
        $userId = $userData['id'];
        $query = $this->db->prepare("SELECT COUNT(tests.id) as amount, SUM(procedures.price) as cost FROM `test`, `procedures` WHERE test.user_id=" . $userId . " AND test.procedure_id=procedures.id");
        $query->execute();
        $results = $query->fetch();
        return $results;
    }

    






}
