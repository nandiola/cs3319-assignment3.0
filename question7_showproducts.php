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

                        $query = "SELECT * FROM (customer_purchases INNER JOIN customers ON customers.customer_id=customer_purchases.customer) INNER JOIN products ON customer_purchases.product_id=products.product_id WHERE customer_purchases.quanity_on_hand > $quantity_entered";
                                
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