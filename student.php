	<?php
	//File consisting class xxxxxx	 which inherits database(from config.php)

	include("database.php");

	class student extends database {
		public $conn; //Inside a class variables are called as properties
		
		function __construct() { // __construct is a constructor : it is called in/on an object whenever required
			$db = new database(); //creating a variable within a new object
			$this->conn = $db->getConnection(); //$this is mainly used to refer properties of a class
		}

		function addStudent($uid, $name, $course, $sem, $email, $mobile) {
			$insert="insert into student ( UID, name,  course, semester, email, mobile) values ('$uid','$name','$course','$sem','$email','$mobile')";
			$run=mysqli_query($this->conn, $insert);
		  return;
		}

		function removeStudent($id) {
			$delete="DELETE FROM `student` WHERE `student`.`id` = '$id'";
		  $run=mysqli_query($this->conn, $delete);
		  return;
	  }
	}


	?>
