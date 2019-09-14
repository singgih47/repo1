<?php
//add dbconnect

include('dbconnect.php');

$name 	 	= $_POST['name'];
$id_work 	= $_POST['id_work'];
$id_salary  = $_POST['id_salary'];

//query

$query =  "INSERT INTO Name(name , id_work , id_salary) VALUES('$name' , '$id_work' , '$id_salary')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:index.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>