<?php 
//Connect to the database server.
$link = mysqli_connect("localhost", "root","") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "login") or die(mysqli_error($link));

if (isset($_GET['login_id'])) {
    $id = $_GET['login_id'];
//SQL query
$strSQL = " SELECT * FROM userlogin  where login_id='".$id."'";

//Execute the query (the recordset $rs contains the result)
$result = mysqli_query($link, $strSQL);

            while($row=mysqli_fetch_assoc($result))
                {
                $jenispengguna = $row["userRole"];
                $firstname = $row["fname"];
                $lastname = $row["lname"];
                $katanama = $row["username"];
                $email = $row["email"]; 
                }
            } else {
                echo "Record not found.";
            }
?>

<!DOCTYPE html>
<html>
<style>
    nav {
        float: left;
        width: 10%;
        height: 490px;
        background: #a9a8a8;
        padding: 20px;
        border-radius: 25px;
    }
    
    div {
        background: #d5d5d5;
        padding-left: 210px;
        border-radius: 25px;
        height: 510px;
    }

    .button {
        border-radius: 1px;
        width: 100px;
        height: 30px;
        background: #286291;
        color: white;
    }

    .input {
        border-radius: 5px;
        padding: 20px; 
        width: 340px;
        height: 5px; 
        color: black;
    }
</style>
<head>
    <title>Edit User Profile</title>
</head>
    <body>
    <header>
        <img src="assets/banner.png" style="height: 150px;" width="1200px">
    </header>
    <nav>
        <a href="homepage.php">Home</a><br>
        <a href="manageuser.php">Manage User Profile</a><br>
        <a href="logout.php">Logout</a>
    </nav>

        <form action="userUpdate.php?ID=<?php echo $nama ?>" method="post">
        
        <table>
        <tr>
                    <td>Select type of user :</td>
                    <td><select class="" name="userRole" required onchange="addPrefix()">
                        <option value="" disabled selected> Select</option>
                        <option value="Staff/Student">Staff/Student</option>
                        <option value="Admin">Admin</option>
                        <option value="Expert">Expert</option>
                    </select></td>
                </tr>
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="fname" value="<?php echo $firstname ?>"></td>
        </tr>
        <tr>
            <td> Last Name:</td>
            <td><input type="text" name="lname" value="<?php echo $lastname ?>"></td>
        </tr>
        <tr>
            <td> Username:</td>
            <td><input type="text" name="uname" value="<?php echo $katanama ?>"></td>
        </tr>
        <tr>
            <td> Email:</td>
            <td><input type="text" name="email" value="<?php echo $email ?>"></td>
        </tr>
        
        </table>
        <input type="submit" name="update" value="Update">
        </form> 
    </body> 
</html>