  <!DOCTYPE html>
  <?php include("library.php"); ?>
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
  <div align="center"><br><br>
  	<form style="width: 50%;" action="lendBook.php" method="POST" enctype="multipart/form-data">
    
    <div class="form-group">
      <label>Student UID</label>
      <div class="input-group mb-3">
    <select class="custom-select" id="inputGroupSelect02" name="uid">
      <option value=""> Select UID</option>
      <?php 
  $sql = "SELECT * from  student";
  $query = $dbh -> prepare($sql);
  $query -> bindParam(':status',$status, PDO::PARAM_STR); //binds the query with the 
  $query->execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ); //will return array of data according to the query
  $cnt=1;
  if($query->rowCount() > 0)
  {
  foreach($results as $result)
  {               ?>  
  <option value="<?php echo htmlentities($result->UID);?>"><?php echo htmlentities($result->UID);?></option>
   <?php }} ?> 
  </select>
  </div>

    <label>Book ISBN</label>
      <div class="input-group mb-3">
    <select class="custom-select" id="inputGroupSelect02" name="isbn">
          <option value=""> Select Book ISBN</option>
      <?php 
  $sql = "SELECT * from  books";
  $query = $dbh -> prepare($sql);
  $query -> bindParam(':status',$status, PDO::PARAM_STR);
  $query->execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  $cnt=1;
  if($query->rowCount() > 0)
  {
  foreach($results as $result)
  {               ?>  
  <option value="<?php echo htmlentities($result->ISBN);?>"><?php echo htmlentities($result->ISBN);?></option>
   <?php }} ?> 
  </select>
    
  </div>

    <div class="form-group">
      <label for="formGroupExampleInput2">Lend From</label>
      <input type="date" class="form-control" placeholder="Lend From" name="from">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Lend Till</label>
      <input type="date" class="form-control" placeholder="Lend To" name="till">
    </div>
    <input class="button button1" type="submit" name="lend" value="Lend Book"/>
  </form>
  </div>
  </body>
  </html>

  <?php 
  if(isset($_POST['lend'])){ 
  $library = new library();
  $library->lend($_POST['from'],$_POST['till'], $_POST['isbn'],$_POST['uid']);
  }
  ?>
