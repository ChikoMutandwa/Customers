<?php
    require 'DBConnection.php';
    $sql_db = "CREATE DATABASE CustomerDB";
    if ($conn->query($sql_db) == TRUE) {
        echo "<p>Database created successfully";
    }
        mysqli_select_db($conn, "CustomerDB");
        $table_name = "Customer";
        $table_sql = "CREATE Table " . $table_name . "(customerName VARCHAR(25),
        telNo VARCHAR(25), email VARCHAR(30), location VARCHAR(25));";
        
        if ($conn-> query($table_sql) == TRUE) {
            echo "Table Created";
        }else{
            echo "Table Already Created";
        }
?>