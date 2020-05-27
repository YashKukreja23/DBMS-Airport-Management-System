<?php

    include("connect.php");
    include("functions.php");

    if(logged_in())
    {
        header("location:HomePage.php");
    }
    else
    {
        header("location:login.php");
        exit();
    }

?>