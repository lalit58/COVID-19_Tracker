<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'Links/links.php'; ?>
	<?php include 'CSS/style.php'; ?>
</head>
<body>


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
      <li class="nav-item active">
        <a class="nav-link" href="symtoms.php #aboutid">Symtoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="prevention.php">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contacts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminlogin.php">Admin</a>
      </li>
      
    </ul>
    <div class="search">
    	<input type="text" placeholder="ENHANCED BY Google" name="search">
    	<BUTTON>Search</BUTTON>
    </div>
   
  </div>

</nav>
<!--////////////////// corona symptoms//////////////-->

<div class="container-fluid pt-5 pb-5 " id="symtomid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> Corona Symptoms</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="Images\cough.png" class="img-fluid" width="120" height="
				120">
				<figcaption>Cough</figcaption>
			    </figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="Images\runny_nose.png"cough class="img-fluid" width="120" height="
				120">
				<figcaption>Runny nose</figcaption>
			    </figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="Images\fever.png" class="img-fluid" width="120" height="
				120">
				<figcaption>fever</figcaption>
			    </figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="Images\cold.png" class="img-fluid" width="120" height="
				120">
				<figcaption>Cold</figcaption>
			    </figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="Images\Tiredness.png" class="img-fluid" width="120" height="
				120">
				<figcaption>Tiredness</figcaption>
			    </figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="Images\pain.png" class="img-fluid" width="120" height="
				120">
				<figcaption>Difficulty breathing(severe cases)</figcaption>
			    </figure>
			</div>
		</div>
	</div>
</div>
<!--////////////////// Footer//////////////-->


<footer class="container-fluid text-center bg-dark mt-5 text-white">
        <div class="container">Copyrights 2020. All Rights Reserved.</div>
</footer>

</body>
</html>