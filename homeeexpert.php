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
  padding: 200px;
  width: 80%;
  background-color: white;
  height: 300%; 
 
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




td {
 width:26%;
}


.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.bgimg {
  /* background-image: url() ; */
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: black;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
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
  <div class="bgimg">
    <div class="middle">
        <h1>WELCOME TO FK-EDU SEARCH </h1>
    </div>
   </div>
  </article>
</section>
<footer>
  <p>Copyright &copy; 2023|FK-EduSearch. All rights reserved.</p>
</footer>

</body>
</html>
