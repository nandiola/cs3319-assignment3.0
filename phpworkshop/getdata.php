<?php
$query = "SELECT * FROM pet";
$query2 = "SELECT * FROM owner";
$result = mysqli_query($connection,$query);
$result2 = mysqli_query($connection,$query2);

if (!$result) {
    die("databases query failed.");
}

echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    $owner =  mysqli_fetch_assoc($result2);
    echo "<li>";
    echo $row["ownerid"] ."--".$row["petname"].$owner["ownerid"]. "</li>";
    }
mysqli_free_result($result);
echo "</ol>";
?>