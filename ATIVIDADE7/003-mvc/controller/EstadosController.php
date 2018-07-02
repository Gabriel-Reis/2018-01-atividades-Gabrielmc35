<?php

namespace Controller;

use Model\Estado;

class EstadosController {

  public function listar() {

    // Acesso ao Modelo
    $estado = new Estado();

    // Manipular dados
    $listaestado = $estado->all();


    // Invocar a View
    include './view/estados/lista.php';



  }

}
