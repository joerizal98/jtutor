<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
//Set question number
$number = (int) $_GET['n'];
$sub_id = $_GET['id'];
$name = $_GET['name'];

/*
* Get Table Name
*/
$sql = "SELECT * FROM list WHERE sub_id='".$sub_id."' and filename='".$name."'";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tb_name = $row['question'];
        $tb_choice = $row['answer'];
    }
}



/*
* Get total questions 
*/
$query = "SELECT * FROM `$tb_name`";
//get result
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;



/*
* Get Question
*/
$query = "SELECT * FROM `$tb_name`
           WHERE question_number = $number";
		   
//Get result
$result = $mysqli->query($query) or die ($mysqli->error.__LINE__);	

$question = $result->fetch_assoc();


/*
* Get Choices
*/
$query = "SELECT * FROM `$tb_choice`
           WHERE question_number = $number";
		   
//Get results
$choices = $mysqli->query($query) or die ($mysqli->error.__LINE__);	


	   

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title> Quiz System</title>
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
<div class="current"><span id="quest">Question</span> <?php echo $question['question_number']; ?>  of <?php echo $total; ?> </div>
<p class="question">
<?php echo $question['text']; ?>

</p>
<form method="post" action="process.php?id=<?echo $_GET['id']?>&name=<?echo $_GET['name']?>">
<ul class="choices">

<?php while($row = $choices->fetch_assoc()): ?>
<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li>
<?php endwhile; ?>




</ul>


<input type="submit" value="Next"/>
<input type="hidden" name="number" value="<?php echo $number; ?>" />

</form>


</div>

</main>
<footer>
<div class="container">
JTUTOR

</div>
</footer>

</body>
</html>