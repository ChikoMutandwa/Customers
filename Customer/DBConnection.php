<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    //Create connection
    $conn = mysqli_connect($servername, $username, $password);
    //Ceck connection 
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connection successfully \n";
?>