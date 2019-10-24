<?php 
//Configuration file, which is used by the user to configure databse settings accordingly

define('DB_HOST','localhost'); //Defining a constant, which are more like variables in PHP
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','library');

//try & catch starts here
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}




//PDO: PHP Data Objects, consistent way to retrieve from database
?>