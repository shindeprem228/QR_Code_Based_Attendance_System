<?php
    $server   = "localhost";
    $username = "root";
    $password = "";
    $db       = "qrdb" ; 

    $conn = mysqli_connect($server , $username , $password , $db);

    if($conn)
    {
        // echo "Connection Successful !!";
    }
    else
    {
        die("NO Connection !!".mysqli_connect_error());
    }
?>