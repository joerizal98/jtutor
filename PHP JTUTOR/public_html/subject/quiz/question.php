<!DOCTYPE html>
<?php include 'database.php'; ?>
<?php include 'header.php'; ?>
<?php session_start(); ?>
<?php
//Set question number
$number = (int) $_GET['n'];
$sub_id = $_GET['id'];
$name = $_GET['name'];

if($number > 1){
    $question_no = $number - 1;
    $address = "https://www.jtutor.ml/subject/quiz/question.php?id=".$sub_id."&name=".$name."&n=".$question_no;
}else{
    $address = '';
}

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
        $tb_student = $row['student_answer'];
    }
}

$sql_answer = "SELECT * FROM ".$tb_student." WHERE student='".$_SESSION['User']."' and id='".$number."'";
$result_answer = $mysqli->query($sql_answer);
if ($result_answer->num_rows > 0) {
    // output data of each row
    while($row_answer = $result_answer->fetch_assoc()) {
        $user_answer = $row_answer['answer'];
        $checked = 'checked';
    }
}else{
    $checked = '#';
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

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable = no">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="question assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="question assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="question assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="question assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="question assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="question assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="question assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <?
	    if($question['question_number'] == $total){
	        $btn = "finish.png";
	        $btn_hover = "finish hover.png";
	    }else{
	        $btn = "next.png";
	        $btn_hover = "next hover.png";
	    }
	?>

	<style type="text/css">
		.next{
			background-image:url('question assets/images/<?echo $btn;?>');
			background-size:     200px 80px;                      /* <------ */
  			background-repeat:   no-repeat;
			width: 200px;
			height: 80px;
		}
		/*.next:hover{
			background-size:     200px 80px;                     
  			background-repeat:   no-repeat;
			width: 200px;
			height: 80px;
		}*/

		.previous{
			background-image:url('question assets/images/previous.png');
			background-size:     200px 80px;                      /* <------ */
  			background-repeat:   no-repeat;
			width: 200px;
			height: 80px;
		}
		/*.previous:hover{
			background-size:     200px 80px;                      
  			background-repeat:   no-repeat;
			width: 200px;
			height: 80px;
		}
		*/
	</style>
	

	<div class="bg-contact2" style="background-image: url('question assets/images/background.jpg');background-size: cover">
<form method="post" action="process.php?id=<?echo $_GET['id']?>&name=<?echo $_GET['name']?>" target="_parent">
		<div class="container-contact2" style="padding-top: 100px">
			<div class="wrap-contact2" style="justify-content: center">
				<table style="color: white; width: 67%; height:80%;margin:auto; align-self: center;">
					<th valign="center" align="center">
						<table >
							<tr style="padding: 5%">
								<th valign="top" style="width: 5%"><?php echo $question['question_number']; ?>. &nbsp</th>
								<th style="padding-bottom: 2%"> <?php echo $question['text']; ?></th>
							</tr>
							<?php while($row = $choices->fetch_assoc()): 
							if($user_answer == $row['id']){
							?>
                            <tr>
								<td></td>
								<td valign="top"><input type="radio" name="choice" value="<?php echo $row['id']; ?>" <?php echo $checked; ?> > &nbsp; <?echo $row['text']; ?> </td>
                        <?php 
							}else{
                            echo'<tr>
								<td></td>
								<td valign="top"><input type="radio" name="choice" value="'.$row['id'].'" > &nbsp; '.$row['text'].'</td>
							</tr>';
                            }
                            endwhile; ?>
							
						</table>

					</th>
				</table>
			</div>
			<div class="container" style="text-align: center">
				<button class="previous" onmouseover="bigImg(this)" onmouseout="normalImg(this)" type="button" onclick="location.href='<?echo $address;?>';"></button>
					<span style="padding-left: 50px"></span>
				<button class="next" onmouseover="bigImg2(this)" onmouseout="normalImg2(this)" type="submit"></button>
				<input type="hidden" name="number" value="<?php echo $number; ?>" />
			</div>
        </form>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="question assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="question assets/vendor/bootstrap/js/popper.js"></script>
	<script src="question assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="question assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="question assets/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        function bigImg(x) {
            x.style.backgroundImage = "url('https://www.jtutor.ml/subject/quiz/question assets/images/previous hover.png')";
        }
        
        function normalImg(x) {
            x.style.backgroundImage = "url('https://www.jtutor.ml/subject/quiz/question assets/images/previous.png')";
        }
        
        function bigImg2(x) {
            x.style.backgroundImage = "url('https://www.jtutor.ml/subject/quiz/question assets/images/<?echo $btn_hover;?>')";
        }
        
        function normalImg2(x) {
            x.style.backgroundImage = "url('https://www.jtutor.ml/subject/quiz/question assets/images/<?echo $btn;?>')";
        }
	</script>
</body>
</html>
