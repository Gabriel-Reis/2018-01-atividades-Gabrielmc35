<?php

namespace Controller;

use Model\Tests;
use Model\Procedures;

class TestsController {

function TestesUsuario() {
        $tests = new Tests;
        $results = $tests->showUserTests();
        $totalCount = $tests->countUserTests();
        $proc = new Procedures(TRUE);
        $list = $proc->listAll();
        
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


    
   
    






}
