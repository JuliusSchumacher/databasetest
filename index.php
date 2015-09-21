<?php

$con = mysqli_connect("mysql4.000webhost.com", "a9562517_admin", "admin123", "a9562517_items");

if(mysqli_connect_errno($con)) {
    echo "Connection to database failed: " . mysqli_connect_error;
}

$results = mysqli_query($con, "SELECT * FROM dipp");

?>

<?php
 while($row = mysqli_fetch_assoc($results)) {
        echo "id: " . $row["id"]. " name: " . $row["name"]. "<br>";
    }

?>