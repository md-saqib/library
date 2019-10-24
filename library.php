	<?php 
		//File consisting class xxxxxx	 which inherits database(from config.php)

	include("database.php");

	class library extends database {
		public $conn; //Inside a class variables are called as properties
		
		function __construct() { // __construct is a constructor : it is called in/on an object whenever required
			$db = new database(); //creating a variable within a new object
			$this->conn = $db->getConnection(); //$this is mainly used to refer properties of a class
		}

		function returnBook($fine, $isbn, $uid){
		  $insert="insert into returnbook (Fine, ISBN, UID) values ('$fine','$isbn','$uid')";

	      $delete="DELETE FROM `lendbook` WHERE `lendbook`.`UID` = '$uid'";

	      $run_r=mysqli_query($this->conn, $insert);
	      
	      $run=mysqli_query($this->conn, $delete);

	      return;
	    }

	    function lend($from, $till, $isbn, $uid){
	    	$insert="insert into lendbook (lend_book_from, lend_book_till, ISBN, UID) values ('$from','$till','$isbn','$uid')";

			$run=mysqli_query($this->conn, $insert);
	      return;
	  }
	}
	?>