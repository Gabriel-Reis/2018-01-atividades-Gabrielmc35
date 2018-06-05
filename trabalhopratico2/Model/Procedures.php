<?php

namespace Model;
    include './model/Database.php';

use Model\Database;

class Procedures {

  protected $db = null;
    private $id;
    private $name;
    private $price;
    private $user_id;


  public function __construct() {
        if(!isset($_SESSION)){
            session_start();
        }
        $this->db = Database::getInstance()->getDB();
    }

  public function AllProcedimentos() {
    $sql = "SELECT * FROM procedures ORDER BY name"; //teste 
    return $this->db->query($sql);
  }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    function setAdd($id, $name, $price) {
        $this->setId($id);
        $this->setName($name);
        $this->setPrice($price);

        session_start();
        $this->setUser_id($_SESSION["id"]);
    }


public function AddProcedimento()
{
          $sql = "INSERT INTO procedures (name, price, user_id, created_at, updated_at) VALUES ('" . $this->name . "','" . $this->price . "','" . $this->user_id . "', CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";
        $stmt = $this->db->prepare($sql);

        If ($stmt->execute()) {
           return true;
        } else {
              return false;
        }
}

public function removeProcedimento()

{
	$sql= "DELETE FROM  procedures WHERE  id = '". $this->id ."' ";
           $query = $this->db->prepare($sql);

	  $result = $query->execute();
        return $result;
}




      public function update($newPrice, $id){
      $sql = "UPDATE procedures SET price = '". $newPrice ."' WHERE id = '". $id ."' ";
      $this->db->query($sql);
        include '../trabalhopratico2/View/UpdateProcedimento.php';
     
    }

}
