<?php

namespace Controller;

use Model\Procedures;

class ProceduresController {
    
    function AllProcedimentos($targetView) {
        $proc = new Procedures(FALSE);
        $list = $proc->AllProcedimentos();
                include $targetView;

        
    }

    function AddProcedimento($name, $price) {
        $proc = new Procedures(FALSE);
        $result = $proc->AddProcedimento($name, $price);
       
    }

    function removeProcedimento($id) {
        $proc = new Procedures(FALSE);
        $result = $proc->removeProcedimento($id);
     }
     

    function ModificaProcedimento( $name, $price) {
        $proc = new Procedures(FALSE);
        $result = $proc->ModificaProcedimento( $name, $price);
        
   

}



    }