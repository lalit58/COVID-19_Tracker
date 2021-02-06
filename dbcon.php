<!---------------------------- Database Connection--------------------------------------->
<?php
	$server= 'localhost';
	$user = 'root';
	$password = '';
	$db = 'coronadb';

	$con = mysqli_connect($server, $user, $password, $db);


	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$symp = $_POST['coronasym'];
		$msg = $_POST['msg'];

		$chk = "";

		foreach ($symp as $chk1) {
			# code...
			 $chk .=$chk1.",";
		}

		$insertquery = " insert into coronacase(username, email, mobile, symp, message) values('$username', '$email', '$mobile', '$chk', '$msg')";

		$query = mysqli_query($con, $insertquery);

	if($con){
	?>
	<script type="text/javascript">
		alert("Data Sents Sucessful");
	</script>
	<?php
	}else{
	?>
		<script type="text/javascript">
			alert("Data Not Sent");
		</script>
	<?php	
		}
	}
?>