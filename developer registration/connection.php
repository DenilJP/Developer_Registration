<?php
 error_reporting(0);
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="registration";

    $conn =mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
        if($conn)
        {
            //echo"Connection Success";
        }
        else{
            echo"Connection Failed".mysqli_connect_error();
        }
 ?>