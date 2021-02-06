<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "usersignup";

$con = mysqli_connect($server, $user, $password, $db);

if($con){
	?>
	<script>
		alert("Connection Sucessful");
	</script>
	<?php
}else{
	?>
	<script>
		alert("NO Connection sucess");
	</script>
	<?php
}



?>