<?php 
class Connection{
  protected $host = "localhost";
  protected $user = "root";
  protected $pass = "password";
  protected $dbname = "db_toko";
  public $mysqli;
  function __construct() {
    $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
    if($this->mysqli->connect_error) {
      echo "Failed to connect database :".$con->connect_error;
      die();
    }
  }
}