<?php
include("connect.php");
if (isset($_POST["create"])) {
    $type = mysqli_real_escape_string($conn,$_POST["type"]);
    $title = mysqli_real_escape_string($conn,$_POST["title"]);
    $question = mysqli_real_escape_string($conn,$_POST["question"]);
    $date = mysqli_real_escape_string($conn,$_POST["date"]);
    $sql = "INSERT INTO discussion (login_id,type,title,question,date) VALUES ('7','$type','$title','$question','$date')";
    //if (mysqli_query($conn,$sql)){
    //    echo "Record Inserted";
    //}else{
    //    die("Something went wrong");
    //}
    if (mysqli_query($conn,$sql)){
        session_start();
        $_SESSION["create"] = "Question Added Succesfully";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}

if (isset($_POST["edit"])) {
    $type = mysqli_real_escape_string($conn,$_POST["type"]);
    $title = mysqli_real_escape_string($conn,$_POST["title"]);
    $question = mysqli_real_escape_string($conn,$_POST["question"]);
    $date = mysqli_real_escape_string($conn,$_POST["date"]);
    $id = mysqli_real_escape_string($conn,$_POST["id"]);
    $sql = "UPDATE discussion SET `type`='$type',`title`='$title',`question`='$question',`date`='$date' WHERE id=$id";
    //if (mysqli_query($conn,$sql)){
    //    echo "Record Updated";
    //}else{
    //    die("Something went wrong");
    //}
    if (mysqli_query($conn,$sql)){
        session_start();
        $_SESSION["update"] = "Question Updated Succesfully";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
?>