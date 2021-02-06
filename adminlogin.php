
<!--admin login page desiging--->
<?php
session_start();
$con = mysqli_connect('localhost', 'root');
if($con){
	echo "Connection sucessfull";
}else{
	echo "No Connection";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'Links/links.php'; ?>
	<?php include 'CSS/style.php'; ?>
	<style type="text/css">
		*{margin: 0; padding: 0;}
		.center-div-login{	position: absolute;	top: 50%;	left: 50%;	transform: translate(-50%, -50%);
			background: -webkit-linear-gradient(left, #f2f2f2, #0072ff); }
		.heading-login{	width: 100%;	line-height: 80px;	font-size: 1.4rem;	background: -webkit-linear-gradient(left, #0072ff, #8811c5);
			font-family: 'Staatliches', cursive;}
		form{
			width: 400px; }
		
	</style>
</head>
<body class="bg-info">

<nav  style="" class="navbar navbar-expand-lg float-right nav_style p-3">
  <a class="navbar-brand pl-5" href="index.php"><b>COVID-19</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php #aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php #symtomid">Symtoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php #prevensionid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contacts</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="adminlogin.php">Admin</a>
      </li>
      
    </ul>
    <div class="search"  id=navbarSupportedContent>

    <form action="https://www.google.com/search"class="form-inline  mr-auto" method="GET" target="_blank" >
      <input class="form-control" type="text" name="q" placeholder="ENHANCED BY Google" aria-label="Search">
      <button class="btn btn-primary btn-rounded btn-sm my-0 ml-sm-2" name="key_submit" type="submit">Search</button>
    </form>
    
  </div>
  </div>
</nav>


<div class="main-div">
	<header>
		<div class="container center-div-login shadow ">
		<div class="heading-login text-center text-uppercase mb-5 text-white">ADMIN LOGIN PAGE</div>
			<div class="container row d-flex flex-row justify-content-center mb-5">
				<div class="admin-form shadow p-2">
					<form action="logincheck.php" method="post">
						<div class="form-group">
							<label>Admin ID</label>
							<input type="text" name="user" value="" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="Password" name="pass" value="" class="form-control" autocomplete="off" id="pwd">
							<script>
								function myFunction() {
								  var x = document.getElementById("pwd");
								  if (x.type === "password") {
								    x.type = "text";
								  } else {
								    x.type = "password";
								  }
								}
							</script>

						</div>
						<input type="submit" class="btn btn-success" name="submit" >
					</form>
				</div>
			</div>
		</div>
	</header>
</div>
<!--////////////////// Footer//////////////-->
<footer class="container-fluid text-center bg-dark mt-5 text-white">
        <div class="container">Copyrights 2020. All Rights Reserved.</div>
</footer>
</body>
</html>