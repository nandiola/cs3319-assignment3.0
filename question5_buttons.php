
<?php


$query = "SELECT * FROM customers ";

$result = mysqli_query($connection,$query);


if (!$result) {
    die("databases query failed.");
}


        while ($row = mysqli_fetch_assoc($result)) {
                echo '<input type="radio" name="customer_id" value="';
                echo $row["customer_id"];
                echo '"><br>' .$row["firstname"] ." " .$row["lastname"] .", " .$row["city_located"] .", " .$row["phone_number"]; 

        }

mysqli_free_result($result);
?>