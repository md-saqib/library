  <!DOCTYPE html>
  <?php include("student.php"); ?>
  <html>
  <head>
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  		  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Noon Academy</title>
  </head>
  <body>
  	<div align="center">
    <a href="index.php"><img src="img/logo.png"></a>
  </div>
  <div align="center">
    <br>
    <br>

  	<form style="width: 50%;" action="addStudent.php" method="POST" enctype="multipart/form-data">

  <div class="form-group">
      

    <div class="form-group">
      <label>UID</label>
      <input type="text" maxlength="3" class="form-control" name="uid" placeholder="UID">
    </div>

    <div class="form-group">
      <label>Student Name</label>
      <input type="text" class="form-control" name="name" placeholder="Student Name">
    </div>

    <div class="form-group">
      <label>Course</label>
      <input type="text" class="form-control" name="course" placeholder="Course">
    </div>

    <div class="form-group">
      <label>Semester</label>
      <input type="text" maxlength="1" class="form-control" name="sem" placeholder="Semester">
    </div>

    <div class="form-group">
      <label>Email</label>
      <input type="text" class="form-control" name="email" placeholder="Email">
    </div>

    <div class="form-group">
      <label>Mobile</label>
      <input type="text" maxlength="10" class="form-control" name="mobile" placeholder="Mobile">
    </div>

    <input class="button button1" type="submit" name="addstud" value="Add Student"/>
  </form>



  </div>
  </body>
  </html>

  <?php
  if(isset($_POST['addstud'])){ 
  $student = new student();
  $student->addStudent($_POST['uid'],$_POST['name'], $_POST['course'],$_POST['sem'], $_POST['email'], $_POST['mobile']);
  }
  ?>
