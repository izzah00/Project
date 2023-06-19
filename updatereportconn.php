<!DOCTYPE html>
<html>
<body>
<input type ="button" onclick="location.href='reportlist.php'" value="Report List Page">
</body>
</html>
<!--Update the data-->
<?php
//Connect to the database server.
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "mini_project") or die(mysqli_error($link));

    $rStatus = $_POST["rs"];
	$pid2 = $_POST["id2"];

$query = "UPDATE report SET report_status = '$rStatus' WHERE report_id = '$pid2'";

$result = mysqli_query($link,$query) or die ("Could not execute query in reportlist.php");

if($result){
 echo "<script type = 'text/javascript'> window.location='reportlist.php' </script>";
}
?>
