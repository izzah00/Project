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
        
    button{
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
    <br><br><li><a href="/">Home</a></li><br>
    <li><a href="acc">Account Profile</a></li><br>
    <li><a href="DashboardUser.php">Dashboard</a></li><br>
    <li><a class="active" href="complaint">Complaint</a></li><br>
    <li><a href="try4.php">Report</a></li><br>
    <li><a href="logout.php">Logout</a></li>
</ul>  
<div class="container">
    <form class="UserComplaint" method="POST" action="mini_project.php">
    <h2>Complaint</h2>
    <table id="complaint" style="width:100%">
<tr>
    <th>Month       </th>
    <th>Complaint ID</th>
    <th>Type of Complaint</th>
    <th id="Complaint_Status">Status</th>
</tr>
<tr>
    <td scope="row" rowspan="2">July</td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td scope="row" rowspan="2">August</td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>
</table>

<br><br><br>
<button type="report"><a href = "http://localhost/webs/webs/try4.php">Generate Report</a></button>
</div>

</form>