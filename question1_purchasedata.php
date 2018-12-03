<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>Q1: Products Purchased</title>
        </head>

        <body>
                <h1>Products Purchased</h1>

                <?php
                        include 'connector.php';

                        $customer_ID= $_POST["customer_id"];

                        $query = "SELECT * FROM
                                (purchases INNER JOIN customers ON customer_purchases.customer_id = customers.customer_id)
                                INNER JOIN products ON products.product_id = customer_purchases.product_id
                                WHERE customers.customer_id = '$customer_ID'";

                        $result=mysqli_query($connection,$query);

                        if (!$result) {
                                die("database query purchase data failed.");
                        }

                        while ($row=mysqli_fetch_assoc($result)) {
                                echo '<li>';
                                echo $row["descriptiontext"];
                                echo '</li>';
                        }

                        mysqli_free_result($result);
                ?>

                <?php
                        mysqli_close($connection);
                ?>

        </body>
</html>