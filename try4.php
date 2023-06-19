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
<div class="logo"><img src="assets/banner.png" style= "width:100%; height: 10%" ></div>
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
    <form class="UserReport" method="POST" action="../Facade.php">
    <h2>Complaint's Report</h2>
    <canvas id="myChart" style="width:100%;max-width:700px"></canvas>

</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script>
var xValues = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October","November", "December"];
var yValues = [1,2,3,1,3,2,1,4,5,4,7,2];
var barColors = ["red", "green","blue","orange","brown", "pink", "#89CFF0", "#89CFF0", "#8F00FF", "#98FB98", "orange", "grey"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Bar Chart of Total Complaint in 2023"
    }
    
  }
});
</script>


