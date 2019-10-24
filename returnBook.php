  <!DOCTYPE html>
  <?php include("library.php");
  ?>
  <html>
  <head>
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  		  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title></title>
  </head>
  <body>
  	<div align="center">
    <a href="index.php"><img src="img/logo.png"></a>
  </div>  
  <div align="center"><br><br>
  	<form style="width: 50%;" action="returnBook.php" method="POST" enctype="multipart/form-data">

    <div class="form-group">
      <label>Student UID</label>
      <div class="input-group mb-3">
    <select class="custom-select" id="inputGroupSelect02" name="uid">
      <option value=""> Select UID</option>
      <?php 
        $sql = "SELECT * from  lendbook";
        $query = $dbh -> prepare($sql);
        $query -> bindParam(':status',$status, PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
        foreach($results as $result)
        {               ?>  
        <option value="<?php echo htmlentities($result->UID);?>"><?php echo htmlentities($result->UID);?></option>
         <?php }} ?> 
        </select>
        </div>
      </div>

    <div class="form-group">
    <label>Book ISBN</label>
      <div class="input-group mb-3">
    <select class="custom-select" id="inputGroupSelect02" name="isbn">
          <option value=""> Select Book ISBN</option>
      <?php 
        $sql = "SELECT * from  lendbook";
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
      </div>


  <label>(Fine if any)</label>
  <input class="form-control" type="text" onchange="calculateAmount(this.value)" placeholder="Late return Days">
  <div align="right"><button type="button" class="btn btn-outline-secondary">Calculate</button></div>

  <!-- Fine Calculation here--> 
  <input class="form-control" name="fine"  id="tot_amount" type="text" readonlytype="text" placeholder="Rs." readonly>
  <br>
  <input class="button button1" type="submit" name="return" value="Return Book"/>
  </form>
  </div>
  <script>
              function calculateAmount(val) {
                  var tot_price = val * 10;
                  /*display the result*/
                  var divobj = document.getElementById('tot_amount'); //method returns the element of specified id
                  divobj.value = tot_price; //giving the output
              }
          </script>
  </body>
  </html>


  <?php
  if(isset($_POST['return'])){
  $library = new library();
  $library->returnBook($_POST['fine'],$_POST['isbn'], $_POST['uid']);
  }
  ?> 
