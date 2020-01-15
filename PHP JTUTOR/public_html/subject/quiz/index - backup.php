<?php include 'database.php'; ?>
<?php
/*
* Get total questions
*/
session_start();
$sub_id = $_GET['id'];
$name = $_GET['name'];
if(empty($sub_id) and empty($name)){
        header("Location: https://www.jtutor.ml/subject/Quiz/?id=".$id."&name=".$name);
}
$sql = "SELECT * FROM list WHERE sub_id='".$sub_id."' and filename='".$name."'";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tb_name = $row['question'];
        
    }
}


$query = "SELECT * FROM ".$tb_name;
//Get results
$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);	
$total = $results->num_rows;

if($total == 0 or empty($total)){
    //header("Location: https://www.jtutor.ml/subject/Quiz/?id=".$id."&name=".$name);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title> Quiz System</title>
<link href="css/button.css" link rel="stylesheet" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<header>
<div class="container">
<h1>Quiz </h1>

</div>
</header>
<main>
<div class="container">
<h2>Test your knowledge </h2>
<p>This is a mutiple choice quiz</p>
<ul>
<li><strong>Number of Questions:</strong><?php echo $total;  ?></li>
<li><strong>Type:</strong>Mutiple choice</li>
<li><strong>Estimated Time:</strong><?php echo $total * .5; ?> Minutes</li>


</ul>
<a href="question.php?id=<?echo $_GET['id']?>&name=<?echo $_GET['name']?>&n=1" class="button3">Start Quiz</a>
<a href="add.php?id=<?echo $_GET['id']?>&name=<?echo $_GET['name']?>&n=1" class="button3">Edit Quiz</a>

</div>

</main>
<footer>
<div class="container">
JTUTOR

</div>
</footer>

</body>
</html>