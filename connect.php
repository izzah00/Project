<?php
$dbhost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "mini_project";

$conn = mysqli_connect($dbhost, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("Something went wrong");
}
?>