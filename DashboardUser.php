<?php
        if(isset($_GET['discussion_id'])){
          extract($_GET);
           $get = $conn->query("SELECT * FROM `like_list` where discussion_id = '{$post_id}' and session_name = '{$_SESSION['session_name']}'");
           if($get->num_rows > 0){
               $sql = "DELETE FROM `like_list` where discussion_id = '{$post_id}' and session_name = '{$_SESSION['session_name']}' ";
           }else{
               $sql = "INSERT INTO `like_list` set post_id = '{$post_id}', session_name = '{$_SESSION['session_name']}' ";
           }
           $process= $conn->query($sql);
           if($process){
               echo "<script> alert('Post Like has been updated.'); location.replace('index.php'); </script>";
           }else{
               echo "<script> alert('Post Like/Unlike has failed.'); location.replace('index.php'); </script>";
           }
           
       }


?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/Project/USER/css/main.css" rel="stylesheet">

    <title> Dashboard</title>
  </head>
  <script>
    </script>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <div class="header">
        <img src="assets/banner.png" style="height: 150px; width:1325px;">
      </div>
  </div>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid bg-warning">
      <a class="navbar-brand" href="#">
        <span class="text-main-color fw-bold fs-3">FK-Edu Search</span> 
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="DashboardUser.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ProfileUser.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Discussion Board</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ReportUser.php">Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Complaint</a>
          </li>
        </ul>
        <div class="btn-group m-3">
                <button  id="button1" type="button" class="btn btn-sm button-73" >
                    <a href="create.php" class = "nav-link">Add Question</a>
                </button>
                <button id="button2" type="button" class="btn btn-sm button-73  dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually">▼</span>
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Create a post 📝</a></li>
                </ul>
            </div>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <div class="container mb-10">
    <div class="col-7 ps-5 p-2">
        <div class="bg-white border-gray">
            <div class="row">
                <div class="col">
                    <img class="profile rounded-circle" src="gambar/profile.jpg">
                    <input class="w-75 border-gray text-gray-dark rounded-pill bg-light ps-2 text-start" type="text" placeholder="What do you want to ask or share?"/>
                </div>
            </div>

           

            <div class="row text-gray-darker pb-2 ps-4 pe-4">
                <div class="col text-center border-end hover-dark">
                    <img src="gambar/ask.png" width="20px" height="20px">
                    <span>Ask</span>
                </div>
                <div class="col text-center border-end hover-dark">
                    <img src="gambar/answer.png" width="20px" height="20px">
                    <span>Answer</span>
                </div>
                <div class="col text-center border-end hover-dark">
                    <img src="gambar/post.png" width="20px" height="20px">
                    <span>Post</span>
                </div>
            </div>
            <div>
        </div>
        </div>


        
<?php
include("connect.php");
// Retrieve posts from the database
$sql = "SELECT d.*, u.fname  FROM discussion d INNER JOIN userlogin u ON d.login_id = u.login_id";
$result = $conn->query($sql);



// Display each post
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $type = $row["type"];
        $title = $row["title"];
        $question = $row["question"];
        $date = $row["date"];
        $name = $row["fname"];
        $is_liked = $row["like"];
 ?>   
    <div class="post bg-white border-gray mt-4 ml-20">
    <div class="pt-2 d-flex justify-content-between">
        <div class="d-flex">
            <img class="post-profile rounded-circle" src="gambar/profile.jpg">
            <div class="d-flex flex-column p-2">
                <span class="fw-bold fs-10"><?php echo $name = $row["fname"]; ?></span>
                <span class="text-gray fs-10">Asked by: <?php echo $date = $row["date"];?>,Topic: <?php echo $type = $row["type"]; ?></span>
                
            </div>
        </div>
        <div class="p-2 text-gray-darker">
            <button class="btn rounded-circle hover-dark p-1 " style = "margin-left: 100px;">
            <a href="delete.php?id=<?php echo $row["id"]; ?>" onclick="if(confirm('Are you sure to delete this post?') == false){ event.preventDefault() }" >
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="currentColor">
                    <path d="m249-207-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/>
                </svg>
            </button>
        </div>
    </div>
    <div class="post-body pt-2 ps-3"></div>
    <div class="post title fw-bold p-3">
        <a class="text-decoration-none text-black" href="#">
        <?php echo$title = $row["title"]; ?>
        </a>
    </div>
    <div class="post-text pt-1 p-3 ">
    <?php echo $question = $row["question"]; ?>
    </div>
    <div class="post-footer pb-2 pt-3 p-3">
    <button type="button" class = "btn btn-outline-dark">👍
          <?php if($is_liked > 10): ?>
        <a href="index.php?discussion_id=<?= $row['id'] ?>" class="text-decoration-none text-reset me-3"><i class="fa fa-thumbs-up text-primary"></i></a>
        <?php else: ?>
        <a href="index.php?discussion_id=<?= $row['id'] ?>" class="text-decoration-none text-reset me-3"><i class="far fa-thumbs-up"></i></a>
        <?php endif; ?>
        <span class="fw-bolder"><?= $row['like'] ?> Like<?= $row['like'] > 1 ? "s" : "" ?></span>
          </button>
          <button type="button" class = "btn btn-outline-dark" data-toggle="modal" data-target="#myModal">💬Comment</button>
          <button type="button" class = "btn btn-outline-dark" onclick="window.location.href='/Project/USER/usersystemrating.php?id=<?php echo $row["id"];?>'">☹️🙁😐🙂😀</button>
    </div>
</div>


<?php  
      }
} else {
    echo "No posts found.";
}

// Close the database connection
$conn->close();
?>


 <!-- Trigger the modal with a button -->
 <button type="button" class="btn btn-info btn-lg" id="myBtn">Open Modal</button>

 <script>
$(document).ready(function(){
$("#myBtn").click(function(){
  $("#myModal").modal();
});
});
</script>



<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>

</div>



       



    
  </body>
</html>