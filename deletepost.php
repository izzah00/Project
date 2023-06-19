<?php
// Connect to the database server.
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

// Select the database.
mysqli_select_db($link, "mini_project") or die(mysqli_error($link));

if (isset($_GET['Del'])) {
    $discussid = $_GET['Del'];
    $strSQL = "DELETE FROM discussion WHERE id = '".$discussid."'";

    // Execute the query
    $rs = mysqli_query($link, $strSQL);

    if ($rs) {
        header("location: Notifications.php");
        exit(); // Add this line to prevent further execution
    } else {
        echo 'Please check your query';
    }
}
?>