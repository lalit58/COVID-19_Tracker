
<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:adminlogin.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'Links/links.php'; ?>
	<?php include 'CSS/style.php'; ?>


		<style type="text/css">
		.btn{
			right: 40px;
		}
	</style>

</head>
<body class="btn-secondary">

<nav  style="" class="navbar navbar-expand-lg nav_style p-3">
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
        <a class="nav-link" href="index.php #aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="symtoms.php">Symtoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="prevention.php">Prevention</a>
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
<br>
<br>

	<div class="main-div">
		<br><br>
		<h1>List of Registered Patient</h1>		
		<div class="center-div">
			<div class="table-responsive">
				<table id="table">
					<thead>
						<tr>
							<th>id</th>
							<th>username</th>
							<th>email</th>
							<th>mobile</th>
							<th>symptoms</th>
							<th>message</th>
							<th colspan="2">Action</th>	
						</tr>
					</thead>
					<tbody>

						<?php
							include 'dbcon.php';



							$selectquery = " select * from coronacase ";
							
							$query = mysqli_query($con,$selectquery);

							$num = mysqli_num_rows($query);

							
							while ($res = mysqli_fetch_array($query)) {
						
						?>

							<tr>
								<td><?php echo $res['id']; ?></td>
								<td><?php echo $res['username']; ?></td>
								<td><span class="email-style"><?php echo $res['email']; ?></span></td>
								<td><?php echo $res['mobile']; ?></td>
								<td><?php echo $res['symp']; ?></td>
								<td><?php echo $res['message']; ?></td>
								<td><a href="updates.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATES">
										<i class="fa fa-edit" aria-hidden="true"></i></a></td>
								<td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
							</tr>
						 
						<?php	
							}
						?>
					

						
					</tbody>
				</table>
			</div>
			<p class="text-center">
					<button class="btn button btn-primary">Print</button>
						<a href="logout.php" class="btn align-right btn-danger">Logout</a>
				</p>
			<div class="text-center">
				<script src="jquery.min.js"></script>
				<script type="text/javascript">
					$('.button').click(function(){
						var printme = document.getElementById('table');
						var wme = window.open("","","width=900,height=700");
						wme.document.write(printme.outerHTML);
						wme.document.close();
						wme.focus();
						wme.print();
						wme.close();
					})
				</script>
				
			</div>

		</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<!--////////////////// Footer//////////////-->
<footer class="container-fluid text-center bg-dark mt-5 text-white">
        <div class="container">Copyrights 2020. All Rights Reserved.</div>
</footer>

</body>
</html>