<?php
//file contains connection to the database

include("config.php");

class database {
  public $connection; //Inside a class variables are called as properties

  public function __construct() { //function __construct is a constructor : it is called in/on an object whenever required : way of iniializing function
    $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); //$this is mainly used to refer properties of a class
  }

  function getConnection() {
    return $this->connection;
  }
}
