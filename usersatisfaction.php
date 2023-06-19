<?php

//submit_rating.php
//connect database
$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

if(isset($_POST["rating_data"]))
{
	$query = "
	SELECT * FROM review_table 
	ORDER BY review_id DESC
	";

	$result = $connect->query($query, PDO::FETCH_ASSOC);

	foreach($result as $row)
	{
		$review_content[] = array(
			'user_name'		=>	$row["user_name"],
			'user_review'	=>	$row["user_review"],
			'rating'		=>	$row["user_rating"],
			'datetime'		=>	date('l jS, F Y h:i:s A', $row["datetime"])
		);

		if($row["user_rating"] == '5')
		{
			$five_star_review++;
		}

		if($row["user_rating"] == '4')
		{
			$four_star_review++;
		}

		if($row["user_rating"] == '3')
		{
			$three_star_review++;
		}

		if($row["user_rating"] == '2')
		{
			$two_star_review++;
		}

		if($row["user_rating"] == '1')
		{
			$one_star_review++;
		}

		$total_review++;

		$total_user_rating = $total_user_rating + $row["user_rating"];

	}

	$average_rating = $total_user_rating / $total_review;
//show output
	$output = array(
		'average_rating'	=>	number_format($average_rating, 1),
		'total_review'		=>	$total_review,
		'five_star_review'	=>	$five_star_review,
		'four_star_review'	=>	$four_star_review,
		'three_star_review'	=>	$three_star_review,
		'two_star_review'	=>	$two_star_review,
		'one_star_review'	=>	$one_star_review,
		'review_data'		=>	$review_content
	);

	echo json_encode($output);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>System Performance</title>
<meta charset="utf-8">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #88d1cb;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 20%;
  height: 300%; 
  /* only for demonstration, should be removed */
  background: #ddd;
  padding: 20px;
}
a:hover{
    background-color: white;
    color: black;
    border-radius: 8px;
}

.navbar li a{
    display: block;
    color: #000;
    padding: 15px 1px;
    text-decoration:none;
}

.user{
    text-align: left;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 3;
}

article {
  float: left;
  padding: 20px;
  width: 80%;
  background-color: #f1f1f1;
  height: 300%; 
  /* only for demonstration, should be removed */
}
/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

/* user rating view */
.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
</style>

</head>
    <body>

        <header>
        <img src="/banner.png" style= "width:100%; height: 10%"  >
        </header>

        <section>
        <nav>
                <ul class="navbar">
                    <li><a href="menu2">Home</a></li>
                    <li><a href="/">Manage User Profile</a></li>
                    <li><a href="http://localhost/BCS2243/mini_project/usersystemrating.php">System Rating</a></li>
                    <li><a href="http://localhost/BCS2243/mini_project/reportlist.php">Report List</a></li>
                    <li><a href="http://localhost/BCS2243/mini_project/usersatisfaction.php">User Satisfaction</a></li>
                    <li><a href="http://localhost/BCS2243/mini_project/useractivity.php">User Activity</a></li>

                        <ul>
                            <li><a href="/">Profil</a></li>
                            <li><a href="menu1">menu1</a></li>
                            <li><a href="menu2">menu2</a></li>
                            <li><a href="testdropdown">Profil</a></li>
                        </ul>
                        <li><a href="testdropdown">Profil</a></li>
                    <li><a href="menu1">Logout</a></li>
                </ul>
            </nav>
            
            <article>
            <p><h1><center>USER SATISFACTION</center></h1></p>
                <canvas id="myChart" style="width:100%;  width :100%; align-content:center;">
                </canvas>
                    <script>
                      // yv1= engagement rate select all from comment, like, post
                      // yv2= retention rate select all from comment like post declare as rtt / post
                      // yv3= user satisfaction select all from feedback where feedack_rating = 4 & 5 declare as, usat/total feedback rating * 100%
                        var xValues = ["Engagement Rate", "Retention Rate", "User Satisfaction"];
                        var yValues = [324, 145, 222];//yv1, yv2, yv3
                        var barColors = ["#F5E9CF","#E96479","#7DB9B6"];

                        new Chart("myChart", 
                        {
                            type: "doughnut",
                            data: 
                            {
                                labels: xValues,
                                datasets: [{backgroundColor: barColors, data: yValues}]
                            },
                            options: 
                            {
                                title: {
                                display: true,
                                text: ""
                                }
                            }
                        });
                    </script>

                  <p>Retention rate: The percentage of customers who continue using the system. </p>
                  <p>User Satisfaction rate: The percentage overall satisfaction user with the system. </p>
                  <p>Engagement rate: The percentage of user interaction with system. </p>

                  <p><h1>     </h1></p><br>
                  <br>
                  <br>
                  <br>

              
            </article>
        </section>

        <footer>
            <p>Footer</p>
        </footer>

    </body>
</html>

