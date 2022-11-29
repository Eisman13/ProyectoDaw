<?php

//CREACION DE LA BASE DE DATOS Y CONEXION CON EL SERVIDOR LOCAL//

class DataBase 
{

  private const DATABASE = 'tablon';
  private const USER = 'root';
  private const PASSWORD = '';
  private const HOST = 'localhost';

  private $connection;

  public function __construct()
  {

    $this->connection = new mysqli(self::HOST, self::USER, self::PASSWORD, self::DATABASE);
    if ($this->connection->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $this->connection->connect_errno . ") " . $this->connection->connect_error;
    }
  }

  public function getConnection()
  {
    return $this->connection;
  }
}