<!DOCTYPE html>
<html lang="en">
<head>
<title>rate system</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  /* only for demonstration*/
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

</style>

</head>
    <body>

        <header>
        <img src="/banner.png" style= "width:100%; height: 10%"  >
        </header>

        <section>
            <nav>
                <ul class="navbar">
                    <li><a href="/">Manage User Profile</a></li>
                    <li><a href="menu2">System Rating</a></li>
                    <li><a href="menu2">System Rating</a></li>
                    <li><a href="menu2">Report List</a></li>
                    <li><a href="menu2">User Satisfaction</a></li>
                    <li><a href="menu2">User Activity</a></li>
                        <ul>
                            <li><a href="/">Profil</a></li>
                            <li><a href="menu1">menu1</a></li>
                            <li><a href="menu2">menu2</a></li>
                            <li><a href="testdropdown">Profil</a></li>
                        </ul>
                        <li><a href="testdropdown">Profil</a>
                    </li>
                    <li><a href="menu1">Logout</a></li>
                </ul>
            </nav>
            
            <article>
               
            <h2>Add Review</h2>


            </article>
        </section>

        <footer>
            <p>Footer</p>
        </footer>

    </body>
   
</html>