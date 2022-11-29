<?php

//CREACION DE CONSULTAS EN LA BASE DE DATOS//

require_once('src/Shared/DataBase.php');
class HelpRepository {
  private $connection;

  public function __construct()
  {

    $this->connection = new DataBase();
  }

  public function getAll()
  {
    $result = $this->connection->getConnection()->query('SELECT * FROM `consultas`');
    return $result->fetch_all();
  }

  public function getByEmail($email)
  {
    $result = $this->connection->getConnection()->query("SELECT * FROM `consultas` WHERE email = '" . $email . "'");
    return $result->fetch_assoc();
  }

  public function getByNameAndEmail($name,$email)
  {
    $result = $this->connection->getConnection()->query("SELECT * FROM `consultas` name = '" . $name . "' AND email = '" . $email . "'");
    return $result->fetch_assoc();
  }

  public function createConsultas($name,$email,$query,$loggeduserid)
  {

    $this->connection->getConnection()->query("INSERT INTO `consultas` (`id_consultas`, `name`, `email`, `query`, `user_consultas`)
      VALUES (NULL, '" . $name . "', '" . $email . "', '" . $query . "', '" . $loggeduserid . "')");
    if($this->connection->getConnection()->errno){
      echo $this->connection->getConnection()->error;
    }  
  }
}