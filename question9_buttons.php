<?php

include 'connector.php';

$query = "SELECT * FROM products";

$result = mysqli_query($connection,$query);


if (!$result) {
    die("databases query failed.");
}


        while ($row = mysqli_fetch_assoc($result)) {
                echo '<input type="radio" name="customer_id" value="';
                echo $row["product_id"];
                echo '">' .$row["descriptiontext"].", " .$row["cost"]; 
                echo "<br>";
        }

mysqli_free_result($result);
?>