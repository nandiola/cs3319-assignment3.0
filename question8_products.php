<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>Q8: Products Never Purchased</title>
        </head>

        <body>
                <h1>Products Never Purchased</h1>

                <?php
                        include 'connector.php';

                        $query = "SELECT descriptiontext FROM products WHERE products.product_id NOT IN (SELECT distinct product_id FROM customer_purchases)";
                                
                        $result=mysqli_query($connection,$query);

                        if (!$result) {
                                die("database query purchase data failed.");
                        }

                        while ($row=mysqli_fetch_assoc($result)) {
                                echo '<ol>';
                                echo $row["descriptiontext"];
                                echo '</ol>';
                        }

                        mysqli_free_result($result);
                ?>

                <?php
                        mysqli_close($connection);
                ?>

        </body>
</html>