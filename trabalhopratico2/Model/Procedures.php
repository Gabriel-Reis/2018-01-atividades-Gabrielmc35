<?php

namespace Model;

use Model\Database;

class Aluno {

  protected $db = null;
    private $id;
    private $name;
    private $price;
    private $user_id;


  public function __construct($sessionStarted) {
        if(!isset($_SESSION)){
            session_start();
        }
        $this->db = Database::getInstance()->getDB();
    }

  public function AllProcedimentos() {
    $sql = "SELECT * FROM prpcedures ORDER BY name"; //teste 
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


public function insertProcedimento()
{
        $sql = "INSERT INTO procedures (name, price, user_id, created_at) VALUES ('" .  $this->name  .  "','" . $this->price .  "','"  .  $this->user_id  .  "',  CURRENT_TIMESTAMP)";
               $query = $this->db->prepare($sql);

         $result = $query->execute();
        return $result;
}

public function removeProcedimento()

{
	$sql= "DELETE FROM  procedures WHERE  id = '". $this->id ."' ";
           $query = $this->db->prepare($sql);

	  $result = $query->execute();
        return $result;
}





}
