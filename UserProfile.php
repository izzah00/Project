<?php
/*
Filename: UserProfile. php
Purpose: To view user frofile
*/
?>

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
            
        div{
                background: #d5d5d5;
                padding-left: 210px;
                padding-top: 20px;
                border-radius: 25px;
                height: 510px;
        }

        .button{
                border-radius: 1px;
                width: 100px;
                height: 30px;
                background: #286291;
                color: white;
        }

        .input{
                border-radius: 5px;
                padding: 20px; 
                width: 340px;
                height: 5px; 
                color: black;
        }
    </style>
<head>
    <title>User Profile</title>
	<script src=".js"></script>
    </head>
    <body>
    <header>
        <img src="assets/banner.png" style="height: 150px;" width="1200px">
    </header>
    <nav>
        <a href="homepage.php">Home</a><br>
        <a href="manageuser.php">Manage User Profile</a><br>
        <a href="logout.php">Logout </a>
    </nav>
            

    <div class="">
        <form action="Insert.php" method="post">
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
                    <br><td>Firstname :</td>
                    <td><input type="name" class="input" name="fname"></td>
                </tr>
                <tr>
                    <td>Lastname :</td>
                    <td><input type="name" class="input" name="lname"></td>
                </tr>
                <tr>
                    <td>Username :</td>
                    <td><input type="name" class="input" name="uname"></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="name" class="input" name="pword"></td>
                </tr>
                
                <tr>
                    <td>Email :</td>
                    <td><input type="name" class="input" name="email"></td>
                </tr>
                
            </table>  
            <input type="submit" class="button" value="Submit">
        </form>         
    </div>
    
    
</body>
</html>