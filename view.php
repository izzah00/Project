<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Question Details</title>
    <style>
        .book-details{
            background : #f5f5f5;
            padding: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Question Details</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class = "book-details my-4 ">
            <?php
               if(isset($_GET["id"])){
                $id = $_GET["id"];
                include("connect.php");
                $sql = "SELECT * FROM discussion where id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result); 
                ?>
                    <h2>Topic</h2>
                    <p><?php echo $row["type"];?></p>
                    <h2>Title</h2>
                    <p><?php echo $row["title"];?></p>
                    <h2>Question</h2>
                    <p><?php echo $row["question"];?></p>
                    <h2>Date</h2>
                    <p><?php echo $row["date"];?></p>
                <?php
               }
            ?>
        </div>
    </div>
</body>
</html>