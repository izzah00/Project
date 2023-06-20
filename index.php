<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/Project/USER/css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Question List</title>
</head>
<body>


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
            <a class="nav-link">Report</a>
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

    <div class="container">
    <header class="d-flex justify-content-between my-4">
            <h1>Question List</h1>
        </header>
        <?php
        session_start();
        if(isset($_SESSION["create"])){
           ?>
           <div class="alert alert success">
             <?php 
              echo $_SESSION["create"];
              unset($_SESSION["create"]);
             ?>
           </div>
           <?php 
        }
        ?>
        <?php
        if(isset($_SESSION["edit"])){
           ?>
           <div class="alert alert success">
             <?php 
              echo $_SESSION["edit"];
              unset($_SESSION["edit"]);
             ?>
           </div>
           <?php 
        }
        ?>
        <?php
        if(isset($_SESSION["delete"])){
           ?>
           <div class="alert alert success">
             <?php 
              echo $_SESSION["delete"];
              unset($_SESSION["delete"]);
             ?>
           </div>
           <?php 
        }
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Topic</th>
                    <th>Title</th>
                    <th>Question</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");
                $sql = "SELECT * FROM discussion";
                $result = mysqli_query($conn,$sql);
                
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["id"];?></td>
                        <td><?php echo $row["type"];?></td>
                        <td><?php echo $row["title"];?></td>
                        <td><?php echo $row["question"];?></td>
                        <td><?php echo $row["date"];?></td>
                        <td>
                            <a href="view.php?id=<?php echo $row["id"]; ?>" class = "btn btn-info">👀</a>
                            <a href="edit.php?id=<?php echo $row["id"]; ?>" class = "btn btn-warning">🖊️</a>
                            <a href="delete.php?id=<?php echo $row["id"]; ?>" class = "btn btn-danger">🗑️</a>


                        </td>
                    </tr>
                <?php
                }
                
                ?>   
            </tbody>
        </table>
    </div>
    
</body>
</html>