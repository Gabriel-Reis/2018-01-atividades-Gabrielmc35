<?php

namespace Controller;

use Model\Procedures;

class ProceduresController {
    
    function AllProcedimentos($targetView) {
        $procedure = new Procedures(FALSE);
        $list = $procedure->AllProcedimentos();
            include $targetView;

        
    }

    function AddProcedimento($name, $price) {
        $proc = new Procedures(FALSE);
        $result = $proc->AddProcedimento($name, $price);
       if ($result) {
            include "../trabalhopratico2/View/Administrador.php";
        } else {
            include "../trabalhopratico2/View/CriarProcedimento.php";
        }
    }

    function removeProcedimento($id) {
        $proc = new Procedures(FALSE);
        $result = $proc->removeProcedimento($id);
     }
     

   /* function ModificaProcedimento( $name, $price) {
        $proc = new Procedures(FALSE);
        $result = $proc->ModificaProcedimento( $name, $price);
     */   
   
   public function updatePrice($dados){
                $price = $dados['preco'];
                $id = $dados['id'];
                $procedure = new Procedures();
                $procedure->update($price, $id);
                
            }
}



    