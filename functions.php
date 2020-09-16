<?php
include "connect.php";

function showId($table)
{
    global $connection;
    $query = "SELECT * FROM `$table`";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query failed'.mysqli_error());
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $description = $row['Description'];
        $till = $row['Till'];
        echo "<li value='$id'>Description: $description and Till $till</li>";
    }
}
function Create(){
   if (isset($_POST['submit'])) {
       global $connection;
       $username = mysqli_real_escape_string($connection, $_POST['Username']);
       $password = mysqli_real_escape_string($connection, $_POST['Password']);
       $query = "INSERT INTO `logins`
       (`id`, `name`, `password`)
       VALUES (NULL, '$username','$password')";
       $result = mysqli_query($connection, $query);
       if (!$result) {
           die('Query failed'.mysqli_error());
       }
       else{
         echo "User was succesfully created";
       }
   }
}
function Update()
{
    global $connection;
    if (isset($_POST['submit'])) {
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $id = $_POST['id'];
        $query = "UPDATE `logins` SET
    `name` = '$username',
    `password` = '$password'
    WHERE `logins`.`id` = $id";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die(mysqli_error($connection));
        }
        else{
          echo "User was succesfully updated";
        }
    }
}

function Delete()
{
    global $connection;
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $query = "DELETE FROM `logins` WHERE `logins`.`id` = $id";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die(mysqli_error($connection));
        }
        else{
          echo "User was succesfully deleted";
        }
    }
}
