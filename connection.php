<?php

error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecms"; // datbase ka name

    $conn = mysqli_connect($servername,$username,$password, $dbname);

    if($conn)
    {
        //echo "connection ok";
    }
    else{
        echo "Connection failed".mysqli_connect_error();
    }

?>
