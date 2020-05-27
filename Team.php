<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
html { 
    height: 100%;
    margin:0px;
    background: url(img.jpg) no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
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
</style>
</head>
<body >

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

<div style="margin-top:210px;padding:15px 15px ;font-size:30px">
  <font color="black"><h2><p><b>This page will give you Information About the Team members of This project:</b></h2></p></font>
  <p> 
   <font color="red"> <h3>Soukhya Mohan           1PE17CS149</h3></font>
    <img src="soukhya.jpeg" alt="xyz" style="width:300px;height:300px;">
    <hr size="10" noshade color="#C0C0C0" >
    
    <font color="red"><h3>Srujan K                1PE17CS154</h3></font>
      <img src="Srujan.jpeg" alt="xyz" style="width:270px;height:270px;">
      <hr size="10" noshade color="#C0C0C0" >
    <font color="red"><h3>Yash Anilkumar Kukreja  1PE17CS176</h3></font>
    <img src="Yash3.jpg" alt="xyz" style="width:350px;height:300px;">
    <hr size="10" noshade color="#C0C0C0" >



  </p>
 
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
