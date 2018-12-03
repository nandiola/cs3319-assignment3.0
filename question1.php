<?php
$query = "SELECT * FROM (customer_purchases INNER JOIN customers ON customer_purchases.customer_id = customers.customer_id) INNER JOIN products ON customer_purchases.product_id = products.product_id";

$result = mysqli_query($connection,$query);


if (!$result) {
    die("databases query failed.");
}


        while ($row = mysqli_fetch_assoc($result)) {
                echo '<input type="radio" name="customer_id" value="';
                echo $row["customer_id"];
                echo '">' .$row["firstname"] ." " .$row["lastname"] .", " .$row["city_located"] .", " .$row["phone_number"]; 
                echo "<br>";
        }

mysqli_free_result($result);
?>