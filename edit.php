<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Edit Question</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Question</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>

        <?php
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            include("connect.php");
            $sql = "SELECT * FROM discussion WHERE id=$id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result); 
        ?>
            <form action="process.php" method="post">
                <div class="form-group my-4">
                    <select name="type" class="form-control">
                        <option value="">Select Topic</option>
                        <option value="Computer Science" <?php if($row['type'] == "Computer Science"){echo "selected";}?>>Computer Science</option>
                        <option value="Software Engineering" <?php if($row['type'] == "Software Engineering"){echo "selected";}?>>Software Engineering</option>
                        <option value="Graphic & Multimedia" <?php if($row['type'] == "Graphic & Multimedia"){echo "selected";}?>>Graphic & Multimedia</option>
                    </select>
                </div>
                <div class="form-group my-4">
                    <input type="text" class="form-control" name="title" value="<?php echo $row["title"];?>" placeholder="Title">
                </div>
                <div class="form-group my-4">
                    <input type="text" class="form-control" name="question" value="<?php echo $row["question"];?>" placeholder="Question">
                </div>
                <div class="form-group my-4">
                    <input type="date" name="date" class="form-control">
                </div>
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                <div class="form-group">
                    <input type="submit" class="btn btn-success" name="edit" value="Edit Question">
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</body>
</html>
