<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'Links/links.php'; ?>
	<?php include 'CSS/style.php'; ?>
	<?php include 'dbcon.php'; ?>
	<style type="text/css">
	.contact_body{ background-image: url("Images/contact-us.jpg"); background-size: cover; background-repeat: no-repeat; font-style: bold;color:  #001a33; background-attachment: fixed;}
	.section_header{width: 100%;line-height: 80px;font-size: 1.4rem;	background: rgb(255, 255, 229); font-family: 'Staatliches', cursive;}
	.sub_section_contact{background: white;}		
	.container{ width: 90%; margin: auto; overflow: hidden; }
    #contact-section{ background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.9)); background-size: cover;  background-position: center;  height: 100%;  width: 100% ;  padding-bottom: 2%; }
     #contact-section .container p{  text-align: center;   width: 70%;   margin-left: auto;   margin-right: auto;    padding-bottom: 3%;   color: #fff;   letter-spacing:3px;}
    .contact-form i.fa{   font-size: 22px;    padding: 3%;   background-color: none;   border-radius: 80%;   margin: 2%;    cursor: pointer;   border:2px solid rgb(190, 190, 190);
      color: rgb(190, 190, 190); }
    .contact-form i.fa:hover{  cursor: pointer;  border:2px solid white;  color: white; }
     
    .contact-form{    display: grid;  grid-template-columns: auto auto;  } 
     .form-info{  font-size: 16px;  font-style: italic;  color: white;  letter-spacing: 2px;}
      input{ padding: 10px; margin:10px; width: 70%; background-color:rgba(136, 133, 133, 0.5); color: white;  border: none;  outline:none;
      }
      input::placeholder{
        color: white;
      }
     textarea{    padding: 10px;  margin: 10px;  width: 70%;  background-color:rgba(136, 133, 133, 0.5);  color: white;  border: none;  outline:none; }
     textarea::placeholder{  color: white;  }
      .submit{ width: 40%;  background: none;  padding: 4px;  outline: none;  font-size: 13px;  font-weight: bold;  letter-spacing: 2px;  height: 33px;  text-align: center;  cursor: pointer;  
        letter-spacing: 2px;  margin-left: 3%; border:2px solid rgb(190, 190, 190);  color: rgb(190, 190, 190); }
    .submit:hover{      border: 1px solid #fff;  color: #fff;  cursor: pointer; }
 /* media queries */ 
  @media (max-width: 768px){
 #contact-section .contact-form{    display: block;   width: 100%;   text-align: center;  }
      #contact-section .submit{   width: 60%;  }
	</style>
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
        <a class="nav-link" href="index.php #symtomid">Symtoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php #prevensionid">Prevention</a>
      </li>
      <li class="nav-item active">
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

<!--////////////////// Contact//////////////-->
<section id="contact-section">
           <div class="container">
              <div class="text-light text-center"><br><br><br><br>
           	      <h2>CONTACT US ASAP</h>
              </div>
              
             <div class="contact-form">
                  <!-- First grid -->
               <div><br><br>
                 <i class="fa fa-map-marker"></i><span class="form-info"> COVID-19 Hospital,BBSR,Odisha</span><br>
                 <i class="fa fa-phone" > </i><span class="form-info">  +91 01234567890</span><br>
                 <i class="fa fa-envelope"></i><span class="form-info">  healthcare@gmail.com</span>
               </div>
               
                   <!-- second grid -->
           <div>        <br><br>
             <form action="" method="POST" class="text-white">
						<div class="form-group text-white">
							<label>Name</label>
							<input type="text" class="form-control"name="username" placeholder="name" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control"name="email" placeholder="name@example.com" autocomplete="off" required autocomplete="off">
							
						</div>
						<div class="form-group">
							<label>mobile</label>
							<input type="number" class="form-control"name="mobile" placeholder="mobile" autocomplete="off" required>
						</div>

						<div class="form-group">
							<label>Select Symptoms</label> <br>
							
							<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input type="checkbox" class="custom-control-input " id="customcheckbox1"  name="coronasym[]" value="cough">
								<label class="custom-control-label" for="customcheckbox1">Cough</label>
							</div>
							<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input type="checkbox" class="custom-control-input " id="customcheckbox2"  name="coronasym[]" value="cold">
								<label class="custom-control-label" for="customcheckbox2">Cold</label>
							</div>
							<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input type="checkbox" class="custom-control-input " id="customcheckbox3"  name="coronasym[]" value="fever">
								<label class="custom-control-label" for="customcheckbox3">Fever</label>
							</div>
							<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input type="checkbox" class="custom-control-input " id="customcheckbox4"  name="coronasym[]" value="weekness">
								<label class="custom-control-label" for="customcheckbox4">Weekness</label>
							</div>
							<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input type="checkbox" class="custom-control-input " id="customcheckbox5"  name="coronasym[]" value="difiicult_breathing">
								<label class="custom-control-label" for="customcheckbox5">Difficulty In Brething</label>
							</div>
						</div>
						<div class="form-group">
							<label for="formControlTextArea1">Describe how you are feeling</label>
							<textarea class="form-control" id="formControlTextArea1" rows="3" name="msg"></textarea>
						</div>
						<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					</form>  
               </div>
             </div>
           </div>
           <br>
           <div class="map">
				<p align="center">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.9711693074823!2d85.82107691455906!3d20.260030418951853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a7606b4da9c1%3A0x92908d48ef3b14d4!2sCapital%20Hospital!5e0!3m2!1sen!2sin!4v1608553798853!5m2!1sen!2sin" width="1000" height="200" frameborder="0" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</p>
			</div>

			<!--//////////////////top cursor //////////////-->
			<div class="container scrollTop float-right pr-5">
				<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>	
			</div>

			<!--////////////////// Footer//////////////-->

			<footer class="container-fluid text-center bg-dark mt-5 text-white">
			        <div class="container">Copyrights 2020. All Rights Reserved.</div>
			</footer>


         </sectio>

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
