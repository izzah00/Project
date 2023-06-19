<?php
//Connect to the database server.
$link = mysqli_connect("localhost", "root","") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "mini_project") or die(mysqli_error($link));

    if(isset($_GET['Del']))
    {
        $nama = $_GET['Del'];
        $strSQL = "delete from userlogin where username = '".$nama."'";

        //Execute the query (the recordset $rs contains the result)
        $rs = mysqli_query($link, $strSQL);

        if($rs)
        {
            header("location:ViewUserProfile.php");
        }
        else
        {
            echo 'Please check your query';
        }
    }
    else
    {
        header("location:ViewUserProfile.php");
    }

?>
