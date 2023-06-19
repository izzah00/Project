<?php

  //Connect to the database server.
  $link = mysqli_connect("localhost", "root", "", "mini_project", "3306") or die(mysqli_connect_error());

  //Select the database.
  mysqli_select_db($link, "mini_project") or die(mysqli_error($link));
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
    height: 200px;
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
  <?php

  $query = "select * FROM expert"
  or die(mysqli_connect_error());

  //execute query

  $result = mysqli_query($link, $query);

  if (mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      $expertid = $row["expert_id"];
      $expertarea = $row["expert_area_id"];
      $expertresearch = $row["expert_research_area"];
      $expertpublications= $row["expert_publications"];
      $expertname = $row["expert_name"];
      $expertemail = $row["expert_email"];
      $expertname = $row["expert_name"];
      $expertcv = $row["expert_cv"];
      $expertcategory= $row["expert_category"];
      ?>
   
  <h2>Profile</h2>
  
  <div class="main">
  <h2>Profile Picture</h2>
        <div class="card">
        <img src="assets/profiles.png" style= "width:25%; height: 10%"  >
        </div>
        <h2>About</h2>
        <div class="card">
            <div class="card-body">
                <table>
                    <tbody>
                        <tr>
                            <th style="width:15%">Name</th>
                            <td><?php echo $expertname; ?></td>
                        </tr>
                        <tr>
                            <th position="center">Email</th>
                            <td><?php echo $expertemail; ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
            </div>
        </div>

        <h2>SOCIAL MEDIA</h2>
        <div class="card">
            <div class="card-body">
                <div class="social-media">
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-invision fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-snapchat fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
  <h2>Area of Research</h2>
        <div class="card">
        <table>
                    <tbody>
                        <tr>
                            <th style="width:15%">Research Area</th>
                            <td><?php echo $expertresearch; ?>   </td>
                        </tr>
                        <tr>
                            <th>CV</th>
                            <td><?php echo $expertcv; ?></td>
                        </tr>
                    </tbody>
         </table>
 
        </div>
        <?php
    }
  }
  else {
    echo "0 results";
  }
  ?>
        <button onclick="window.location.href = '/realweb/editprofile.php'" style="position: absolute; right: 170px;">Edit</button>
        <br>
      
</section>
<footer>
  <p>Footer</p>
</footer>

</body>
</html>
