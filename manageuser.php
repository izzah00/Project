<?php
//to make a connection with database
$conn = mysqli_connect ("localhost","root","") or die (mysqli_connect_error()) ;

//to select the targeted database 
mysqli_select_db ($conn,"mini_project") or die (mysqli_error($conn)) ;

//to create a query to be executed in sql
$query = "SELECT * FROM userlogin ";

//to run sql query in database
$result = mysqli_query ($conn,$query) or die (mysqli_error());

//to create a query to be executed in sql
$query1 = "SELECT * FROM userlogin WHERE userRole='Admin' ";

//to run sql query in database
$result1 = mysqli_query ($conn,$query1) or die (mysqli_error());

//to create a query to be executed in sql
$query2 = "SELECT * FROM userlogin WHERE userRole='Staff/Student'";

//to run sql query in database
$result2 = mysqli_query ($conn,$query2) or die (mysqli_error());

//to create a query to be executed in sql
$query3 = "SELECT * FROM userlogin WHERE userRole='Expert'";

//to run sql query in database
$result3 = mysqli_query ($conn,$query3) or die (mysqli_error());


?>

<html>
    <style>
      body {
  font-family: "Lato", sans-serif;
}
        nav {
                float: left;
                width: 150px;
                height: 600px;
                background: turquoise; 
                padding: 20px;
                border-radius: 25px;
            }

            
        div{
                background: #d5d5d5;
                padding-left: 210px;
                padding-top: 20px;
                width: 1000px;
                height: 300px;
        }

        table, th{
                columns: 500px;
        }
  
        td {
                columns: 200px;
        }

        .totalbox{
                border-radius: 5px;
                width: 80px;
                height: 30px;
                margin: center;
        }

        .button1{
                border-radius: 1px;
                width: 200px;
                height: 30px;
                background: #286291;
                color: white;
        }

        a:hover{
    background-color: white;
    color: black;
    border-radius: 8px;
}

        </style>
<head>
    <title>LoginSuccessful</title>
	<script src=".js"></script>
    </head>
    <body>
    <header>
        <img src="assets/banner.png" style="height:150" width="1220px">
    </header>
    <nav>
    <a href="login-successful.php" style="text-decoration: none;">Home</a><br><br>
    <a href="manageuser.php">Manage User Profile</a><br><br>  
    <a href="logout.php">Logout </a>
    </nav>
    <div>

    <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="padding-right: 300px;">
          <button class="btn btn-outline-success" style="padding-right: 10px;" type="submit">Search</button>
        </form><br>

    <b>Total User Admin: </b>

    <?php
        $last_id1 = mysqli_num_rows($result1);
    ?>
    
    <input type="text" name="totalUser" value="<?php echo $last_id1 ?>" class="totalbox" readonly>

    <b>Total User Student & Staff: </b>

    <?php
        $last_id2 = mysqli_num_rows($result2);
    ?>
    
    <input type="text" name="totalUser" value="<?php echo $last_id2 ?>" class="totalbox" readonly>
    
    <b>Total User Expert: </b>

    <?php
        $last_id3 = mysqli_num_rows($result3);
    ?>
    
    <input type="text" name="totalUser" value="<?php echo $last_id3 ?>" class="totalbox" readonly>

    <a href="UserProfile.php"><input type="submit" class="button1" value="Create New User"></a><br>

    <br><table>
            
            <tr>
                <td><b>Username</b></td>
                <td><b>Role</b></td>
            </tr>

            <?php 
                while($row=mysqli_fetch_assoc($result))
                {
                    $katanama = $row['username'];
                    $jenispengguna =  $row['userRole'];
            ?>
            <tr>
                    <td><?php echo $katanama ?></td>
                    <td><?php echo $jenispengguna ?></td>
                    <td><a href="ViewUserProfile.php?GetID=<?php echo $katanama ?>">View</a></td>
                    <td><a href="EditUserProfile.php?GetID=<?php echo $nama ?>">Edit</a></td>
                    <td><a href="DeleteUserProfile.php?Del=<?php echo $nama ?>">Delete</a></td>
            </tr>

            <?php 
                }
            ?>

        </table>
            </div>
</body>
</html>
