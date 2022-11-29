<?php

//CREACION DE USUARIOS EN LA BASE DE DATOS//

require_once('src/Shared/DataBase.php');
class UserRepository {
  private $connection;

  public function __construct()
  {

    $this->connection = new DataBase();
  }

  public function getAll()
  {
    $result = $this->connection->getConnection()->query('SELECT * FROM `user`');
    return $result->fetch_assoc();
  }

  public function getByEmail($email)
  {
    $result = $this->connection->getConnection()->query("SELECT * FROM `user` WHERE email = '" . $email . "'");
    return $result->fetch_assoc();
  }

  public function getByEmailAndPassword($email,$password)
  {
    $result = $this->connection->getConnection()->query("SELECT * FROM `user` WHERE email = '" . $email . "' AND password = '" . hash('md5', $password) . "'");
    return $result->fetch_assoc();
  }

  public function createUser($email,$password,$name,$city)
  {

    $this->connection->getConnection()->query("INSERT INTO `user` (`id`, `name`, `email`, `password`, `city`) VALUES (NULL, '" . $name . "', '" . $email . "', '" . hash('md5', $password) . "', '" . $city . "')");
    if($this->connection->getConnection()->errno){
      echo $this->connection->getConnection()->error;
    }  
  }
}