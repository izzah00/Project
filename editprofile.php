<?php
// Connect to the database server.
$conn = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

// Select the targeted database.
mysqli_select_db($conn, "mini_project") or die(mysqli_error($conn));

// Fetch the data from the database to populate the form fields.
if (isset($_POST['update'])) {
    // Fetch the expert ID from the database or any other relevant method.
    $expertid = $_POST["expert_id"];;
    $expertemail = $_POST["expert_email"];
    $expertname = $_POST["expert_name"];
    $expertresearch = $_POST["expert_research"];

    $query = "UPDATE expert SET expert_name='$expertname', expert_email='$expertemail', expert_research_area='$expertresearch' WHERE expert_id='$expertid'";

    // Execute the query.
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location: expertprofile.php");
        exit;
    } else {
        echo 'Please check your query';
    }
}

// Fetch the existing data from the database to populate the form fields.
$expertname = "";
$expertemail = "";
$expertresearch = "";

// Fetch the data based on the expert ID.
// You need to implement the logic to fetch the relevant data based on the expert ID.

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
.buttonbawah {
        float: right;
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
        </li>
    </ul>
  </nav>
  
  <article>

  <!-- update exper -->

<form method="post" action="">
  <h2>Edit Profile</h2>
  <table style="width:100%">
  <tr>
  <th colspan="2"><img src="assets/profiles.png" style= "width:25%; height: 10%; float: center;"  ></th>
</tr>
  <tr>
    <th colspan="2" style="background-color:#38838d" >User Info</th>
  </tr>
  <tr>
    <th> Name </th>
     <td> <input type="text" name="expertname" value="<?php echo $expertname; ?>"> </td>
  </tr>
  <tr>
    <th>Email</th>
    <td>  <input type="text" name="expertemail" value="<?php echo $expertemail; ?>"></td>
  </tr>
  <!-- <tr>
    <th>Social Media</th>
    <td> <select class="form-control"><br>
    
                <option selected="">Select social media</option>
                <option>Instagram</option>
                <option>Twitter</option>
                </select>
                <div class="form-group"> <br>
            <label class="col-sm-2 control-label">Insert Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
     </td>
  </tr> -->
  <tr>
  <th colspan="2" style="background-color:#38838d" >Research Area</th>
  </tr>
  <tr>
    <th> Research Area </th>
    <td><input type="text" name="expertresearch" value="<?php echo $expertresearch; ?>">  </td>
  </tr>
  <!-- <tr>
    <th> Academic Status</th>
    <td>  </td>
  </tr> -->
  </table>
  <ul class=buttonbawah>
  <input type ="hidden" name="id2" value="<?php echo $idURL; ?>">
  <input type ="submit" value="Update">
  <input type ="reset" onclick="location.href='expertprofile.php'" value="Cancel">
  </ul>
    </form>
  </section>
  </article>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>

