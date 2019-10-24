	<!DOCTYPE html>
		<?php include("header.php"); ?>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<title>Noon Academy</title>
	</head>
	<body>
		<div align="center">
		<a href="index.php"><img src="img/logo.png"></a>
	</div>

	<div align="center">
		<br>
		<br>
		<br>
		<div style="width: 75%;">
	<table class="table table-bordered table-striped">
		<div align="right" style="padding-right: 20px;">
		<input class="form-control" id="myInput" type="text" placeholder="Search.." style="width: 20%;">
	</div>
	</div>

		<thead>
				<tr>
					<th>#</th>
					<th>UID</th>
					<th>ISBN</th>
					<th>From</th>
					<th>till</th>
				</tr>
		</thead>

		<tbody id="myTable">
			<?php $sql = "SELECT lendbook.UID,lendbook.ISBN,lendbook.lend_book_from,lendbook.lend_book_till from  lendbook";
			$query = $dbh-> prepare($sql);
			$query->execute();
			$results=$query->fetchAll(PDO::FETCH_OBJ);
			$cnt=1;
				if($query->rowCount() > 0)
					{
						foreach($results as $result)
							{
	               ?>                                      
							
								<tr>
									<td class="center"><?php echo htmlentities($cnt);?></td>
									<td class="center"><?php echo htmlentities($result->UID);?></td>
									<td class="center"><?php echo htmlentities($result->ISBN);?></td>
									<td class="center"><?php echo htmlentities($result->lend_book_from);?></td>
									<td class="center"><?php echo htmlentities($result->lend_book_till);?></td>
								</tr>
		 							<?php  $cnt=$cnt+1;}}?>                                      
		</tbody>
	</table>
	</div>

	<script>
	$(document).ready(function(){
	  $("#myInput").on("keyup", function() {
	    var value = $(this).val().toLowerCase();
	    $("#myTable tr").filter(function() {
	      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	    });
	  });
	});
	</script>

	</body>
	</html>