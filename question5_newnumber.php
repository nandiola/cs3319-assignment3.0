<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>Q5: Change phone number</title>
        </head>

        <body>
                <h1>Change phone number</h1>

                <?php
                        include 'connector.php';

                        $new_phone_number= $_POST["new_phone_number"];
                        $customer_id = $_POST["customer_id"];

                        $query = "UPDATE customers SET phone_number =".$new_phone_number." WHERE customer_id=".$customer_id;
                                
                        $result=mysqli_query($connection,$query);

                        if (!$result) {
                                die("update phone number query failed.");
                        }

                        
                ?>

                <?php
                        mysqli_close($connection);
                ?>

        </body>
</html>