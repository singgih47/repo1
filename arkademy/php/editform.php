<!DOCTYPE html>
<html lang="en">
<head>
	<title>Arkademy</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 

include('dbconnect.php');

//query
$query = "SELECT * FROM Name WHERE id ='$id'";
$result = mysqli_query($conn, $query);

?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

	<h3>Update Data Pegawai</h3>
	<form role="form" action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">			
		</div>

		<div class="form-group">
			<label>ID Work</label>
			<input type="text" name="id_work" class="form-control" value="<?php echo $row['id_work']; ?>">			
		</div>

		<div class="form-group">
			<label>ID Salary</label>
			<input type="text" name="id_salary" class="form-control" value="<?php echo $row['id_salary']; ?>">			
		</div>

		<button type="submit" class="btn btn-success btn-block">Update Data</button>

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 