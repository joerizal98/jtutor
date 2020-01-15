<!DOCTYPE html>
<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
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


	if(empty($_GET['id']) and empty($_GET['code'])){
		//die("Not Quiz Found");
	}else{

	}
	if(isset($_POST['submit'])){
		//Get post variables
		$question_number = $_POST['question_number'];
		$question_text = $_POST['question_text'];
		$correct_choice = $_POST['correct_choice'];
		//Choices array
		$choices = array();
		$choices[1] = $_POST['choice1'];
		$choices[2] = $_POST['choice2'];
		$choices[3] = $_POST['choice3'];
		$choices[4] = $_POST['choice4'];
		$choices[5] = $_POST['choice5'];
		
		//Question query
		$query = "INSERT INTO `$tb_name`(question_number, text)
					VALUES('$question_number','$question_text')";
					
		//Run query
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		
		//Validate insert
		if($insert_row){
			foreach($choices as $choice => $value){
				if($value != ''){
					if($correct_choice == $choice){
						$is_correct = 1;
					} else {
						$is_correct = 0;
					}
					//Choice query
					$query = "INSERT INTO `$tb_choice` (question_number, is_correct, text)
							VALUES ('$question_number','$is_correct','$value')";
							
					//Run query
					$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
					
					//Validate insert
					if($insert_row){
						continue;
					} else {
						die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
					}
				}
			}
			$msg = 'Question has been added';
		}
	}
	
	/*
 	* Get total questions
	*/
	$query = "SELECT * FROM `$tb_name`";
	//Get The Results
	$questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $questions->num_rows;
	$next = $total+1;
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="add/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="add/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="add/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="add/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="add/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="add/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="add/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="add/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="add/css/util.css">
	<link rel="stylesheet" type="text/css" href="add/css/main.css">
<!--===============================================================================================-->
</head>
<body>
                <?php
    				if(isset($msg)){
    					echo "<script type='text/javascript'>alert('$msg');</script>";
    				}
			    ?>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="add.php?id=<?echo $_GET['id']?>&name=<?echo $_GET['name']?>">
			    <input type="hidden" value="<?php echo $next; ?>" name="question_number" />
				<span class="contact100-form-title">
					QUESTION <?php echo $next; ?>
				</span>
                
				<label class="label-input100" for="message">Question Text *</label>
				<div class="wrap-input100 validate-input">
					<textarea id="message" class="input100" name="question_text" placeholder="Question Text...." requied></textarea>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Choice 1 *</label>
				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="text" name="choice1" placeholder="Choice 1" required>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Choice 2 *</label>
				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="text" name="choice2" placeholder="Choice 2" required>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Choice 3</label>
				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="text" name="choice3" placeholder="Choice 3">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Choice 4</label>
				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="choice4" placeholder="Choice 4">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" style="width: 20%">
					<input id="email" class="input100" type="number" name="correct_choice" placeholder="Answer*" required>
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" name="submit">
						<span>
							Add Question
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="add/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="add/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="add/vendor/bootstrap/js/popper.js"></script>
	<script src="add/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="add/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="add/vendor/daterangepicker/moment.min.js"></script>
	<script src="add/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="add/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="add/js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<? include('../../cursor.html'); ?>
</body>
</html>
