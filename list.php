<?php
  //Connect to the database server.
  $link = mysqli_connect("localhost", "root", "", "mini_project", "3306") or die(mysqli_connect_error());

  //Select the database.
  mysqli_select_db($link, "mini_project") or die(mysqli_error($link));
?>	

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Create complaint</title>
</head>

<style>
    body{
        background-color:white;
    }
        
    .container {
        border-radius: 15px;
        background-color: #f2f2f2;
        padding: 50px;
        box-shadow: 5px 5px grey;
        position:absolute;
        top:0px;
        right:500px;
        left:280px;
        width:960px;
        height:450px;
    }
        
    input[type="text"], textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
    }

    textarea {
        height: 150px;
    }
        
    .button1{
        background-color: #2cd4d4;
        padding: 3px 12px;
        text-align: center;
        font-size: 15px;
    }


    .logo{
        object-fit:cover;
        position: absolute;
        top: 0px;
        right: 0px;
        left:0px;
    }

    .sidebar{
        background-color: turquoise; 
        position: absolute;
        bottom: -100px;
        width: 20%;
        height: 80%;
        font-size: 18px;
    }
        
    ul{
        list-style-type:none;
        padding: 30;
    }
        
    a:hover{
        background-color: white;
        color: black;
    }

    .active {
        background-color: #008080;
    }

    .navbar li a{
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration:none;
    
    }
    table, th, td {
        border: 5px solid;
        border-collapse: collapse;
        border-color: #96D4D4;
        height: 50px;
        text-align: center;
    }
</style>

<head>
<div class="logo"><img src="assets/banner.png" style= "width:100%; height: 10%"  ></div>
</head>

<div class=sidebar>
<ul class="navbar">
    <br><br><li><a href="DashboardUser.php">Home</a></li><br>
    <li><a href="acc">Account Profile</a></li><br>
    <li><a class="active" href="complaint">Complaint</a></li><br>
    <li><a href="report">Report</a></li><br>
    <li><a href="logout">Logout</a></li>
</ul>  
<div class="container">
    <form class="UserComplaint" method="POST" action="mini_project=.php">
    <h2>Complaint</h2>
    <?php 
    $query = "SELECT * FROM complaint"
    or die(mysqli_connect_error());
    //execute
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) > 0)
    {

        while($row = mysqli_fetch_assoc($result))
        {
            $complaint_id = $row["complaint_id"];
            $complaint_date = $row["complaint_date"];
            $complaint_time = $row["complaint_time"];
            $complaint_type = $row["complaint_type"];
            $complaint_description = $row["complaint_description"];
            ?>
            

            <table style="width:100%">
            <tr>
                <th>Type of Complaint</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th scope="col" colspan="2">Action</th>

            </tr>
            <tr>
                <td><?php echo $complaint_type; ?></td>
                <td><?php echo $complaint_date; ?></td>
                <td><?php echo $complaint_time; ?></td>
                <td><a href="list.php"><button>Update</button></td>
                <td><button>Delete</button></td>
            </tr>
            </table>
            <?php
        }
    }
    else 
    {
        echo "0 results";
    }

?>

<br><br><br>
<button type="report"><a href = "http://localhost/webs/webs/try4.php">Generate Report</a></button>
</div>

</form>