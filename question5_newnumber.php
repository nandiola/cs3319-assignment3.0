<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>Q5: Change phone number</title>
        </head>

        <body>
                <h1>Products Purchased</h1>

                <?php
                        include 'connector.php';

                        $new_phone_number= $_POST["[phone_number]"];

                        $query = "SELECT * FROM
                                customers WHERE customer_id=$customer_ID";
                                
                        $result=mysqli_query($connection,$query);

                        if (!$result) {
                                die("database query purchase data failed.");
                        }

                        
                ?>

                <?php
                        mysqli_close($connection);
                ?>

        </body>
</html>