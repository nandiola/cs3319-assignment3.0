
<?php


$query = "SELECT * FROM customers ";

$result = mysqli_query($connection,$query);


if (!$result) {
    die("databases query failed.");
}


        while ($row = mysqli_fetch_assoc($result)) {
                echo '<input type="radio" name="phone_number" value="';
                echo $row["customer_id"];
                echo '">' .$row["firstname"] ." " .$row["lastname"] .", " .$row["city_located"] .", " .$row["phone_number"]; 
                echo '<input type="hidden" name="random" value="12';
                echo '"><br>';
        }

mysqli_free_result($result);
?>