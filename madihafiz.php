
                <?php

include ("mini_project.php");
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $complaint_id = $_POST['complaint_id'];
    $complaint_type = $_POST['complaint_type'];
    $complaint_description = $_POST['complaint_description'];
    $complaint_date = $_POST['complaint_date'];
    $complaint_time = $_POST['complaint_time'];
                   

                
                

                    //sql query
                    $query= "INSERT INTO complaint (complaint_type, complaint_description, complaint_date) 
                    VALUES ('$complaint_type','$complaint_description','$complaint_date')" or die (mysqli_connect_error());

                    if (conn->query($complaint)===true)
                    {
                        echo "<script>alert('Data inserted successfully');
                        </script>";
                    }
                    else 
                    {
                        echo "Insert all data:"
                        . $complaint . "<br>" . $conn->error;

                    }
                    


                    if(isset($result))
                    {
                        header ("location: list.php");
                    }
                    else
                    {
                        die("Insert Failed");
                    }
                    mysqli_close($conn);

                ?>