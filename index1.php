<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'Links/links.php'; ?>
	<?php include 'CSS/style.php'; ?>
	<?php include 'temp.php'; ?>
	<script src="main.js"></script>
</head>
<body class="body_home">
	<nav  style="" class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="index.php"><b>COVID-19</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symtomid">Symtoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#prevensionid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contacts</a>
      </li>
      <li class="nav-item">
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

<div class="main_header";>
	<div class="row" width="100" height="100" >
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="Images\262cfac.png" width="280" height="280">
			</div >
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center"><h1>Let's Stay Safe & Fight Togather against Cor<span class="corona_rot"><img src="Images/top.png" width="50" height="50"></span>na Virus</h1> 
		</div> 
	</div>
</div>
<!--*****************Corona Latest Updates*********-->
<section class="corona_update  bax-shadow">
	<div class="mb-3">
		<h3 class="text-uppercase update_heading text-center">covid-19 updates</h3 >
	</div>
<div class="container">
  <div class="row">
  	<div class="btn  col-md-6 btn-primary text-center">
    	<a class="text-light"href="indiadata.php"><b>INDIA</b></a>
    </div>
    <div class="btn col-md-6 btn-danger text-center text-light">
    	<a class="text-light"href="worlddata.php"><b>WORLD</b></a>
    </div> 
  </div>
</div>
    <div class="container-fluid pb-5 pt-5 shadow ">
    	<p class="text-center text-light">COVID-19 INDIA DATA</p>

      <div class="row text-center">
        <div class="col-3 text-warning">
          <h5>Confirmed</h5>
          <p class="count" id="confirmed"></p>
        </div>
        <div class="col-3 text-info">
          <h5>Active</h5>
          <p class="count" id="active"></p>
        </div>
        <div class="col-3 text-success">
          <h5>Recovered</h5>
          <p class="count" id="recovered"></p>
        </div>
        <div class="col-3 text-danger">
          <h5>Deceased</h5>
          <p class="count" id="deaths"></p>
        </div>
      </div>
    </div>
<div class="container">
   	<canvas id="myChart"></canvas>	
</div>
</section>
<!--*******************About Covid-19***********-->
<div class="container-fluid sub_section_about pt-5 pb-5 " id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> About COVID-19</h1>
	</div>

	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5">
			<img src="Images/Coronavirus-diagram.jpg" class="img-fluid">
		</div>
 
		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is COVID-19(Corona-Virus)</h2>
			<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.This new virus and disease were unknown before the outbreak began in wuhan,China in December 2019</p>
			<p>Coronavirus are allarge family of viruses which may cause illness in animal or humans.In humans,several coronavirus are known to cause respiratory infections ranging from the common cold to more severe didease such as Middle East Respiratory Syndrome(MERS) and Severe Acute Respiratory Syndrome(SARS).The most recently discovered coronavirus causes coronavirus disease COVID-19. </p>
		</div>
	</div>	
</div>

<!--////////////////// corona symptoms//////////////-->

<div class="container-fluid pt-5 pb-5 shadow bg-light text-dark" id="symtomid">
	<div class="section_header text-center mb-5 mt-4 ">
		<h1> Corona Symptoms</h1>
	</div>
	<p class="text-center container">You can be infected by breathing in the virus if you are within close proximity of someone who has COVID-19, or by touching a contaminated surface and then your eyes, nose or mouth.The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces.Seek immediate medical attention if you have serious symptoms. Always call before visiting your doctor or health facility.
People with mild symptoms who are otherwise healthy should manage their symptoms at home.
On average it takes 5–6 days from when someone is infected with the virus for symptoms to show, however it can take up to 14 days.</p>
	<div class="container  text-dark" style="opacity: 0.8 font:bold;">
		<div class="row ">
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
<!--////////////////// corona prevention//////////////-->
<div class="container-fluid pt-5 pb-5 bg-light shadow" style="opacity: 0.9 font:bold;" id="prevensionid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> Prevention Against Coronavirus</h1>
		<div class="container">
			<p class="prevention ">Prevention is better then cure. It is very necessary take precution mesure before effect you.Protect yourself and others around you by knowing the facts and taking appropriate precautions. Follow advice provided by your local health authority.
			 </p>
 		</div>
		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
							<img src= "Images/Hand sanitiser.png" class="img-fluid" width="120" height="120">
						</div>
			   			 <div class="col-lg-8 col-md-8 col-12">
			   			 	<p>Wash your Hand Regurlarly with soap and water or alchohol based hand rub</p>
			   			 </div>
			    	</div>
			   </div>
			   <div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
							<img src= "Images/wearmask.jpg" class="img-fluid" width="120" height="120">
						</div>
			   			 <div class="col-lg-8 col-md-8 col-12">
			   			 	<p>Cover Your nose and mouth with a disposible tissue or fixed elbow when you cough or sneeze</p>
			   			 </div>
			    	</div>
			   </div>
			   <div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
							<img src= "Images/Avoidcontact.png" class="img-fluid" width="120" height="120">
						</div>
			   			 <div class="col-lg-8 col-md-8 col-12">
			   			 	<p>Avoid close contact(at least 1 meter) with people who are unwell</p>
			   			 </div>
			    	</div>
			   </div>
			    <div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
							<img src= "Images/stayhome.jpg" class="img-fluid" width="120" height="120">
						</div>
			   			 <div class="col-lg-8 col-md-8 col-12">
			   			 	<p>Stay home ans self-isolate from others in the household if you feel unwell</p>
			   			 </div>
			    	</div>
			   </div>
			    <div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
							<img src= "Images/news.jpg" class="img-fluid" width="120" height="120">
						</div>
			   			 <div class="col-lg-8 col-md-8 col-12">
			   			 	<p>Stay informed by watching news and follow the recomendation practices</p>
			   			 </div>
			    	</div>
			   </div>
			    <div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
							<img src= "Images/fever_prev.jpg" class="img-fluid" width="120" height="120">
						</div>
			   			 <div class="col-lg-8 col-md-8 col-12">
			   			 	<p>If you have fever,cough,difficulty in breathing etc. seek telemedical care early </p>
			   			 </div>
			    	</div>
			   </div>
			</div>	
		</div>
	</div>
</div>
<!--//////////////////top cursor //////////////-->
<div class="container scrollTop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>	
</div>
<!--////////////////// Footer//////////////-->
<footer class="container-fluid text-center bg-dark mt-5 text-white">
        <div class="container">Copyrights 2020. All Rights Reserved.</div>
</footer>
<script type="text/javascript">

	mybutton = document.getElementById('myBtn');
	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
		if (document.body.scrollTop > 100 || document.documentElement.scrollTop>100){
			mybutton.style.display="block";} 
			else{
				mybutton.style.display="none";
			}
	}
	function topFunction(){
		document.body.scrollTop=0;
		document.documentElement.scrollTop=0;
	}
</script>
</body>
</html>