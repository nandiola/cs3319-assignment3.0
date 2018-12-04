<?php

$query1 = "SELECT * FROM customers";
$query2 = "SELECT * FROM products";


$customer_result = mysqli_query($connection,$query1);
$product_result = mysqli_query($connection,$query2);


if (!$customer_result) {
    die("customer query failed.");
}
if (!$product_result) {
    die("product query failed.");
}


        while ($row = mysqli_fetch_assoc($customer_result)) {
                echo '<input type="radio" name="customer_id" value="';
                echo $row["customer_id"];
                echo '">' .$row["firstname"] ." " .$row["lastname"]; 
                echo "<br>";
        }

        while ($row = mysqli_fetch_assoc($product_result)) {
            echo '<input type="radio" name="customer_id" value="';
            echo $row["product_id"];
            echo '">' .$row["descriptiontext"] ." " .$row["cost"]; 
            echo "<br>";
    }


        mysqli_free_result($customer_result);
        mysqli_free_result($product_result);
?>