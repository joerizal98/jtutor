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
        $tb_student_answer = $row['student_answer'];
    }
}

//Check to see if score is set_error_handler
if(!isset($_SESSION['score'])){
	$_SESSION['score'] = 0;
}

if($_POST){
	$number = $_POST['number'];
	if($number == 1) {
 $_SESSION["score"] = 0;
}
	
	$selected_choice = $_POST['choice']; 
	$next = $number+1;
	
	$query = "SELECT * FROM `$tb_choice`
	           WHERE question_number =  $number AND is_correct = 1";
			   
	//get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
	//get row
	$row = $result->fetch_assoc();
	
	//set correct choice
	$correct_choice = $row['id'];
	
	//compare
	if($correct_choice == $selected_choice ){
		//answer is correct
		$is_correct = 1;
	}else{
	    $is_correct = 0;
	}
	
	$student_answer="select * from ".$tb_student_answer." where student='".$_SESSION['User']."' and id='".$number."'";
    $result_answers = $mysqli->query($student_answer);

    if($result_answers->num_rows > 0){
    	
    	$sql_answer = "UPDATE $tb_student_answer SET answer='".$selected_choice."', is_true='".$is_correct."' WHERE student='".$_SESSION['User']."' and id='".$number."'";
    	echo "Error updating record: " . $mysqli->error;
    }else{

    	$sql_answer = "INSERT INTO $tb_student_answer (student, id, answer, is_true) 
    	VALUES ('".$_SESSION['User']."', '".$number."', '".$selected_choice."', '".$is_correct."')";
    	echo "Error updating insert: " . $conn->error;
    }
    if ($mysqli->query($sql_answer) === TRUE) {
        
		$query = "SELECT * FROM `$tb_name`";
    	//get result
    	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
    	$total = $results->num_rows;
    	if($number == $total){
			header("Location: final.php?id=".$_GET['id']."&name=".$_GET['name']."&no=".$total);
			exit();
		}else{
			header("Location: question.php?id=".$_GET['id']."&name=".$_GET['name']."&n=".$next);
		}
    }else{
        echo "Error updating record or insert: " . $mysqli->error;
    }
}
?>