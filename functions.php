<?php

    function email_exists($email, $con)
    {
        $result = mysqli_query($con,"SELECT id FROM users WHERE email='$email'");
        if(mysqli_num_rows($result))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function logged_in()
    {
        if(isset($_SESSION['email']) || isset($_COOKIE['email']))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

?>