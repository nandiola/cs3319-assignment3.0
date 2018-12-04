<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>Q5: Delete user</title>
        </head>

        <body>
                <h1>Delete user</h1>

                <?php
                        include 'connector.php';

                        $query = "SELECT * FROM customers";
                                
                        $result=mysqli_query($connection,$query);

                        if (!$result) {
                                die("database query purchase data failed.");
                        }

                        while ($row=mysqli_fetch_assoc($result)) {
                                echo '<li>';
                                echo $row["descriptiontext"];
                                echo '</li>';
                        }

                        mysqli_free_result($result);
                ?>

                <?php
                        mysqli_close($connection);
                ?>

        </body>
</html>