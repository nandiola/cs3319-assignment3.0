<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>Q1: Products Purchased</title>
        </head>

        <body>
                <h1>Products Purchased</h1>

                <?php
                        include 'connector.php';
                        $choice= $_POST["user_choice"];



                        if($choice == "Price ASC"){
                            $query = "SELECT * FROM products ORDER BY cost ASC";
                            $result=mysqli_query($connection,$query);
                            if (!$result) {
                                die("database query price ascending failed.");
                            }
                        }

                        if($choice == "Price DSC"){
                            $query = "SELECT * FROM products ORDER BY cost DESC";
                            $result=mysqli_query($connection,$query);
                            if (!$result) {
                                die("database query price descending failed.");
                            }
                        }

                        if($choice == "Description ASC"){
                            $query = "SELECT * FROM products ORDER BY descriptiontext ASC";
                            $result=mysqli_query($connection,$query);
                            if (!$result) {
                                die("database query description ascending failed.");
                            }
                        }

                        if($choice == "Description DSC"){
                            $query = "SELECT * FROM products ORDER BY descriptiontext DESC";
                            $result=mysqli_query($connection,$query);
                            if (!$result) {
                                die("database query description descending failed.");
                            }
                        }

                        while ($row=mysqli_fetch_assoc($result)) {
                            echo '<li>';
                            echo $row["descriptiontext"].": ".$row["cost"];
                            echo '</li>';
                        }

                        mysqli_free_result($result);
                ?>

                <?php
                        mysqli_close($connection);
                ?>

        </body>
</html>