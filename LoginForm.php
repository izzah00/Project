<?php
/*
Filename : LoginForm.php
Propose : Login interface
*/
//Start session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <title>User provide login informatin</title>
    </head>
    <style>
        .form{
            background-color: #f2f2f2;
            border-style: solid;
            text-align: center;
            margin: 0 auto; 
            width:500px;
            height:400px;
        }

        input{
        padding: 10px 20px;
        border-radius: 8px;
        border-color: #C1C3C3;
        background-color: #C1C3C3;
        border-style: solid;
    }

    select{
        padding: 10px 20px;
        border-radius: 8px;
        width:200px;
        border-color: #C1C3C3;
        background-color: #C1C3C3;
        border-style: solid;
    }

        button{
        background-color: #2cd4d4;
        padding: 15px 80px;
        text-align: center;
        border: none;
        color:black;
        font-weight: bold;
        border-radius: 45px;
        font-size: 20px;
       
    }


        
    </style>
    <body>
        <div class="header">
		    <img src="assets/banner.png"  style="height: 150px; width:1300px;">
	    </div><br><br>
        

        <?php
        if (isset($_SESSION['ERRMSG_ARR']))
        {
            echo "<h1 style='color:red'>Error found: ";
            for ($i=0; $i<count($_SESSION['ERRMSG_ARR']); $I++){
                echo $_SESSION['ERRMSG_ARR'][$i]."! ";
            }
            echo "</h1>";
            unset ($_SESSION['ERRMSG_ARR']);
        }
        ?>

        <form method="post" action="sessionHandler.php" class="form">
            <h2>Enter Login Details</h2>

            <strong>Username:</strong> 
            <br><input type="text" name="uname" require><br><br>
            <strong>Password:</strong>
            <br><input type="password" name="pword"><br><br>
            <strong>Role:</strong><br>
            <select name="userRole">
            <option value="Staff/Student">Staff/Student</option>
            <option value="Admin">Admin</option>
            <option value="Expert">Expert</option> 
            </select><br><br>

            <button type="submit" value="Login">Submit</button>
            <button type="reset" value="Reset">Reset</button>

        </form>
    </body> 
</html>