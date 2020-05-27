<!DOCTYPE html>
<html>
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
  
}

#navbar {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 80px 10px;
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
<title>Airport Management</title>
<body background="bg45.png" >
<font color="black">
<div id="navbar">
  <img src="AeroLogo.png" height="60 " windth="15">
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

<div style="margin-top:210px;padding:15px 15px ;font-size:30px">
<div >
          <p>Airport management system is a database project implemented in SQL, primarily deals with the management of the airport, airlines, passengers and employees working for an airport. The system provides a broad overview of underlying operational factors that influence the airport management.</p>
          <br>
          <u><h2>Normailized Database:</h2></u>
          <p>As we will be dealing with very complex queries,it is important to have a efficiant and smooth database for the user to use.This data will be help the user perform the neccesary queries.</p>
        </div><br>
         <div>
          <u><h2>Queries:</h2></u>
          <p>It contains various queries to our existing database.</p>
        </div><br>
            <div>
            <u><h2>Real Time Data:</h2></u>
          <p>Data considered for this project is very detailed and is taken from a real time data set.</p>
        </div><br>

        <div>
            <u><h2>Triggers:</h2></u>
          <p>Triggers in SQL Server are used to execute after, or before an INSERT, DELETE, or an UPDATE operation on a table. You can use these SQL triggers on Views, or Tables to perform any of the above-specified operations. Remember, you can associate a trigger to a single table only.</p>
        </div>
</div>
</div>
</font>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>