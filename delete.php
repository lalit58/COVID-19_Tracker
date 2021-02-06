<?php 

	include 'dbcon.php';

	$id = $_GET['id'];

	$deletequery = "delete from coronacase where id=$id";

	$query = mysqli_query($con,$deletequery);

	header('location:admin.php');

 ?>