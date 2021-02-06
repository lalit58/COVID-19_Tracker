<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'CSS/userlogincss.php' ?>
	<?php include 'Links/links.php' ?>

</head>
<?php 

include 'userdbcon.php'; 
if (isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);


	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

	$emailquery = "select * from  registration where email='$email' ";
	$query = mysqli_query($con,$emailquery);

	$emailcount = mysqli_num_rows($query);

	if($emailcount>0){
		echo "email already exits";
	}else{
		if ($password === $cpassword) {
			$insertquery = "insert into registration(username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";

			$iquery = mysqli_query($con, $insertquery);

			if($iquery){
				?>
				<script>
					alert("Inserted Sucessful");
				</script>
				<?php
			}else{
				?>
				<script>
					alert("NO Inserted");
				</script>
				<?php
}
		}else{

				?>
				<script>
					alert("Password are Not Maching");
				</script>
				<?php
	}
	}
}

 ?>
<div class="card bg-light">
	<article class="card-body mx-auto" style="max-width: 400px;">
		<h4 class="card-title mt-3 text-center"></h4>
		 <p class="text-center">Let's Get Started</p>
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
					<input class="form-control" placeholder="Full Name" name="username"  type="text" required>	
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-envelope"></i></span>
					</div>
					<input class="form-control" placeholder="Email Address" name="email"  type="email" required>	
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-phone"></i></span>
					</div>
					<input class="form-control" placeholder="Mobile Number" name="mobile"  type="number" required>	
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-lock"></i></span>
					</div>
					<input class="form-control" placeholder="Create Password" name="password"  type="password" required>	
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-lock"></i></span>
					</div>
					<input type="password" class="form-control" placeholder="Repeat Password" name="cpassword" required>	
				</div>
				<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary btn-block">Create Account </button>
					</div>
						<p class="text-center">Have an account? <a href="usersignin.php">Login</a></p>
					</form>
				</article>
					</div>
				</div>
			</div>
		</div>
</div>
</html>
