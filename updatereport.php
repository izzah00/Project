<!--Update the data-->
<?php
//Connect to the database server.
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "mini_project") or die(mysqli_error($link));

$idURL = $_GET['id'];

//SQL query
$query = "SELECT * FROM report WHERE report_id = '$idURL'"
	or die(mysqli_connect_error());
	
//Execute the query (the recordset $rs contains the result)
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

$rStatus = $row["report_status"];

?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  text-align: center;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=reset] {
  width: 100%;
  background-color: #F24C3D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
input[type=reset]:hover {
  background-color: #B70404;
}
.col-25 {
  float: center;
  width: 45%;
  margin-top: 5%;
}
</style>
<header>
        <img src="/banner.png" style= "width:100%; height: 10%"  >
        </header>
<body>
<center>
<div class="col-25">
    <h1>Update Report Status</h1>
    <p><ul>
    <li> <strong> Submitted</strong>: Report is Submitted</li>
        <li> <strong> In Investigation</strong>: Report is viewed</li>
        <li> <strong> On Hold</strong>: Report is in waiting line to be solved</li>
        <li> <strong> Solved</strong>: Report is solved</li>

    </ul><br><br>

      
<form method="post" action="updatereportconn.php">
    <br>
<h3> Report Status value to:</h3>
<!-- <input type ="text" name="rs" size="40" value="<?php echo $rStatus; ?>"> -->
<select name="rs">
<option value="Submitted">Current status: <?php echo $rStatus; ?></option>
    <option value="Submitted">Submitted</option>
    <option value="In Investigation">In investigation</option>
    <option value="On Hold">On Hold</option>
    <option value="Resolved">Resolved</option>
  </select>
<br>
<input type ="hidden" name="id2" value="<?php echo $idURL; ?>">
<input type ="submit" value="Update">
<input type ="reset" onclick="location.href='reportlist.php'" value="Cancel">
<br>
</form>
</div>
    </center>

