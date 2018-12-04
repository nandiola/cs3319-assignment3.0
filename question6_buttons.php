<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>Q5: Delete user</title>
        </head>

        <body>
                <h1>Delete user</h1>

                <?php
                        include 'connector.php';

                        $query = "SELECT * FROM customers";
                                
                        $result=mysqli_query($connection,$query);

                        if (!$result) {
                                die("database query user data failed.");
                        }

                        while ($row=mysqli_fetch_assoc($result)) {
                                echo '<input type="radio" name="customer_id" value="';
                                echo $row["customer_id"];
                                echo '">' .$row["firstname"] ." " .$row["lastname"] .", " .$row["city_located"] .", " .$row["phone_number"]; 
                                echo "<br>";
                        }

                        mysqli_free_result($result);
                ?>

                <?php
                        mysqli_close($connection);
                ?>

        </body>
</html>