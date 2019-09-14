<?php
//include('dbconnected.php');
include('dbconnect.php');

$id = $_GET['id'];
$name = $_GET['name'];
$id_work = $_GET['id_work'];
$id_salary = $_GET['id_salary'];

//query update
$query = "UPDATE Name SET name ='$name' , id_work ='$id_work' , id_salary ='$id_salary' 
		  WHERE id ='$id' ";

if (mysqli_query($conn, $query)) {
	
	header("location:index.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>