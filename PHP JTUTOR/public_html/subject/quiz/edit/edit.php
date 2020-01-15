<!DOCTYPE html>
<?php include '../database.php'; ?>
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
    
    $sql_question = "SELECT * FROM ".$tb_name." WHERE question_number='".$_GET['qno']."'";
    $result_question = $mysqli->query($sql_question);
    if ($result_question->num_rows > 0) {
        // output data of each row
        while($row_question = $result_question->fetch_assoc()) {
            $question_text = $row_question['text'];
        }
    }
    
    $sql_choice = "SELECT text FROM ".$tb_choice." WHERE question_number='".$_GET['qno']."'";
    $result_choice = $mysqli->query($sql_choice);
    if ($result_choice->num_rows > 0) {
        // output data of each row
        $r = array();
        while($row_choice = $result_choice->fetch_array()){
            $r[] = $row_choice;
        }
        
    }
    
    
    $sql_correct = "SELECT * FROM ".$tb_choice." WHERE question_number='".$_GET['qno']."' and is_correct='1'";
    $result_correct = $mysqli->query($sql_correct);
    if ($result_correct->num_rows > 0) {
        // output data of each row
        while($row_correct = $result_correct->fetch_assoc()) {
            $question_correct = $row_correct['text'];
            
        }
    }
    
    $a = array("1"=>$r[0]['text'],"2"=>$r[1]['text'],"3"=>$r[2]['text'],"4"=>$r[3]['text']);
    $answer_correct = array_search($question_correct,$a);
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../add/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../add/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../add/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../add/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../add/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../add/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../add/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../add/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../add/css/util.css">
	<link rel="stylesheet" type="text/css" href="../add/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background:transparent;">

	<div class="container-contact100" style="background:transparent;">
		<div class="wrap-contact100" style="background:transparent;">
			<form class="contact100-form validate-form" method="post" action="update.php?id=<?echo $_GET['id']?>&name=<?echo $_GET['name']?>&qnum=<?echo $_GET['qno'];?>">
			    <input type="hidden" value="<?php echo $_GET['qno']; ?>" name="question_number" />
				<span class="contact100-form-title">
					QUESTION <?php echo $_GET['qno']; ?>
				</span>
                
				<label class="label-input100" for="message">Question Text *</label>
				<div class="wrap-input100 validate-input" style="background-color:white;">
					<textarea id="message" class="input100" name="question_text" placeholder="Question Text...." requied><?echo $question_text;?></textarea>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Choice 1 *</label>
				<div class="wrap-input100 validate-input" style="background-color:white;">
					<input id="email" class="input100" type="text" name="choice1" placeholder="Choice 1" required value="<?echo $r[0]['text'];?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Choice 2 *</label>
				<div class="wrap-input100 validate-input" style="background-color:white;">
					<input id="email" class="input100" type="text" name="choice2" placeholder="Choice 2" required value="<?echo $r[1]['text'];?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Choice 3</label>
				<div class="wrap-input100 validate-input" style="background-color:white;">
					<input id="email" class="input100" type="text" name="choice3" placeholder="Choice 3" value="<?echo $r[2]['text'];?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Choice 4</label>
				<div class="wrap-input100 validate-input" style="background-color:white;">
					<input class="input100" type="text" name="choice4" placeholder="Choice 4" value="<?echo $r[3]['text'];?>">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" style="width: 20%" style="background-color:white;">
					<input id="email" class="input100" type="number" name="correct_choice" placeholder="Answer*" required style="background-color:white;" value="<? echo $answer_correct;?>">
				</div>
				
				<style>
				    .contact100-form-btn2:hover i {
                        -webkit-transform: translateX(10px);
                        -moz-transform: translateX(10px);
                        -ms-transform: translateX(10px);
                        -o-transform: translateX(10px);
                        transform: translateX(-10px);
                    }
                    .contact100-form-btn2 i {
                        -webkit-transition: all 0.4s;
                        -o-transition: all 0.4s;
                        -moz-transition: all 0.4s;
                        transition: all 0.4s;
                    }
                    .contact100-form-btn2 {
                        font-family: Raleway-Bold;
                        font-size: 16px;
                        color: #fff;
                        line-height: 1.2;
                        display: -webkit-box;
                        display: -webkit-flex;
                        display: -moz-box;
                        display: -ms-flexbox;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        padding: 0 20px;
                        min-width: 150px;
                        height: 55px;
                        border-radius: 27px;
                        background: #d867c6;
                        background: -webkit-linear-gradient(45deg, #c77ff2, #e8519e);
                        background: -o-linear-gradient(45deg, #c77ff2, #e8519e);
                        background: -moz-linear-gradient(45deg, #c77ff2, #e8519e);
                        background: linear-gradient(45deg, #c77ff2, #e8519e);
                        position: relative;
                        z-index: 1;
                        -webkit-transition: all 0.4s;
                        -o-transition: all 0.4s;
                        -moz-transition: all 0.4s;
                        transition: all 0.4s;
                    }
                    .contact100-form-btn2:hover:before {
                        opacity: 0;
                    }
                    
                    .contact100-form-btn2::before {
                        content: "";
                        display: block;
                        position: absolute;
                        z-index: -1;
                        border-radius: 27px;
                        width: 100%;
                        height: 100%;
                        top: 0;
                        left: 0;
                        background: #333333;
                        opacity: 1;
                        -webkit-transition: all 0.4s;
                        -o-transition: all 0.4s;
                        -moz-transition: all 0.4s;
                        transition: all 0.4s;
                    }
				</style>
				
				<div class="container-contact100-form-btn">
				<button class="contact100-form-btn2" type="button" style="width:40%; margin-right:20px" onclick="javascript:location.href='<?echo 'index.php?id='.$sub_id.'&name='.$name;?>'">
				    <span>
				        <i class="zmdi zmdi-arrow-left m-l-8"></i>&nbsp;&nbsp;
						Question List
					</span>
				</button>
				
				<button class="contact100-form-btn" type="submit" name="submit" style="width:40%">
						<span>
							Update Question
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="../add/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../add/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../add/vendor/bootstrap/js/popper.js"></script>
	<script src="../add/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../add/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../add/vendor/daterangepicker/moment.min.js"></script>
	<script src="../add/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../add/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../add/js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<? include('../../../cursor.html'); ?>
</body>
</html>
