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

                        $customer_id= $_POST["customer_id"];

                        $query = "SELECT * FROM customers WHERE customer_id=$customer_ID";
                                
                        $result=mysqli_query($connection,$query);

                        if (!$result) {
                                die("database query purchase data failed.");
                        }

                        while ($row=mysqli_fetch_assoc($result)) {
                                echo "Current phone number: ";
                                echo $row["phone_number"];
                        }

                        
                        echo '<form action = "question5_newnumber.php" method = "post">';
                        echo  'New phone number:   <input type="text" name="phone_number"><br>';
                        echo '<input type="hidden" name="customer_id" value="$customer_id">';
                        echo '<input type = "submit" value= "Enter new number"/>';
                        echo '</form>';

                        mysqli_free_result($result);
                ?>

                <?php
                        mysqli_close($connection);
                ?>

        </body>
</html>
