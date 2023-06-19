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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

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
            <a class="nav-link" href="DiscussionBoard.php">Discussion Board</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ReportUser.php">Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Complaint</a>
          </li>
        </ul>
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
                    <img class="profile rounded-circle" src="assets/profile.jpg" width="20px" height="20px">
                    <input class="w-75 border-gray text-gray-dark rounded-pill bg-light ps-2 text-start" type="text" placeholder="What do you want to ask or share?"/>
                </div>
            </div>

           

            <div class="row text-gray-darker pb-2 ps-4 pe-4">
                <div class="col text-center border-end hover-dark">
                    <img src="assets/ask.png" width="20px" height="20px">
                    <span>Ask</span>
                </div>
                <div class="col text-center border-end hover-dark">
                    <img src="assets/answer.png" width="20px" height="20px">
                    <span>Answer</span>
                </div>
                <div class="col text-center border-end hover-dark">
                    <img src="assets/post.png" width="20px" height="20px">
                    <span>Post</span>
                </div>
            </div>
            <div>
        </div>
        </div>


        
<?php
include("connect.php");
// Retrieve posts from the database
$sql = "SELECT d.*, s.student_name FROM discussion d INNER JOIN student_staff s ON d.student_id = s.student_id";
$result = $conn->query($sql);

// Display each post
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $type = $row["type"];
        $title = $row["title"];
        $question = $row["question"];
        $date = $row["date"];
        $stdname = $row["student_name"];
 ?>   
    
    <div class="post bg-white border-gray mt-4 ml-10">
    <div class="pt-2 d-flex justify-content-between">
        <div class="d-flex">
            <img class="post-profile rounded-circle" src="gambar/profile.jpg">
            <div class="d-flex flex-column p-2">
                <span class="fw-bold fs-10"><?php echo $stdname = $row["student_name"]; ?></span>
                <span class="text-gray-darker fs-6">Asked by: <?php echo $date = $row["date"];?> Topic: <?php echo $type = $row["type"]; ?></span>
                
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
    <div class="post-footer pb-1 pt-3">
          <button type="button" class = "btn btn-outline-dark" onclick="window.location.href='/Project/USER/view.php?id=<?php echo $row["id"];?>'">View</button>
          <button type="button" class = "btn btn-outline-dark" onclick="window.location.href='/Project/USER/edit.php?id=<?php echo $row["id"];?>'">🖊️ Edit</button>
          <button type="button" class = "btn btn-outline-dark" onclick="window.location.href='/Project/USER/usersystemrating.php?id=<?php echo $row["id"];?>'">Give Feedback</button>
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

       



    
  </body>
</html>