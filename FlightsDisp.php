<!DOCTYPE html>
<html>
<head>
  <title>Flight Details</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial=scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style type="text/css">
    * {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

#navbar {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 90px 10px;
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
  table{
    border-collapse: collapse;
    width: 100%;
    color: #d96459;
    font-family: monospace;
    font-size: 20px;
    text-align: left;
  } 
  th{
    background-color: #d96459;
    color: white;
  }
  tr:nth-child(even) {background-color: #f2f2f2f2}

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
<div style="margin-top:210px;padding:15px 15px;font-size:30px">
  <h2> The Below values is the Flight Data </h2> 
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
  <table>
  <tr>
    <th>Flight Code</th>
    <th>Source</th>
    <th>Destination</th>
    <th>Arrival</th>
    <th>Departure</th>
    <th>Current Status</th>
    <th>Duration</th>
    <th>Flight Type</th>
    <th>Layover Time</th>
    <th>No Of Stops</th>
    <th>AirlineID</th>
  </tr>
  <?php
  $conn = mysqli_connect("localhost","root","","airport");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $sql="SELECT * FROM flight;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if($resultCheck){
    while ($row = mysqli_fetch_assoc($result)){
      echo "<tr><td>". $row["FLIGHT_CODE"]."</td><td>". $row["SOURCE"]."</td><td>".$row["DESTINATION"]."</td><td>".$row["ARRIVAL"]."</td><td>". $row["DEPARTURE"]."</td><td>".$row["CUR_STATUS"]. "</td><td>".$row["DURATION"]."</td><td>".$row["FLIGHTTYPE"]."</td><td>".$row["LAYOVER_TIME"]."</td><td>".$row["NO_OF_STOPS"]."</td><td>".$row["AIRLINEID"]."</td></tr>";
    }
  }
  else{
    echo "0 results";
  }
  $conn-> close();
  ?>

  </table>
</body>
</html>