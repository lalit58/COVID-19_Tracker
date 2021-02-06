<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'Links/links.php'; ?>
	<script src="main.js"></script>
	<style type="text/css">
*{margin: 0;padding: 0;box-sizing: border-box;font-family: 'Open Sans', sans-serif;}
 .nav_style { background-color: #00384d;
display: flex;
justify-content: center;}
.nav_style a{color: white;}
 </style>
</head>
<body onload="fetch()" class="">
<!----------------NavBar----------------------------- ------>
<nav  style="" class="navbar fixed-top navbar-expand-lg nav_style p-3 ">
  <a class="navbar-brand pl-5" href="index.php"><b>COVID-19</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php #aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php #symtomsid">Symtoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php #preventionid">Prevention</a>
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
</nav>

<!----------------Create Table and Fetch data From rest Covid-19 API ------>
<br><br>
<section class="covid_update container-fluid">
	<div class="my-5">
		<h3 class="text-center text-uppercase">covid-19 updates</h3>
    <p class="text-center">These are the COVID-19 Cases India </p>
	</div>
	<input type="text" name="" id="myInput" placeholder="Search..." onkeyup="searchFun()">
		<div class="table-responsive">
			<table class="table table-bordered table-striped text-center" id="mytable">
				<tr>
					<th class="text-capitalize" >Country</th>
					<th class="text-capitalize">state</th>
					<th class="text-capitalize">confirmed</th>
					<th class="text-capitalize">active</th>
					<th class="text-capitalize">recovered</th>
					<th class="text-capitalize">deaths</th>
				</tr>
						<?php

							$data = file_get_contents('https://api.covid19india.org/data.json');
						 $coronadata = json_decode($data, true);
						 

						 $statecount =  count($coronadata['statewise']);

						 $i=1;
						 while($i < $statecount){

						 ?>

						 <tr>
						 	<td><?php echo $coronadata['statewise'][$i]['lastupdatedtime'] ?></td>
						 	<td><?php echo $coronadata['statewise'][$i]['state'] ?></td>
						 	<td><?php echo $coronadata['statewise'][$i]['confirmed'] ?></td>
						 	<td><?php echo $coronadata['statewise'][$i]['active'] ?></td>
						 	<td><?php echo $coronadata['statewise'][$i]['recovered'] ?></td>
						 	<td><?php echo $coronadata['statewise'][$i]['deaths'] ?></td>

						 </tr>

						 <?php

						 $i++;
						}

						?>


			</table>
		</div>

</section>

<!----------------------------Search Table data -------------------------------->

<script type="text/javascript">
	const searchFun = () =>{

	let filter = document.getElementById('myInput').value.toUpperCase();


	let mytable = document.getElementById('mytable');

	let tr = mytable.getElementsByTagName('tr');

	for(var i=0; i<tr.length; i++){
		let td = tr[i].getElementsByTagName('td')[0];

		if(td){
			let textvalue = td.textContent || td.innerHTML;
			if (textvalue.toUpperCase().indexOf(filter) > -1) {
						tr[1].style.display = "";}
						else{
							  tr[i].style.display = "none";
						}

			
		}

	}	

}

</script>

</body>
</html>