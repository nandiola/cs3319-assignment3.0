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
                        $customer_id = $_POST["[customer_id]"];

                        $query = "UPDATE customers SET phone_number = $new_phone_number WHERE customer_id=$customer_id";
                                
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