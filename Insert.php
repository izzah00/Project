<!DOCTYPE html>
<html>
    <head>
    <title>Insert Data</title>
    </head>
    <body>
    <?php
        $katanama = $_POST["uname"];
        $katalaluan = $_POST["pword"];
        $jenispengguna = $_POST["userRole"];
        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $email = $_POST["email"];

        //Connect to the database server.
        $conn = mysqli_connect ("localhost","root","") or die (mysqli_connect_error()) ;
        
        //to select the targeted database 
        mysqli_select_db ($conn,"mini_project") or die (mysqli_error($conn)) ;

        //SQL query
        $query = "INSERT INTO userlogin (login_id, username, password, userRole, fname, lname, email) VALUES ('', '$katanama', '$katalaluan','$jenispengguna', '$firstname', '$lastname', '$email')"
        or die(mysqli_connect_error());
        
        //to run sql query in database
        $result = mysqli_query($conn, $query);

        if(isset($result))
        {
            header ("location: userUpdate.php");
        }
        else
        {
            die("Insert failed");
        }

        //close database connection
        mysqli_close($conn);

?>
    </body> 
</html>
