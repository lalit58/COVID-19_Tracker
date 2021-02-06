<!-----------------Admin Connection------------------ANd Admin login Designing page is Below-->
<?php
session_start();

$con = mysqli_connect('localhost', 'root');
if($con){
	echo "Connection sucessfull";
}else{
	echo "No Connection";
}

$db = mysqli_select_db($con, 'loginadmin');

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];


	$sql = " select * from admintable where user = '$username' and pass = '$password' ";

	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "Login Successfull";
			$_SESSION['user'] = $username;
			header('location:admin.php');
			}
	else{
		echo "Login Failed";
		header('location:adminlogin.php');
	}
}


?>
