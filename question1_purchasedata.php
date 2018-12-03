<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>Q1: Products Purchased</title>
        </head>

        <body>
                <h1>Products Purchased</h1>

                <?php
                        include 'connectdb.php';

                        $customerID= $_POST["customerid"];

                        $query = "SELECT * FROM
                                (purchases INNER JOIN customers ON purchases.customerid = customers.customerid)
                                INNER JOIN products ON products.productid = purchases.productid
                                WHERE customers.customerid = '$customerID'";

                        $result=mysqli_query($connection,$query);

                        if (!$result) {
                                die("database query2 failed.");
                        }

                        while ($row=mysqli_fetch_assoc($result)) {
                                echo '<li>';
                                echo $row["description"];
                                echo '</li>';
                        }

                        mysqli_free_result($result);
                ?>

                <?php
                        mysqli_close($connection);
                ?>

        </body>
</html>