<!DOCTYPE html>
<html lang="en">
<head>
	<title>Arkademy</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>
<body>

	<?php
	//tambahkan dbconnect
	include('dbconnect.php');

	//query
	$query = "SELECT * FROM Name";

	$result = mysqli_query($conn , $query);

	?>

	<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
		<h3>ARKADEMY</h3>
		<hr>
		<div class="row">
			<div class="col-sm-4">
				<h3>Form Tambah Pegawai</h3>
				<form role="form" action="insert.php" method="post">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label>ID Work</label>
						<input type="text" name="id_work" class="form-control">
					</div>
					<div class="form-group">
						<label>ID Salary</label>
						<input type="text" name="id_salary" class="form-control">
					</div>
					<button type="submit" class="btn btn-info btn-block">Tambah Data</button>					
				</form>
				
			</div>
			<div class="col-sm-8">
				<h3>Tabel Pegawai</h3>
				<table class="table table-striped table-hover dtabel">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>ID Work</th>
							<th>ID Salary</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody> 
						
						<?php
							$no = 1;  
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['id_work']; ?></td>
							<td><?php echo $row['id_salary']; ?></td>
							<td>
								<a href="editform.php?id=<?php echo $row['id'];?>" class="btn btn-success" role="button">Edit</a>
								<a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger" role="button">Delete</a>
							</td>
						</tr>

						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
			</div>
			
		</div>
		
	</div>
</body>

	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('.dtabel').DataTable();
	} );
	</script>

</html> 