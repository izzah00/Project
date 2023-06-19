<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Add New Question</title>
</head>
<body>
    <div class ="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Add New Question</h1>
            <div>
                <a href="DiscussionBoard.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method = "post">
            <div class = "form-element my-4">
                <select name="type" class="form-control">
                    <option value="">Select Topic</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Software Engineering">Software Engineering</option>
                    <option value="Graphic & Multimedia">Graphic & Multimedia</option>
                </select>
            </div>
            <div class = "form-element my-4">
                <input type="text" class="form-control" name ="title" placeholder="Title">
            </div>
            <div class = "form-element my-4">
                <input type="text" class="form-control" name ="question" placeholder="Write your question">
            </div>
            
            <div class = "form-element my-4">
               <input type="date" name="date" class="form-control">
            </div>
            <div class="form-element">
                <input type="submit" class ="btn btn-success" name="create" value="Add Question">
            </div>
        </form>
    </div>

</body>
</html>