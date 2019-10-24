  <!DOCTYPE html>
  <?php include("book.php");?>
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

  <form style="width: 50%;" action="addBook.php" method="POST" enctype="multipart/form-data">

  <div class="form-group">
    <label>ISBN</label>
    <input type="text" maxlength="4" class="form-control" name="isbn" placeholder="ISBN">
  </div>

  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title">
  </div>

  <div class="form-group">
    <label>Author</label>
    <input type="text" class="form-control" name="author" placeholder="Author">
  </div>

  <div class="form-group">
    <label>Class</label>
    <input type="text" class="form-control" name="class" placeholder="Class">
  </div>

  <div class="form-group">
    <label>Grade</label>
    <input type="text" maxlength="1" class="form-control" name="grade" placeholder="Grade">
  </div>

  <div class="form-group">
    <label>Semester</label>
    <input type="text" maxlength="1" class="form-control" name="sem" placeholder="Semester">
  </div>

    <input class="button button1" type="submit" name="addbook" value="Add Book"/>
  </form>



  </div>
  </body>
  </html>


  <?php 
  if(isset($_POST['addbook'])){
  $book = new book();
  $book->addBook($_POST['isbn'],$_POST['title'], $_POST['author'],$_POST['class'],$_POST['grade'],$_POST['sem']);
  }
  ?>
