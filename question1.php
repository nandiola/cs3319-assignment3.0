<?php
$query = "SELECT * FROM customers JOIN (customer_purchases INNER JOIN customers ON customer_purchases.customer_id = customers.customer_id) INNER JOIN products ON customer_purchases.product_id = products.product_id;)";

$result = mysqli_query($connection,$query);


if (!$result) {
    die("databases query failed.");
}

echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["firstname"] .$row["lastname"]. "</li>";
    }
echo "</ol>";

mysqli_free_result($result);
?>