<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/Project/USER/css/main.css" rel="stylesheet">

    <title>User Profile</title>
</head>
<body>
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
            <a class="nav-link" href="index.php">Discussion Board</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Complaint</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="card border-danger m-3">
  <h5 class="card-header">Profile</h5>
  <div class="card-body">
  <form action="" method="POST">
              <div class="form-group">
                <label for="profile-picture">Profile Picture</label><br>
                <img src="gambar/profile.jpg" class="user-profile" alt="...">
                <div class="profile-picture-container">
                </div>
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="madi22">
              </div>
              <div class="form-group">
                <label for="gender">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="Madihah">
              </div>
              <div class="form-group">
                <label for="gender">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Hafiz">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password" name="password" placeholder="12345">
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="madihah@gmail.com">
              </div>
              <div class="form-group">
                <label for="research-area">Research Area</label>
                <select name="researcharea" class="form-control">
                        <option value="science">Computer Science</option>
                        <option value="se">Software Engineering</option>
                        <option value="multimedia">Graphic & Multimedia</option>
                        <option value="system">Computer Systems & Networking</option>
                        <option value="information">Information Systems</option>
                        <option value="security">Cyber Security</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="academic-status">Academic Status</label>
                        <select id="course" name="course" class="form-control"> 
                        <option value="diploma">Diploma of Computer Science</option>
                        <option value="software">Bachelor of Computer Science(Software Engineering)</option>
                        <option value="graphic">Bachelor of Computer Science(Graphic & Multimedia)</option>
                        <option value="network">Bachelor of Computer Science(Computer Systems & Networking)</option>
                        <option value="cyber">Bachelor of Computer Science(Cyber Security)</option>
                        <option value="it">Master of Science (Information & Communication Technology)</option>
                        <option value="master">Master of Science (Software Engineering)</option>
                        <option value="computer">Master of Science (Computer Networking)</option>
                        </select>
              </div>
              
     </form>
  
<div><br>
<button type="submit" class="btn btn-success">Edit</button>
</div>

    
</body>
</html>