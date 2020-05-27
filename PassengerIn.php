<?php

include("connect.php");

if (isset($_POST['submit'])) {
  $PID = $_POST['PID'];
  $PassportNo = $_POST['PassportNo'];
  $FName = $_POST['FName'];
  $M = $_POST['M'];

  $LName = $_POST['LName'];
  $Address = $_POST['Address'];
  $Phone = $_POST['Phone'];

  $Age = $_POST['Age'];
  $Gender = $_POST['Gender'];
  $Flight_Code = $_POST['Flight_Code'];
  //$price = $_POST['price'];

if ($PID && $PassportNo && $FName && $M && $LName && $Address && $Phone && $Age && $Gender && $Flight_Code){
            $sql1="INSERT INTO PASSENGER1(PID,PASSPORTNO) VALUES($PID,'$PassportNo');";
  if (mysqli_query($con, $sql1)) {

  echo " ";
  }
  else
  {
    echo " ";
  }
}


if ($PID && $PassportNo && $FName && $M && $LName && $Address && $Phone && $Age && $Gender && $Flight_Code){
            $sql2="INSERT INTO PASSENGER2(PASSPORTNO,FNAME,M,LNAME,ADDRESS,PHONE,AGE,SEX) VALUES('$PassportNo','$FName','$M','$LName','$Address',$Phone,$Age,'$Gender');";
  if (mysqli_query($con, $sql2)) {

  echo " ";
  }
  else
  { 
    echo " ";
  }
}

if ($PID && $PassportNo && $FName && $M && $LName && $Address && $Phone && $Age && $Gender && $Flight_Code){
            $sql3="INSERT INTO PASSENGER3(PID,Flight_Code) VALUES($PID,'$Flight_Code');";
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
<title>Add Passengers </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial=scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  background-size: 100%;
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
<body background="17356.jpg">

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

<div style="margin-top:145px;padding:15px 15px;font-size:30px">
<p> <h2>Enter the Following Passenger Details: </h2></p>

<form action="PassengerIn.php" method="post">


  <div class="container">

    <div class="row">
        <div class="col-md-2">
          <label>PID:</label><br>
        </div>
        <div class="col-md-10">
          <input type="integer" name="PID"/><br>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-2">
          <label>PassportNo:</label><br>
        </div>
        <div class="col-md-10">
          <input type="text" name="PassportNo"/><br>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-2">
          <label>FName:</label><br>
        </div>
        <div class="col-md-10">
          <input type="text" name="FName"/><br>
        </div>
    </div><br>
    
    <div class="row">
        <div class="col-md-2">
          <label>M:</label><br>
        </div>
        <div class="col-md-10">
          <input type="text" name="M"/><br>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-2">
          <label>LName:</label><br>
        </div>
        <div class="col-md-10">
          <input type="text" name="LName"/><br>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-2">
          <label>Address:</label><br>
        </div>
        <div class="col-md-10">
          <input type="text" name="Address"/><br>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-2">
          <label>Phone:</label><br>
        </div>
        <div class="col-md-10">
          <input type="integer" name="Phone"/><br>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-2">
          <label>Age:</label><br>
        </div>
        <div class="col-md-10">
          <input type="integer" name="Age"/><br>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-2">
          <label>Gender:</label><br>
        </div>
        <div class="col-md-10">
          <input type="text" name="Gender"/><br>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-2">
          <label>Flight_Code:</label><br>
        </div>
        <div class="col-md-10">
          <input type="text" name="Flight_Code"/><br>
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
