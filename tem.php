<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <style type="text/css"> /* Changing the font-family of all the elements in the project */
body {
  font-family: "Baloo Thambi 2", cursive;
}

</style>

<?php include 'temp.php'; ?>
 <script src="main.js"></script>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Uncompressed jQuery -->
    >
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/996973c893.js"
      crossorigin="anonymous"
    ></script>

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="style.css" />

    <!-- My jQuery -->
   

    <!-- Chart.js (Working CDN) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <title>Covid-19 Tracker India</title>
  </head>
  <body>
    <!-- Main Title and  Sub-heading -->
    <div class="container-fluid bg-light p-5 text-center my-3">
      <h1 class="">Covid-19 Tracker India</h1>
      <h5 class="text-muted">
        An opensource project to keep track of all the COVID-19 cases around the
        world.
      </h5>
    </div>

    <!-- Total number of confirmed and all the other info -->
    <div class="container my-5">
      <div class="row text-center">
        <div class="col-3 text-warning">
          <h5>Confirmed</h5>
        </div>
        <div class="col-3 text-info">
          <h5>Active</h5>
        </div>
        <div class="col-3 text-success">
          <h5>Recovered</h5>
        </div>
        <div class="col-3 text-danger">
          <h5>Deceased</h5>
        </div>
      </div>
    </div>

    <!-- Used by Chart.js -->
    <canvas id="myChart" class="container"></canvas>

    <!-- Bottom Note -->
    <div class="container text-center my-5">
      <h6 class="text-info">
        *Click on the Confirmed/Recovered/Deaths buttons above to see the chart
        individually.*
      </h6>
    </div>

    <!-- Footer -->
    <footer class="footer mt-5 py-3 bg-light">
      <div class="container text-center">
        <span class="text-muted"
          >Copyright &copy;2020,
          <a href="https://packetcode.in" target="_blank">Packetcode</a></span>
      </div>
    </footer>
  </body>
</html>

<!------

<script type="text/javascript">	 
   	 
   		  
  $(document).ready(function () {
  // Get JSON data from url
  $.getJSON("https://api.covid19india.org/data.json", function (data) {
    var states = [];
    var confirmed = [];
    var recovered = [];
    var deaths = [];

    var total_active;
    var total_confirmed;
    var total_recovered;
    var total_deaths;

    // Take the first element in statewise array and add the objects values into the above variables
    total_active = data.statewise[0].active;
    total_confirmed = data.statewise[0].confirmed;
    total_recovered = data.statewise[0].recovered;
    total_deaths = data.statewise[0].deaths;

    // The each loop select a single statewise array element
    // Take the data in that array and add it to variables
    $.each(data.statewise, function (id, obj) {
      states.push(obj.state);
      confirmed.push(obj.confirmed);
      recovered.push(obj.recovered);
      deaths.push(obj.deaths);
    });

    // Remove the first element in the states, confirmed, recovered, and deaths as that is the total value
    states.shift();
    confirmed.shift();
    recovered.shift();
    deaths.shift();

    // console.log(confirmed);
    $("#confirmed").append(total_confirmed);
    $("#active").append(total_active);
    $("#recovered").append(total_recovered);
    $("#deaths").append(total_deaths);

    
  });
});
   	</script>	