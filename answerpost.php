<?php
// Connect to the database server
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

// Select the database
mysqli_select_db($link, "mini_project") or die(mysqli_error($link));

// User ID
$expert_id = '11';

if (isset($_POST['postanswer'])) {
    $answer = $_POST['postanswer'];

    // Insert the answer into the database
    $query = "INSERT INTO discussion (expert_id, answer) VALUES ('$expert_id', '$answer')";
    $result = mysqli_query($link, $query);

    if ($result) {
        // Redirect to the desired page
        header("location: /desired-page.php");
        exit;
    } else {
        echo 'Error: ' . mysqli_error($link);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #38838d;
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
  background:#9dd1d8;
  padding: 20px;
}
a:hover{
    background-color:#38838d;
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
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 80%;
  background-color: white;
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
  background-color: #38838d;
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

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

<!---box--!>
.main {
    margin-top: 2%;
    margin-left: 29%;
    font-size: 28px;
    padding: 0 10px;
    width: 58%;
}

.main h2 {
    color: #333;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 24px;
    margin-bottom: 10px;
}

.main .card {
    background-color: #fff;
    border-radius: 18px;
    box-shadow: 1px 1px 8px 0 grey;
    height: auto;
    margin-bottom: 20px;
    padding: 20px 0 20px 50px;
}

.main .card table {
    border: none;
    font-size: 16px;
    height: 270px;
    width: 80%;
}

.edit {
    position: absolute;
    color: #e7e7e8;
    right: 14%;
}

</style>
</head>

<body>


<header>
<img src="/banner.png" style= "width:100%; height: 10%"  >
</header>
<br>
<section>
  <nav>

    <ul class="navbar">
    <li><a href="homeexpert.php">Home</a></li>
        <li><a href="expertprofile.php">Profile</a></li>
        <li><a href="discussion.php">Board Discussion</a></li>
        <li><a href="Notifications.php">Notifications</a></li>
        <li><a href="rating.php">Analytic</a></li>
    </ul>
  </nav>
  
  <article>
  
       <div class="main">
        <h2>Answer Post</h2>
        <div class="card">
            <div class="card-body">
              <form action="/action_page.php">
                   <p><label for="answer">Your Answers:</label></p>
                   <textarea id="answer" name="postanswer" rows="8" cols="120"></textarea>
                   <br><br>
                   <div class="buttons" >
                      <input type="file" id="myFile" name="filename">
                      <input type="button" value="Submit" style="position: absolute; right: 170px;"> 
                      <input type="button" value="cancel" style="position: absolute; right: 100px;"> 
                   </div>
              </form>
            </div>
        </div>
        
        <?php
  
           // Process the form submission
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($_POST['submit'])) {
          $post_id = $_POST['Post_ID'][0];
          $answer = mysqli_real_escape_string($link, $_POST['answer'][0]);
          
          // Insert the answer into the 'answer' table
          $insert_query = "INSERT INTO answer ( Answer_desc) VALUES ( '$answer')";
          mysqli_query($link, $insert_query);
      }
  }
  
  // Close the database connection
  mysqli_close($link);
  ?>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>

<script>
function myFunction() {
  location.replace("http://localhost/realweb/editprofile.php")
}
</script>
</html>
