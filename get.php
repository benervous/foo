<?php
include "connect.php";
$query = "SELECT * FROM `logins`";
$result = mysqli_query($connection, $query);
if (!$result) {
    die('Query failed'.mysqli_error());
}
while ($row = mysqli_fetch_assoc($result)) {
    echo"<pre>";
    print_r($row);
    echo"</pre>";
}
?>
