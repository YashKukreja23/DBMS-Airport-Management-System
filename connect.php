<?php

    $con = mysqli_connect("localhost","root","","airport");

    if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with databases".mysqli_connect_errno();
    }

    session_start();

?>