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

                        $get_query = "SELECT * FROM customer_purchases WHERE customer_purchases.customer_id=$customer_ID, AND customer_purchases.product_id=$product_ID AND customer_purchases.quantity_purchased=$quantity";
                        
                        $get_result=mysqli_query($connection,$get_query);
                        

                        if(!$insert_result){
                            $insert_query = "INSERT INTO customer_purchases VALUES($customer_ID, $product_ID, $quantity)";

                            $insert_result=mysqli_query($connection,$insert_query);

                            if (!$insert_result) {
                                    die("customer purchase insert query failed.");
                            }
                        }

                        $row=mysqli_fetch_assoc($get_result);
                        $previous_quantity = $row["quantity_purchased"];

                        if($previous_quantity<$quantity){
                            $update_query = "UPDATE customer_purchases SET quantity_purchased = $quantity WHERE customer_id=$customer_ID AND product_id=$product_ID";

                            $update_result=mysqli_query($connection,$update_query);

                            if (!$update_result) {
                                    die("customer purchase update query failed.");
                            }
                        }

                ?>

                <?php
                        mysqli_close($connection);
                ?>

        </body>
</html>