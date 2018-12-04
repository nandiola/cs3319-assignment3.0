<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>Q6: Delete user</title>
        </head>

        <body>
                <h1>Delete User</h1>

                <?php
                        include 'connector.php';

                        $customer_ID= $_POST["customer_id"];

                        $query = "DELETE FROM customers WHERE customer_id=$customer_ID";
                                
                        $result=mysqli_query($connection,$query);

                        mysqli_free_result($result);
                ?>

                <?php
                        mysqli_close($connection);
                ?>

        </body>
</html>