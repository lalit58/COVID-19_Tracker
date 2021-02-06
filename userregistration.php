<?php 

session_start();

$con = mysql_connect('localhost','root');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user']
$pass = $_POST['password'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if ($sum== 1) {
	echo "Already Registered";
}else{
	$res = " insert into usertable(name , password) values ('$name' ,'$pass'";
	mysqli_query($con,$reg);
	echo "Registration Sucessfull";  
}


 ?>