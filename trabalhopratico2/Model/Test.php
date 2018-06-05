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
     if (!isset($_SESSION)) {
            session_start();
        }
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




  public function TestesUsuario() {
        $userData = $_SESSION['userData'];
        $userId = $userData['id'];
        $query = $this->db->prepare("SELECT tests.id as id, procedures.name as name, tests.date as date, procedures.price as price FROM `tests`, `procedures` WHERE tests.user_id=" . $userId . " AND tests.procedure_id=procedures.id ORDER BY tests.date, procedures.name");
        $query->execute();
        $results = $query->fetchAll();
        return $results;
    }

    public function ContadorTestes() {
        $userData = $_SESSION['userData'];
        $userId = $userData['id'];
        $query = $this->db->prepare("SELECT COUNT(tests.id) as amount, SUM(procedures.price) as cost FROM `tests`, `procedures` WHERE tests.user_id=" . $userId . " AND tests.procedure_id=procedures.id");
        $query->execute();
        $results = $query->fetch();
        return $results;
    }


}
