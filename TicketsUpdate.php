
<?php

include("connect.php");

if (isset($_POST['submit'])) {
	$dob = $_POST['dob'];
	$source = $_POST['source'];
	$destination = $_POST['destination'];
	$class = $_POST['class'];
	$price = $_POST['price'];

if ($dob && $source && $destination && $class && $price) {
	$sql = "UPDATE TICKET2 SET PRICE=$price WHERE DATE_OF_BOOKING='$dob' AND SOURCE='$source' AND DESTINATION='$destination' AND CLASS='$class';";


	if (mysqli_query($con, $sql)) {

	echo "value updated";
	}
	else
	{
		echo "Try again";
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
<title>Price Update</title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial=scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: url(untitled.png) no-repeat;
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
</head>

<body>

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

<div style="margin-top:140px;padding:15px 15px;font-size:30px">
	<p><h2>Enter the Ticket Details to Change The Price: </h2></p>
<form action="TicketsUpdate.php" method="post">


<div class="container">

                    <div class="row">
                    <div class="col-md-3">
                    <label>Date Of Booking:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="dob"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Source:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="source"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Destination:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="destination"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Class:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="class"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Price:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="integer" name="price"/><br>
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
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
</script>
</body>
</html>

