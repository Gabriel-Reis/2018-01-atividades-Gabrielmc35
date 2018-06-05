<?php

namespace Model;

use Model\Database;
use PDO;

//class Cidade {
  class User{

  protected $db = null;
   private $id;
    private $name;
    private $email;
    private $password;
    private $remember_token; //token para lembrar senha, normalmente uma pergunta secreta ou algo assim.
    private $tipo;

  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }


  function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRemember_token($remember_token) {
        $this->remember_token = $remember_token;
    }

    function setType($tipo) {
        $this->tipo = $tipo;
    }

   public function all() {
        $sql = "SELECT * FROM users";
        return $this->db->query($sql);
    }

     /*public function AddUser() {
      
 $query = $this->db->prepare("INSERT INTO users(name, email, password, type, created_at) VALUES ('" . $name . "', '" . $email . "', '" . $password . "',  3,  CURRENT_TIMESTAMP)");
        $result = $query->execute();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }*/
  public function getAll(){
            $db = null;
            $db = Database::getInstance()->getDB();
            $sql = "SELECT * FROM users ";
            $result =   $db->query($sql);
            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
            if( !empty($rows)){
                return $rows;
            }
        }
public function ValidarUser($email, $password)
{
       $query = $this->db->prepare("SELECT * FROM `users` WHERE users.email='" . $email . "'AND users.password='" . $password . "'");
        $results = $query->execute();
        $numRows = $query->rowCount();
        if ($numRows == 0) {
            return null;
        } else {
            $results = $query->fetch();
            return $results;
        }
}

public function removeUser()
{
        $sql = "DELETE FROM users WHERE id='" . $this->id. "'";
        $query =$this->db->prepare($sql);
        $result = $query->execute();
        return $result;
}

 public function AtualizaUser() {
        $sql = "UPDATE users SET name='".$this->name."',email= '".$this->email."',password=  '". $this->name."',type= '".$this->name."',remember_token= '".$this->name."',updated_at= CURRENT_TIMESTAMP WHERE idd = '" . $this->id . "'";
       $query = $this->db->prepare($sql);
       $result= $query->execute();
       return $result;

        }


          public function addNewUser($name, $email, $password) {
        $query = $this->db->prepare("INSERT INTO users(name, email, password, type, created_at) VALUES ('" . $name . "', '" . $email . "', '" . $password . "', 3, CURRENT_TIMESTAMP)");
        $result = $query->execute();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }



}
