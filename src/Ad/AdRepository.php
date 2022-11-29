<?php
//Creacion de anuncios en la base de datos
require_once('src/Shared/DataBase.php');
class AdRepository {
  private $connection;

  public function __construct()
  {

    $this->connection = new DataBase();
  }

  public function getAll()
  {
    $result = $this->connection->getConnection()->query('SELECT * FROM `anuncios`');
    return $result->fetch_all();
  }

   public function getByCity($city)
  {
    $result = $this->connection->getConnection()->query("SELECT * FROM `anuncios` WHERE city = '" . $city . "'");
    return $result->fetch_all();
  }

  public function getByTitulo($tittle)
  {
    $result = $this->connection->getConnection()->query("SELECT * FROM `anuncios` WHERE tittle = '" . $tittle . "'");
    return $result->fetch_assoc();
  }

  public function getByTituloAndContenido($tittle,$contents)
  {
    $result = $this->connection->getConnection()->query("SELECT * FROM `anuncios` tittle = '" . $tittle . "' AND contents = '" . $contents . "'");
    return $result->fetch_assoc();
  }

  public function createAnuncios($tittle,$contents,$email,$city,$loggeduserid)
  {

    $this->connection->getConnection()->query("INSERT INTO `anuncios` (`id_anuncios`, `tittle`, `contents`, `email`, `city`, `user_id`) VALUES (NULL, '" . $tittle . "', '" . $contents . "', '" . $email . "', '" . $city . "', '" . $loggeduserid . "')");
    if($this->connection->getConnection()->errno){
      echo $this->connection->getConnection()->error; 
    }  
  }
}