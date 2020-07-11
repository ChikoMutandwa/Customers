<?php
    //echo "Welcome " . $_POST["username"] . "<br> <p>

    require_once 'DBConnect.php';
    mysqli_select_db($conn, "CustomerDB");

    $query = mysqli_query($conn, "SELECT * FROM Userregistration WHERE username = 'nothabo'");
    /*
        while($row = $query->fetch_assoc()){
            foreach($row as $value) echo "<td>$value</td>";
        }
    */

    echo "
        <form method='post' action='CustomerForm.php'>
            <input type='submit' value='Enter Customer Details' />
        </form>
    ";
?>