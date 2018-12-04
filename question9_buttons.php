<?php

include 'connector.php';

$query = "SELECT * FROM products";

$result = mysqli_query($connection,$query);


if (!$result) {
    die("databases query failed.");
}


        while ($row = mysqli_fetch_assoc($result)) {
                echo '<input type="radio" name="product_id" value="';
                echo "ID: ".$row["product_id"].", ".$row["descriptiontext"].", " .$row["cost"]; 
                echo "<br>";
        }

mysqli_free_result($result);
?>