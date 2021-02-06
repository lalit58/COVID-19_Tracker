
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'Links/links.php'; ?>
	<?php include 'CSS/style.php'; 
	
	?>
	<?php include 'dbcon.php'; ?>
</head>
<body class="contact_body">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="index.php"><b>COVID-19</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item">
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
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contacts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminlogin.php">Admin</a>
      </li>
      
    </ul>
    <div class="search form-inline">
    	<input type="text" placeholder="ENHANCED BY Google" name="search">
    	<BUTTON>Search</BUTTON>
    </div>
   
  </div>
</nav>

<!--////////////////// Contact//////////////-->

<div class="container sub_section_contact pt-5 pb-5 shadow" id="aboutid">

	<div class="section_header text-danger text-center mb-5 mt-4">
		<h1>FORM UPDATION</h1>
	</div>

		<div class="container">
			<div class="row"> 
				<div class="col-lg-8 offset-lg-2 col-12">
					<form action="" method="POST">
						<div class="form-group">
						<?php

								include 'dbcon.php';

								$ids = $_GET['id'];
								$showquery = "select *from coronacase where id={$ids}";

								$showdata = mysqli_query($con,$showquery);

								$arrdata = mysqli_fetch_array($showdata);


								if(isset($_POST['update'])){
									$iupdate = $_GET['id'];
								$username = $_POST['username'];
								$email = $_POST['email'];
								$mobile = $_POST['mobile'];
								//$symp = $_POST['coronasym'];
								$msg = $_POST['msg'];

								//$chk = "";

								//foreach ($symp as $chk1) {
									# code...
								//	 $chk .=$chk1.",";
								//}

								//$insertquery = " insert into coronacase(username, email, mobile, symp, message) values('$username', '$email', '$mobile', '$chk', '$msg')";

								$query = " update coronacase set id=$ids, username='$username', email='$email',mobile='$mobile',message='$msg' where id=$iupdate ";

								$res = mysqli_query($con, $query);

							if($res){
							?>
							<script type="text/javascript">
								alert("Data UPDATE Sucessful");
							</script>
							<?php
							}else{
							?>
								<script type="text/javascript">
									alert("Data Not UPDATES");
								</script>
							<?php	
								}
							}

						?>

							<label>Username</label>
							<input type="text" class="form-control"name="username" placeholder="name" value="<?php echo $arrdata['username']; ?>"autocomplete="off" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control"name="email" placeholder="name@example.com" autocomplete="off" value="<?php echo $arrdata['email']; ?>"required autocomplete="off">
							
						</div>
						<div class="form-group">
							<label>mobile</label>
							<input type="number" class="form-control"name="mobile" placeholder="mobile" autocomplete="off" value="<?php echo $arrdata['mobile']; ?>"required>
						</div>


						<div class="form-group">
							<label>Select Symptoms</label> <br>
							
							<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input type="checkbox" class="custom-control-input " id="customcheckbox1"  name="coronasym[]" value="<?php echo $arrdata['symp[]']; ?>">
								<label class="custom-control-label" for="customcheckbox1">Cough</label>
							</div>
							<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input type="checkbox" class="custom-control-input " id="customcheckbox2"  name="coronasym[]" value="<?php echo $arrdata['symp']; ?>">
								<label class="custom-control-label" for="customcheckbox2">Cold</label>
							</div>
							<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input type="checkbox" class="custom-control-input " id="customcheckbox3"  name="coronasym[]" value="<?php echo $arrdata['symp']; ?>">
								<label class="custom-control-label" for="customcheckbox3">Fever</label>
							</div>
							<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input type="checkbox" class="custom-control-input " id="customcheckbox4"  name="coronasym[]" value="<?php echo $arrdata['symp']; ?>">
								<label class="custom-control-label" for="customcheckbox4">Weekness</label>
							</div>
							<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input type="checkbox" class="custom-control-input " id="customcheckbox5"  name="coronasym[]" value="<?php echo $arrdata['symp']; ?>">
								<label class="custom-control-label" for="customcheckbox5">Difficulty In Brething</label>
							</div>

						</div>


						<div class="form-group">
							<label for="formControlTextArea1">Describe how you are feeling</label>
							<textarea class="form-control" id="formControlTextArea1" rows="3" name="msg" value="<?php echo $arrdata['message']; ?>"></textarea>
						</div>

						<button type="submit" class="btn btn-primary" name="update">UPDATE</button>

					</form>

					
				</div>
				
			</div>
			
		</div>
</div>	
