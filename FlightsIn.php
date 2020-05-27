<?php

include("connect.php");

if (isset($_POST['submit'])) {
  $flightcode = $_POST['Flight_Code'];
  $source = $_POST['Source'];
  $destination = $_POST['Destination'];
  $arrival = $_POST['Arrival'];

  $departure = $_POST['Departure'];
  $cur = $_POST['Cur_status'];
  $duration = $_POST['Duration'];

  $flighttype = $_POST['Flighttype'];
  $layover = $_POST['Layover'];
  $noofstops = $_POST['Noofstops'];
  $airlineid = $_POST['AirlineID'];

  if ($flightcode && $source && $destination && $arrival && $departure && $cur && $duration && $flighttype && $airlineid){
              $sql1="INSERT INTO flight(flight_code,source,destination,arrival,departure,cur_status,duration,flighttype,layover_time,no_of_stops,airlineid) VALUES('$flightcode','$source','$destination','$arrival','$departure','$cur','$duration','$flighttype','$layover','$noofstops','$airlineid');";
  if (mysqli_query($con, $sql1)) {

    echo "value updated";
  }
  else
  {
    echo "value not updated";
  }
}
else
{
    echo "enter the values & Try again";

}
}
?>

<!DOCTYPE HTML>
<html>  
<title>Add Flights</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial=scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  
  font-family: Arial, Helvetica, sans-serif;
}

#navbar {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 50px 10px;
  transition: 0.4s;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 99;
}

#navbar a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

#navbar #logo {
  font-size: 35px;
  font-weight: bold;
  transition: 0.4s;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: dodgerblue;
  color: white;
}

#navbar-right {
  float: right;
}

@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px 10px !important;
  }
  #navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  #navbar-right {
    float: none;
  }
}
</style>
<body  background="01a.jpg">
<div id="navbar">
  <a href="HomePage.php" id="logo">Airport Management Database</a>
  <div id="navbar-right">
    <a class="active" href="HomePage.php">Home</a>
    <a href="Insertion.php">Insert</a>
    <a href="Display.php">Display</a>
    <a href="Schema.php">Schema</a>
    <a href="Team.php">Team</a>
    <a href="Trigger.php">Trigger</a>
    <a href="Logout.php">Logout</a>
  </div>
</div>
<div style="margin-top:160px;padding:15px 15px;font-size:30px">
  <p> <h2>Enter the following Flight Details:</h2></p>
<form action="FlightsIn.php" method="post">

<div class="container">

                    <div class="row">
                    <div class="col-md-3">
                    <label>Flight Code:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="Flight_Code"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Source:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="Source"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Destination:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="Destination"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Arrival Time:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="Arrival"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Departure Time:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="Departure"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Current Status:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="Cur_status"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Duration:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="Duration"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Flight Type:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="Flighttype"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Layover Time:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="Layover"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>No Of Stops:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="Noofstops"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Airline ID:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="AirlineID"/><br>
                    </div>
                    </div><br>

                    <div class="row justify-content-center">
                    <input class="btn btn-success"  name="submit" type="submit"  value="&nbsp; Submit &nbsp;" /><br>
                    </div>
</div>
</form>
</div>
<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 45 || document.documentElement.scrollTop > 45) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "50px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
</script>

</body>
</html>


