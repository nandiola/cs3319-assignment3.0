<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>Q4: Enter new Customer</title>
        </head>

        <body>
                <h1>Products Purchased</h1>

                <?php
                        include 'connector.php';

                        $customer_id= $_POST["customer_id"];
                        $agent_id= $_POST["agent_id"];
                        $firstname= $_POST["firstname"];
                        $lastname= $_POST["lastname"];
                        $city_located= $_POST["city_located"];
                        $phone_number= $_POST["phone_number"];

                        $get_query = "SELECT * FROM customers WHERE agent_id=$agent_id AND firstname=$firstname AND lastname=$lastname AND city_located=$city_located AND phone_number=$phone_number";
                        
                        $get_result=mysqli_query($connection,$get_query);
                        
                        
                        if($get_result == FALSE){
                            echo "entry didnt exist before; added new entry<br>";
                            $insert_query = "INSERT INTO customers VALUES('".$customer_ID."','". $agent_id."', '".$firstname."','". $lastname."', '".$city_located."', '".$phone_number."')";

                            $insert_result=mysqli_query($connection,$insert_query);

                            if (!$insert_result) {
                                    die("customer purchase insert query failed.<br>");
                            }
                        } else {
                            echo "entry existed before; NO ENTRY made.<br>";
                        }

                        mysqli_free_result($get_result);
                ?>

                <?php
                        mysqli_close($connection);
                ?>

        </body>
</html>