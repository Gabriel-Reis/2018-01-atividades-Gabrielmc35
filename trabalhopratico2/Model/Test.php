<?php

namespace Model;

use Model\Database;

class Test {

  protected $db = null;
 	 private $id;
    private $user_id;
    private $date;
    private $procedure_id;
  
  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }





   function setAll($id, $user_id, $procedure_id, $date) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->procedure_id = $procedure_id;
        $this->date = $date;
    }

    function setInsert($user_id, $procedure_id, $date) {
        $this->user_id = $user_id;
        $this->procedure_id = $procedure_id;
        $this->date = $date;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    function setProcedure_id($procedure_id) {
        $this->procedure_id = $procedure_id;
    }

public function allTests()


{
	 $sql = $this->db->prepare("SELECT * FROM `tests`");
       
        return $this->db->query($sql);
}

public function addTest()

{
	$sql= "INSERT INTO  tests(user_id,procedure_id,created_at,date)VALUES('" . $this->user_id . "','" . $this->procedure_id . "','" . $this->date . "', CURRENT_TIMESTAMP,CURRENT_TIMESTAMP ) ";
	$query= $this->db->prepare($sql);
	$result=$query->execute();
	return $result;
}

public function updateTest()

{
	 
        //$sql = "UPDATE tests SET "user_id ='" . $this->user_id . "' ,procedure_id= '" . $this->procedure_id . "' , date = '" . $this->date . "', CURRENT_TIMESTAMP  = '" . $this->id . "'";


$sql = "UPDATE tests SET user_id ='" . $this->user_id . "' ,procedure_id= '" . $this->procedure_id . "' , date = '" . $this->date . "',  atualizado em= CURRENT_TIMESTAMP id do atualizador = '" . $this->id . "'";

$query= $this->db->prepare($sql);
	$result=$query->execute();
	return $result;
}


  public function deleteTest() {
        $sql = "DELETE FROM tests WHERE id='" . $this->user_id . "'";
    $query= $this->db->prepare($sql);
	$result=$query->execute();
	return $result;
    }

      public function AllCount() {
      //  $sql = $this->db->prepare("SELECT COUNT(procedures.id) as amount, SUM(procedures.price) as cost FROM `tests`, `procedures` WHERE tests.user_id=" . $userId . " AND tests.procedure_id=procedures.id");
	$sql = "SELECT SUM(procedures.price) AS totalprice FROM  tests, users , procedures WHERE tests.user_id=  users.id AND  tests.procedure_id =  procedures.id ";

        $query=$this->db->prepare($sql);
        $results = $query->execute();
        return $results;
    }


}
