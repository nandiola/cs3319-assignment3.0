<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>Q9: Revenue Calculator </title>
        </head>

        <body>
                <h1>Revenue Calculator</h1>

                <?php
                        include 'connector.php';

                        $product_id= $_POST["product_id"];

                        $query = 'SELECT cost, SUM(quantity_purchased) AS summation FROM purchase_views INNER JOIN products on purchase_views.descriptiontext=products.descriptiontext WHERE product_id='.$product_id;
                                
                        $result=mysqli_query($connection,$query);

                        if (!$result) {
                                die("database query purchase data failed.");
                        }

                        echo $row["cost"]." sum: ".$row["summation"];

                        mysqli_free_result($result);
                ?>

                <?php
                        mysqli_close($connection);
                ?>

        </body>
</html>