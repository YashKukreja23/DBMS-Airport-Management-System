<?php

    include("connect.php");
    include("functions.php");

    $error = "";

    if(logged_in())
    {
        header("location:profile.php");
        exit();
    }

    if(isset($_POST['submit']))
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $emailID = $_POST['email'];
        $password = $_POST['password'];
        $confPassword = $_POST['confPassword'];
        //echo $firstname."<br>".$lastname."<br>".$emailID."<br >".$password."<br>".$confPassword."<br>".$image."<br>".$imageSize;
        
        if(strlen($firstname) < 3)
        {
            $error = "First name is too short";
        }
        else if(strlen($lastname) < 3)
        {
            $error = "Last name is too short";
        }
        else if(!filter_var($emailID,FILTER_SANITIZE_EMAIL))
        {
            $error = "Please enter valid email address";
        }
        else if(email_exists($emailID,$con))
        {
            $error = "Email already exists";
        }
        else if(strlen($password) < 8)
        {
            $error = "Password is too short and should be greater than 8 characters";
        }
        else if($password !== $confPassword)
        {
            $error = "Password not matching";
        }
        else
        {
            $password = md5($password);

            $insert_query="INSERT INTO users(firstName,lastName,email,password) VALUES('$firstname','$lastname','$emailID','$password')";

            if(mysqli_query($con,$insert_query))
            {
                $error =  "You are successfully registered";
            }
        }     
    }

?>

<!DOCTYPE html>
<html>
    <head>
            <title>
                Registration Page
            </title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
            
            <style media="screen">
            body{
              
              margin-left: 185px;
              margin-right:955px;
              margin-top: 40px;
              background-image: url("elsetgecat_airport-wallpaper_399556.jpg");
              background-size: cover;
            }
            form{
              text-align: center;
              border-style: solid;
              border-color: red;
              border-radius: 10px;
              padding:1px;
              background-color: white;
            }
            h2{
              color: darkblue;
            }
            </style>
    </head>

    <body> <font color="red">
        <div id="error">
            <?php 
                echo $error;
            ?>
        </div>    
        </font>
        
        <br><br>
        
        <div id="wrapper">
            <div id="form">
                <form method="POST" action="index.php" enctype="multipart/form-data">
                    <h2>Sign Up</h2>
                    <label>First Name&emsp;&emsp;&emsp;</label>
                    <input type="text" name="fname"/><br><br>

                    <label>Last Name&emsp;&emsp;&emsp;</label>
                    <input type="text" name="lname"/><br><br>

                    <label>Email Id &emsp;&emsp;&emsp;&emsp;</label>                  
                    <input type="text" name="email"/><br><br>

                    <label>Password&ensp;&emsp;&emsp;&emsp;</label>
                    <input type="password" name="password"/><br><br>

                    <label>Confirm Password</label>
                    <input type="password" name="confPassword"/><br><br>

                    <input type="submit" name="submit" class="btn btn-success" value="SignUp"/><br>

                    <p>Already a member? <a href="login.php">Login</a></p>
                </form> 
            </div>
            
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>