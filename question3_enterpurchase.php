<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>Q3: Add purchase</title>
        </head>

        <body>
                <h1>Add purchase</h1>

                <?php
                        include 'connector.php';

                        $customer_ID= $_POST["customer_id"];
                        $quantity= $_POST["quantity"];
                        $product_ID= $_POST["product_id"];

                        $query = "INSERT INTO customer_purchases VALUES($customer_ID, $product_ID, $quantity)";

                        $result=mysqli_query($connection,$query);

                        if (!$result) {
                                die("customer purchase insert query failed.");
                        }

                ?>

                <?php
                        mysqli_close($connection);
                ?>

        </body>
</html>