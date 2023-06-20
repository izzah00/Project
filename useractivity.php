<?php
$con = mysqli_connect("localhost","root","","mini_project");
if(!$con){
    echo "Problem in database connection...";
}else{

// SELECT discussion.id, discussion.likes FROM discussion INNER JOIN discussion_answer ON discussion.answer.id
// SELECT * FROM discussion

    $sql = "SELECT discussion.id, discussion.likes FROM discussion INNER JOIN discussion_answer ON discussion.answer_id";
    $result = mysqli_query($con,$sql);
    $chart_data = "";
    while($row = mysqli_fetch_array($result)){
        $dID[] = $row['discussion.id'];
        $dLike[] = $row['discussion.likes'];
        $daID[] = $row['discussion.answer_id'];

         
        // for(i=0;i<id.length;i++){}
        // $query = "SELECT COUNT(id) FROM discussion";
        // $result = mysqli_query($con,$query);
        // $chart_data = "";
        // while($row = mysqli_fetch_array($result)){
        //     $dID[] = "SELECT COUNT(id)";
        //     // $dLike[] = $row['likes'];
    
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>User Activity</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #88d1cb;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 20%;
  height: 300%; 
  /* only for demonstration, should be removed */
  background: #ddd;
  padding: 20px;
}
a:hover{
    background-color: white;
    color: black;
    border-radius: 8px;
}

.navbar li a{
    display: block;
    color: #000;
    padding: 15px 1px;
    text-decoration:none;
}

.user{
    text-align: left;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 3;
}

article {
  float: left;
  padding: 20px;
  width: 80%;
  background-color: #f1f1f1;
  height: 300%; 
  /* only for demonstration, should be removed */
}
/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>

</head>
    <body>

        <header>
        <img src="/banner.png" style= "width:100%; height: 10%">
        </header>

        <section>
        <nav>
                <ul class="navbar">
                    <li><a href="http://localhost/BCS2243/mini_project/usersystemrating.php">System Rating</a></li>
                    <li><a href="http://localhost/BCS2243/mini_project/reportlist.php">Report List</a></li>
                    <li><a href="http://localhost/BCS2243/mini_project/usersatisfaction.php">User Satisfaction</a></li>
                    <li><a href="http://localhost/BCS2243/mini_project/useractivity.php">User Activity</a></li>
                    <li><a href="menu1">Logout</a></li>
                </ul>
            </nav>
            
            <article>


                <div class=curgraph>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                    <canvas id="myChart1" style="width:100% width 100%; align-content:center;"></canvas>
                        <script>
                            var xValues = ["Posts", "Comments", "Likes"];
                            var yValues = [<?php echo json_encode($dLike);?>, 0, 0];
                            var barColors = [
                            "#F6C6EA","#F7D59C","#FF7878"];

                            new Chart("myChart1", 
                            {
                                type: "doughnut",
                                data: 
                                {
                                    labels: xValues,
                                    datasets: [{backgroundColor: barColors, data: yValues}]
                                },
                                options: 
                                {
                                    title: {
                                    display: true,
                                    text: "Current User Activity"
                                    }
                                }
                            });
                        </script>
                </div> 

                <h1>London</h1><?php echo json_encode($dLike);?><?php echo json_encode($dID);?><?php echo json_encode($daID);?>
                <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
                <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
                
            </article>
        </section>

        <footer>
            <p>Footer</p>
        </footer>

    </body>
</html>

