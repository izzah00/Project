<?php
//Connect to the database server.
$link = mysqli_connect("localhost", "root","") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "login") or die(mysqli_error($link));

if (isset($_GET['login_id'])) {
    $id = $_GET['login_id'];
//SQL query
$strSQL = "SELECT * FROM userlogin WHERE id = $id";

//Execute the query (the recordset $rs contains the result)
$rs = mysqli_query($link, $strSQL);

if (mysqli_num_rows($rs) > 0) {
    $row = mysqli_fetch_assoc($rs);
    $jenispengguna = $row["userRole"];
    $firstname = $row["fname"];
    $lastname = $row["lname"];
    $katanama = $row["username"];
    $email = $row["email"];
} else {
    echo "Record not found.";
}
} else {
    echo "No ID provided.";
}
?>

<!DOCTYPE html>
<html>
<style>
   nav {
                float: left;
                width: 150px;
                height: 600px;
                background: turquoise; 
                padding: 20px;
                border-radius: 25px;
            }
    
    div {
        background: #d5d5d5;
        padding-left: 210px;
        padding-top: 20px;
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
    <title>User Profile</title>
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

    <div>
        <table>
            <tr>
                <td>Type of user :</td>
                <td>Firstname :</td>
                <td>Lastname :</td>
                <td>Username :</td>
                <td>Email :</td>
            </tr>

            <?php 
            while($row = mysqli_fetch_assoc($rs)) {
                $jenispengguna = $row["userRole"];
                $firstname = $row["fname"];
                $lastname = $row["lname"];
                $katanama = $row["username"];
                $email = $row["email"];  
            ?>
            <tr>
                <td><?php echo $jenispengguna ?></td>
                <td><?php echo $firstname ?></td>
                <td><?php echo $lastname ?></td>
                <td><?php echo $katanama ?></td>
                <td><?php echo $email ?></td>
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