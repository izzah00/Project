<?php

  //Connect to the database server.
  $link = mysqli_connect("localhost", "root", "", "mini_project", "3306") or die(mysqli_connect_error());

  //Select the database.
  mysqli_select_db($link, "mini_project") or die(mysqli_error($link));
?>	

<!DOCTYPE html>
<html lang="en">
<head>
<title>notifications</title>
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
    //height: auto;
    margin-bottom:200px;
    padding: 20px 0 20px 50px;
}

td {
 width:26%;
}
#data_table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: turquoise;
  color: black;
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
        <li><a href="/">Home</a></li>
        <li><a href="/">Profile</a></li>
        <li><a href="/">Board Discussion</a></li>
        <li><a id="demo" onclick="mynotifications()">Notifications</a></li>
        <li><a href="/">Analytic</a></li>
    </ul>
  </nav>
  
  <article>
  <h2>Notifications</h2>
  
  <div class="main">

    <div id="wrapper">
    
      <table id="data_table" border="1">
        
        <tr>
          <th>date</th>
          <th style="width:200px">Title</th>
          <th style="width:100px">Process</th>
        </tr>
        <?php

$query = "select * FROM discussion"
or die(mysqli_connect_error());

//execute query

$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result))
  {
    $discussid = $row["id"];
    $loginid = $row["login_id"];
    $answerid = $row["answer_id"];
    $type= $row["type"];
    $title = $row["title"];
    $question = $row["question"];
    $date = $row["date"];
    $like = $row["like"];
   
    ?>
        <tr id="row1">
          <td><?php echo $date; ?> </td>
          <td><?php echo $title; ?></td>
          <td>
            
            <input type="button" id="edit_button1" value="Answer" class="edit" onclick="window.location.href = '/realweb/answerpost.php'">
            <input type="button" id="delete_button1" value="Delete" class="delete" onclick="window.location.href = 'deletepost.php?Del=<?php echo $discussid; ?>'">
          </td>
        </tr>
        <?php
    }
  }
  else {
    echo "0 results";
  }
  ?>
  </table>
    </div>
  </div>
  </article>
</section>
<br>
  <footer>
  <p>@ump.edu.my</p>
</footer>


</body>


