<?php
//Connect to the database server.
$conn = mysqli_connect ("localhost","root","") or die (mysqli_connect_error()) ;

//to select the targeted database 
mysqli_select_db ($conn,"mini_project") or die (mysqli_error($conn)) ;

    if(isset($_POST['update']))
    {
        $jenispengguna = $_POST["userRole"];
        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $katanama = $_POST["uname"];
        $katalaluan = $_POST["pword"];
        $email = $_POST["email"];

        $query = "UPDATE userlogin SET userRole='".$jenispengguna."', firstname='".$firstname."',
        lastname='".$lastname."', username='".$katanama."', password='".$katalaluan."',email='".$email."' where login_id='".$id."'";

        //Execute the query (the recordset $rs contains the result)
        $result = mysqli_query($conn, $query);

        if($result)
        {
            header("location:manageuser.php");
        }
        else
        {
            echo 'Please check your query';
        }
    }
    else
    {
        header("location:manageuser.php");
    }

?>
