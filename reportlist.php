<?php

  //Connect to the database server.
  $link = mysqli_connect("localhost", "root", "", "mini_project", "3306") or die(mysqli_connect_error());

  //Select the database.
  mysqli_select_db($link, "mini_project") or die(mysqli_error($link));
?>	

<!DOCTYPE html>
<html lang="en">
<head>
<title>Report List</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
/* side navigation bar */
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
    padding: 15px 10px;
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
/* table */
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th{
  text-align: left;
  padding: 8px;
  background-color: #2E8A99
}
td {
  text-align: left;
  padding: 8px;
  background-color: white
}

tr:nth-child(even){background-color: white}

.a href{
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

  
</style>

<!-- dbconnection -->
<?php


?>



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
                    <li><a href="http://localhost/BCS2243/mini_project/viewrating.php">System Rating</a></li>
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
               
            <h2>List of vulnerability</h2>

            <div style="overflow-x:auto;">

            <table>
                      
            </table>
            <?php
              //SQL query
              $query = "SELECT * FROM report"
              or die(mysqli_connect_error());

              //Execute the query (the recordset $rs contains the result)
              $result = mysqli_query($link, $query);

            
            if (mysqli_num_rows($result) > 0)
              {
                // output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                  $rID = $row["report_id"];
                  $rCID = $row["comment_id"];
                  $rStatus = $row["report_status"];
                  $rContent = $row["report_content"];
                  ?>	
                    <table>
                    <tr>
                    <th>Reports Id</th>
                        <th>Comment Id</th>
                        <th>Report Content</th>
                        <th>Report Status</th>
                        <th>Edit Status</th>
                      </tr> 
                      <tr>
                        <td><?php echo $rID; ?></td>
                        <td><?php echo $rCID; ?></td>
                        <td><?php echo $rContent; ?></td>
                        <td><?php echo $rStatus; ?></td>
                        <td><a href="updatereport.php?id=<?php echo $rID; ?>  "><div class="w3-padding w3-xlarge w3-text-green">
    <i class="fa fa-edit"></i></div></a></td>
                      </tr>
                    </table><br>
                    <?php
                }
              }
              else {
                  echo "0 results";

              }
              ?>


            </article>
        </section>

        <footer>
            <p>Footer</p>
        </footer>

    </body>
   
</html>