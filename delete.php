<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    include("connect.php");
    $sql = "DELETE FROM discussion WHERE id = $id";
    $delete = $conn->query($sql);
    //if(mysqli_query($conn,$sql)){
    //    echo "Deleted";
    //}
    if($delete){
        echo "<script> alert('Post has been deleted successfully.'); location.replace('index.php'); </script>";
    }else{
        echo "<script> alert('Post has failed to delete. Error: '.$conn->error); location.replace('index.php'); </script>";
    }
    
}
?>