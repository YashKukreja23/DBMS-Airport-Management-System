<?php

include("connect.php");

if (isset($_POST['submit'])) {
  $TicketNumber = $_POST['ticketnum'];
  $Source = $_POST['source'];
  $Destination = $_POST['destination'];
  $Dateofbooking = $_POST['Dob'];

  $Dateoftravel = $_POST['Dot'];
  $SeatNo = $_POST['SeatNo'];
  $Class = $_POST['class'];

  $Dateofcancellation = $_POST['Doc'];
  $Surcharge = $_POST['Surcharge'];
  $Price = $_POST['Price'];
  $PID = $_POST['PID'];
  $Passportno = $_POST['Passportno'];

if ($TicketNumber && $Source && $Destination && $Dateofbooking && $Dateoftravel && $SeatNo && $Class && $PID && $Passportno){
            $sql1="INSERT INTO Ticket1(TICKET_NUMBER,SOURCE,DESTINATION,DATE_OF_BOOKING,DATE_OF_TRAVEL,SEATNO,CLASS,DATE_OF_CANCELLATION,PID,PASSPORTNO) VALUES($TicketNumber,'$Source','$Destination','$Dateofbooking','$Dateoftravel','$SeatNo','$Class','$Dateofcancellation',$PID,'$Passportno');";
  if (mysqli_query($con, $sql1)) {

  echo " ";
  }
  else
  {
    echo " ";
  }
}


if ($TicketNumber && $Source && $Destination && $Dateofbooking && $Dateoftravel && $SeatNo && $Class && $PID && $Passportno){
            $sql2="INSERT INTO Ticket2(DATE_OF_BOOKING,SOURCE,DESTINATION,CLASS,PRICE) VALUES('$Dateofbooking','$Source','$Destination','$Class',$Price);";
  if (mysqli_query($con, $sql2)) {

  echo " ";
  }
  else
  { 
    echo " ";
  }
}

if ($Dateofcancellation && $Surcharge){
            $sql3="INSERT INTO Ticket3(DATE_OF_CANCELLATION,SURCHARGE) VALUES('$Dateofcancellation','$Surcharge');";
  if (mysqli_query($con, $sql3)) {

  echo "";
  }
  else
  {
    echo "value updated";
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
<title>Add Tickets</title>
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
  background:url(16236.jpg) no-repeat center;
  background-size: cover;
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
<body">
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

<div style="margin-top:170px;padding:15px 15px ;font-size:30px">
<p><h2>Enter the Following Ticket Details: </h2></p>
<form action="TicketsInFinal.php" method="post">

<div class="container">

                    <div class="row">
                    <div class="col-md-3">
                    <label>Ticket Number:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="integer" name="ticketnum"/><br>
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
                    <label>Booking Date:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="Dob"/><br>
                    </div>
                    </div><br>
                    
                    <div class="row">
                    <div class="col-md-3">
                    <label>Travel Date:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="Dot"/><br>
                    </div>
                    </div><br>
                    
                    <div class="row">
                    <div class="col-md-3">
                    <label>SeatNo:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="SeatNo"/><br>
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
                    <label>Cancellaton Date:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="Doc"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Surcharge:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="integer" name="Surcharge"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Price Of Ticket:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="integer" name="Price"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Passenger ID:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="PID"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-3">
                    <label>Passport Number:</label><br>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="Passportno"/><br>
                    </div>
                    </div><br>

                  <div class="row justify-content-center" >
                    <input class="btn btn-success"  name="submit" type="submit"  value="&nbsp; Submit &nbsp;" /><br>
                   </div>
  </div>
</form>
</div>
<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
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