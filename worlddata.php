<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'Links/links.php'; ?>
	
	<style type="text/css">			
		*{margin: 0;padding: 0;box-sizing: border-box;font-family: 'Open Sans', sans-serif;}
		.nav_style { background-color: #00384d;
		display: flex;
		justify-content: center;}
		.nav_style a{color: white;}
	</style>
</head>
<body onload="fetch()">

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
        <a class="nav-link" href="symtoms.php">Symtoms</a>
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
    <div class="search  id=navbarSupportedContent">

    <form class="form-inline  mr-auto">
      <input class="form-control" type="text" placeholder="ENHANCED BY Google" aria-label="Search">
      <button class="btn btn-primary btn-rounded btn-sm my-0 ml-sm-2" type="submit">Search</button>
    </form>
</nav>
<!----------------Create Table and Fetch data From rest Covid-19 API ------>
<br><br><br>
<section class="covid_update container-fluid">
	<div class="my-3">
		<h3 class="text-center text-uppercase">covid-19 updates</h3>
		<p class="text-center">These are the COVID-19 Data in World</p>
	</div>
	<input type="text" name="" id="myInput" placeholder="Search..." onkeyup="searchFun()">
		<div class="table-responsive">
			<table class="table table-bordered table-striped text-center" id="tbval">
				<tr>
					<th>Country</th>
					<th>Total Confirmed</th>
					<th>Total Recovered</th>
					<th>Total Deaths</th>
					<th>New Confirmed</th>
					<th>New Recovered</th>
					<th>New Deaths</th>
				</tr>
			</table>
		</div>
</section>
<!--//////////////////top cursor //////////////-->
<div class="container scrollTop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>	
</div>

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

//////////////////COVID data fatch//////////////-->
function fetch(){
	$.get("https://api.covid19api.com/summary",

			function (data){
				//console.log(data['Countries'].length);
				var tbval = document.getElementById('tbval');

				for(var i=1; i<(data['Countries'].length); i++){
					var x = tbval.insertRow();
					
					x.insertCell(0);
					tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
					tbval.rows[i].cells[0].style.background = '#7a4a91';
					tbval.rows[i].cells[0].style.color = '#fff';

					x.insertCell(1);
					tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
					tbval.rows[i].cells[1].style.background = '#4bb7d8';

					x.insertCell(2);
					tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
					tbval.rows[i].cells[2].style.background = '#4bb7d8';

					x.insertCell(3);
					tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
					tbval.rows[i].cells[3].style.background = '#f36e23';

					x.insertCell(4);
					tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
					tbval.rows[i].cells[4].style.background = '#4bb7d8';

					x.insertCell(5);
					tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
					tbval.rows[i].cells[5].style.background = '#9cc850';

					x.insertCell(6);
					tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
					tbval.rows[i].cells[6].style.background = '#f36e23';

					
				}
				
			}
		);
}


</script>
<!----------------------------Search Table data -------------------------------->

<script type="text/javascript">
	function searchFun(){

	let filter = document.getElementById('myInput').value.toUppercase();

	let tbval = document.getElementById('tbval');

	let tr = tbval.getElementsByTagName('tr');

	for(var i; i<tr.length; i++){
		let td = tr[i].getElementsByTagName('td')[0];

		if(td){
			let textvalue = td.textContent || td.innerHTML;
			if (textvalue.toUppercase().indexof(filter) > -1) {
						tr[i].style.display = "";}
						else{
							  tr[i].style.display = "none";
						}
		}

	}	

}

</script>
</body>
</html>
