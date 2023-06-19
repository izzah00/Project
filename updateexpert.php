<!-- <!DOCTYPE html>
<html>
<body>
<input type ="button" onclick="location.href='expertprofile.php'" value="expert profile Page">
</body>
</html>
<!--Update the data-->

<?php
//Connect to the database server.
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "mini_project") or die(mysqli_error($link));
    // $expertid = $_POST["expert_id"];
    // $expertarea = $_POST["expert_area_id"];
    $expertresearch = $_POST["expertresearcharea"];
    // $expertpublications= $_POST["expert_publications"];
    $expertemail = $_POST["expertemail"];
    $expertname = $_POST["expertname"];
    // $expertcv = $_POST["expert_cv"];
    // $expertcategory= $_POST["expert_category"];
	$pid2 = $_POST["id2"];

$query = "UPDATE expert SET expert_name = '$expertname' WHERE report_id = '$pid2'";

$result = mysqli_query($link,$query) or die ("Could not execute query in expertprofile.php");

if($result){
 echo "<script type = 'text/javascript'> window.location='expertprofile.php' </script>";
}
?> -->
