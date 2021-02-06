<?php
session_start()

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'userlogincss.php' ?>
	<?php include 'Links/links.php' ?>
</head>

<?php

include 'userdbcon.php'; 

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$email_search = "select * from registration where email='$email'";
	$query = mysqli_query($con,$email_search);

	$email_count = mysqli_num_rows($query);

	if($email_count){
		$email_pass = mysqli_fetch_assoc($query);

		$db_pass=$email_pass['password'];

		$pass_decode = password_verify($password, $db_pass);

		if($pass_decode){
			echo "Login sucessful";
			?>
				<script>
					location.replace("index.php");
				</script>
			<?php
		}else{
		echo "Password incorrect";
	}
	}else{
		echo "Invalid Email";
	}
}
?>


	<div class="card bg-light">
	<article class="card-body mx-auto" style="max-width: 400px;">
		<h4 class="card-title mt-3 text-center"></h4>
		 <p class="text-center">Lets Get started</p>
		 <p>
		 	<a href="" class="btn btn-block btn-gmail"> <i class="fa fa-google"></i> Login Via Gmail</a>
		 	<a href="" class="btn btn-block btn-facebook"> <i class="fa fa-facebook-f"></i> Login Via Facebook</a>
		 	<p class="divider-text">
				<span class="bg-light"> OR</span>		 		
		 	</p>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i></span>
					</div>
					<input class="form-control" placeholder="Email Address" name="email"  type="email" required>	
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-lock"></i></span>
					</div>
					<input class="form-control" placeholder="Password" name="password"  type="password" required>	
				</div>

				<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary btn-block" src="userprofile.php">Login Here</button>
					</div>
						<p class="text-center">Have't an account? <a href="userlogin.php">Sign UP</a></p>
					</form>
			</article>
	</div>
		

</html>