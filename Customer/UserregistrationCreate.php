<?php
    require_once 'DBConnection.php';
        mysqli_select_db($conn, "CustomerDB");
        $table_name = "UserRegistration";
        $table_sql = "CREATE Table " . $table_name . "(username VARCHAR(25), 
                        password VARCHAR(25), email VARCHAR(30))";
        if ($conn->query($table_sql) == TRUE) {
            echo "UserRegistration table Created";
        } else {
            echo "Error user registration table";
        }
        
?>