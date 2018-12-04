<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>Q7: Products Purchased</title>
        </head>

        <body>
                <h1>Products Purchased</h1>

                <?php
                        include 'connector.php';

                        $quantity_entered= $_POST["quantity_entered"];

                        $query = "SELECT * FROM customer_purchases WHERE quantity_purchased>".$quantity_entered;
                                
                        $result=mysqli_query($connection,$query);

                        if (!$result) {
                                die("database query purchase data failed.");
                        }

                        while ($row=mysqli_fetch_assoc($result)) {
                                echo '<ol>';
                                echo $row["customer_id"].", ".$row["quantity_purchased"].", ".$row["descriptiontext"].": ".$row["cost"];
                                echo '</ol>';
                        }

                        mysqli_free_result($result);
                ?>

                <?php
                        mysqli_close($connection);
                ?>

        </body>
</html>