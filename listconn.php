
<?php

//Connect to the database server.
$link = mysqli_connect("localhost", "root", "", "mini_project", "3306") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "mini_project") or die(mysqli_error($link));

if ($_SERVER['REQUEST_METHOD']==='POST')
{
    $complaint_type = $_POST['complaint_type'];
    $complaint_description = $_POST['complaint_description'];
    $complaint_date = $_POST['complaint_date'];

                   
    $conn = new mysqli("localhost", "root", "", "mini_project");

                    //sql query
                    $query= "INSERT INTO complaint (complaint_type, complaint_description, complaint_date) 
                    VALUES ('$complaint_type','$complaint_description','$complaint_date')" or die (mysqli_connect_error());

                    if ($conn->query($query)===true)
                    {
                        echo "<script>alert('Data inserted successfully');
                        </script>";
                    }
                    else 
                    {
                        echo "Insert all data:"
                        . $complaint . "<br>" . $conn->error;

                    }
                    
                }

                ?>