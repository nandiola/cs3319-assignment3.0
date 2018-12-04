
<?php


$query = "SELECT * FROM customers ";

$result = mysqli_query($connection,$query);


if (!$result) {
    die("databases query failed.");
}


        while ($row = mysqli_fetch_assoc($result)) {
                echo '<input type="radio" name="phone_number" value="';
                echo $row["phone_number"];
                echo '">' .$row["firstname"] ." " .$row["lastname"] .", " .$row["city_located"] .", " .$row["phone_number"]; 
                echo '<input type="hidden" name="customer_id" value="'.$row["customer_id"]'">';
                echo "<br>";
        }

mysqli_free_result($result);
?>