<?php
    if (isset($_POST['submit'])) {
        require_once 'DBConnection.php'; 
        echo "<p>";
        mysqli_select_db($conn, "CustomerDB");
        $sql = "INSERT INTO Customer (customerName, telNo, email, location)
                VALUES ('".$_POST["customerName"]."', '".$_POST["telNo"]."', '".$_POST["email"]."', '".$_POST["location"]."')";
        if ($conn->query($sql) == TRUE) {
            echo ($_POST["customerName"]."- record created <br>");
        }else{
            echo "Error!";
        }
        $query = mysqli_query($conn, "SELECT * FROM Customer");
        echo "<p>";
        echo '<table class = "table" bordered="1">';
        while ($row = $query->fetch_assoc()) {
            echo '</tr>';
            foreach ($row as $value) {
                echo '<td>$value</td>';
                echo '</tr>';
            }
        }
        echo '</table>';
    }else {
        echo "
            Customer Details Form <b> <p>
            <form action = 'CustomerForm.php' method = 'post'>
            Customer Name: <input type = 'text' name = 'customerName'><br>
            Telephone Number: <input type = 'text' name = 'telNo'><br>
            Email Address: <input type = 'text' name = 'email'><br>
            Location: <input type = 'text' name = 'location'><br>
            <input type = 'submit' name = 'submit'>
            </form>
            ";
    }

?>