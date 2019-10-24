	<?php 
		//File consisting class xxxxxx	 which inherits database (from database.php)

	include("database.php");

	class book extends database {
		public $conn; //Inside a class variables are called as properties
		
		function __construct() { // __construct is a constructor : it is called in/on an object whenever required
			$db = new database(); //creating a variable within a new object
			$this->conn = $db->getConnection(); //$this is mainly used to refer properties of a class
		}
	   
	    function addBook($isbn, $title, $author, $class, $grade, $sem) {

	      $insert="insert into books (ISBN, title, author, Class, grade, semester) values ('$isbn','$title','$author','$class','$grade','$sem')";

	      $run=mysqli_query($this->conn, $insert);

	      return;

	    }
	

	    function removeBook($id) {

	       $delete="DELETE FROM `books` WHERE `books`.`id` = '$id'";

	      $run=mysqli_query($con, $delete);
	      
	      return;
	    }

	    
	  }


	?>