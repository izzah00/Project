<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/Project/USER/css/main.css" rel="stylesheet">

    <title>Discussion Board</title>
  </head>
  <script>
    document.getElementById('clickButton').addEventListener('click', function() {
    var postId = $id; // Replace with the actual post ID
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'update_count.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText); // Optional: Print response from PHP script
        }
    };
    xhr.send('button_id=1&id=' + postId); // Pass the button ID and post ID
});

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
        <img src="gambar/banner.png" style="height: 150px; width:1325px;">
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
            <a class="nav-link">Report</a>
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

        </div>

        <div class="post bg-white border-gray mt-4 ml-10">
            <div class="pt-2 d-flex justify-content-between">
                <div class="d-flex">
                    <img class="post-profile rounded-circle" src="gambar/profile.jpg">
                    <div class="d-flex flex-column p-2">
                        <span class="fw-bold fs-6">Mohammad Amzar</span>
                        <span class="text-gray-darker fs-8">Asked by : 9 June, 2023 </span>
                    </div>
                </div>
                <div class="p-2 text-gray-darker">
                    <button class="btn rounded-circle hover-dark p-1" >
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="currentColor"><path d="m249-207-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg>
                    </button>
                </div>
            </div>
            <div class="post-body pt-2 ps-3" ></div>
            <div class="post title fw-bold p-3">
                <a class="text-decoration-none text-black" href="#">
                    How to create a website?
                </a>
            </div>
            <div class="post-text pt-1 p-3">
                Text of the post. Text of the post.
                Text of the post. Text of the post.
                Text of the post. Text of the post.
                Text of the post. Text of the post.
            </div>
            <div class="post-footer  pb-1 pt-3" >
            <div class="row text-gray-darker pb-1 ps-4 pe-4">
            <div class="col text-center border-end hover-dark">
            <span>
            <button id="clickButton">Like</button>
            </span>
            </div>
            <div class="col text-center border-end hover-dark">
                    <img src="gambar/comment2.png" width="20px" height="20px">
                    <span>Comment</span>
                </div>
                <div class="col text-center border-end hover-dark">
                    <img src="gambar/report.png" width="20px" height="20px">
                    <span>Report</span>
                </div>
            </div>
          </div>
        </div>

          <div class="post bg-white border-gray mt-4 ml-10" id="post">
            <div class="pt-2 d-flex justify-content-between">
                <div class="d-flex">
                    <img class="post-profile rounded-circle" src="gambar/profile.jpg">
                    <div class="d-flex flex-column p-2">
                        <span class="fw-bold fs-6">Emylia Aqila</span>
                        <span class="text-gray-darker fs-8">Asked by : 9 June, 2023 </span>
                    </div>
                </div>
                <div class="p-2 text-gray-darker">
                    <button type="button" class="btn rounded-circle hover-dark p-1"  onclick="delete(1)">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="currentColor"><path d="m249-207-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg>
                    </button>
                </div>
            </div>
            <div class="post-body pt-2 ps-3" ></div>
            <div class="post title fw-bold p-3">
                <a class="text-decoration-none text-black" href="#">
                    How to create a responsive website ?
                </a>
            </div>
            <div class="post-text pt-1 p-3">
                Text of the post. Text of the post.
                Text of the post. Text of the post.
                Text of the post. Text of the post.
                Text of the post. Text of the post.
            </div>
            <div class="post-footer pb-1 pt-3">
          <button type="button" class = "btn btn-outline-dark" onclick="window.location.href='/Project/USER/view.php?id=<?php echo $row["id"];?>'">View</button>
          <button type="button" class = "btn btn-outline-dark" onclick="window.location.href='/Project/USER/edit.php?id=<?php echo $row["id"];?>'">🖊️ Edit</button>
          <button type="button" class = "btn btn-outline-dark" onclick="window.location.href='/Project/USER/usersystemrating.php?id=<?php echo $row["id"];?>'">☹️🙁😐🙂😀</button>
          
    
    </div>
      </div>
      
    </div>
</div>
    
  </body>
</html>