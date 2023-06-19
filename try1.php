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
            top:230px;
            right:450px;
            left:300px;
            width:70%;
        }
        
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
        }

        textarea {
            height: 150px;
        }

        select {
            font-size: 15px;
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
       
        </style>

    <head>
    <div class="logo"><img src="assets/banner.png" style= "width:100%; height: 10%"  ></div>
    </head>

    <div class=sidebar>
    <ul class="navbar">
        <br><br><li><a href="/">Home</a></li><br>
        <li><a href="acc">Account Profile</a></li><br>
        <li><a href="discuss">Discussion board</a></li><br>
        <li><a class="active" href="complaint">Complaint</a></li><br>
        <li><a href="http://localhost/webs/webs/try3.php">Total post</a></li><br>
        <li><a href="http://localhost/webs/webs/try4.php">Report</a></li><br>
        <li><a href="logout">Logout</a></li>
    </ul>  
    </div>  
       
        <div class="container">
        <form id="UserComplaint" action="listconn.php" method="POST">
            <h1>Create New Complaint</h1><br>
            <!-- <label>Complaint ID:</label><br>
            <input type="text" id="complaint_id" name="complaint_id"><br><br> -->
            <label>Date:</label><br>
            <input type="date" name="complaint_date"><br><br>
            <!-- <label for="appt" >Time:</label><br>
            <input type="time" id="complaint_time" name="complaint_time"><br><br> -->
            <label>Type of complaints:</label><br>
            <select name="complaint_type" id="complaint_type">
                <option name="type1">Unsatisfied Expert's Feedback</option>
                <option name="type2">Wrongly Assigned Research Area</option>
                <option name="type3">Misleading or Incorrect Information</option>
            </select><br><br>
            <label>Description:</label><br>
            <input type="text" name="complaint_description" id="complaint_description"><br><br>
            <!-- <textarea name="complaint_description"></textarea><br><br> -->
            
            <button type="create">Create</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset">Cancel</button>
         
        </form>
    



      