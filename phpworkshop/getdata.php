<?php
$query = "SELECT * FROM pet JOIN owner ON pet.ownerid=owner.ownerid";

$result = mysqli_query($connection,$query);


if (!$result) {
    die("databases query failed.");
}

echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["ownerid"] ."--".$row["petname"].$row[fname] "</li>";
    }
echo "</ol>";

mysqli_free_result($result);
?>