<?php

    include("connect.php");
    include("functions.php");

    if(logged_in())
    {
        header("location:profile.php");
        exit();
    }

    $error = "";

    if(isset($_POST['submit']))
    {
        $emailID = $_POST['email'];
        $password = $_POST['password'];
        $checkBox = isset($_POST['keep']);
        
        if(email_exists($emailID,$con))
        {
            //$error = "Email exists";
            $result = mysqli_query($con,"SELECT password FROM users WHERE email='$emailID'");
            $retPassword = mysqli_fetch_assoc($result);

            if(md5($password) !== $retPassword['password'])
            {
                $error = "Password is incorrect";
            }
            else
            {
                $_SESSION['email'] = $emailID;

                if($checkBox == "on")
                {
                    setcookie("email",$emailID,time()+3600);
                }

                header("location: profile.php");
            }
        }
        else
        {
            $error = "Email does not exists";
        }
    }
?>

<!DOCTYPE html>
<html>
<style>
    .topnav {
  background-color: #333;
  overflow: hidden;}

    body{

        background: url("login bg.jpg") no-repeat;
        background-size: 100%;
          
    }

   form{
      text-align: center;
      border-style: solid;
      border-color: red;
      border-radius: 10px;
      padding:5px;
      background-color: white;
    }

    h2{
          color: darkblue;
    }


/* Style the links inside the navigation bar */
.topnav a {
    float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 17px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
    <head>
            <title>
                Log In Page
            </title>
            <link rel="stylesheet" href="css/styles.css"/>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    </head>

    <body>
      <div class="topnav">
        <a class="active"><B>Airport Management DataBase</B></a>
        </div>
        <div id="error">
            <?php 
                echo $error;
            ?>
        </div>    

        <div id="wrapper" style="margin-left: 985px;margin-right:125px;margin-top:170px;">
            <div id="form">
                <form method="POST" action="login.php" enctype="multipart/form-data">
                    <h2>Log In</h2><br>
                    <label>Email Id&ensp;</label>                 
                    <input type="text" name="email"/><br><br>

                    <label>Password</label>
                    <input type="password" name="password"/><br><br>

                    <!-- <input type="checkbox" name="keep"/>
                    <label>Keep me logged in</label><br> --->
                    
                    <input type="submit"  class="btn btn-success" name="submit" value="Login"/><br><br>
                      <div id="menu">
                      <label>Don't have an account? </label>
                <a href="index.php">Sign Up</a>
            </div>

                </form>
            </div>

        </div>

        <br>
        <br>

        <div class="container ">
            <div class="row justify-content-between">
                <div class="offset-lg-4 col-lg-4 align-self-center">
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>