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

	if(isset($_POST['submit'])){
	    $sql11 = "DELETE FROM ".$tb_name." WHERE question_number='".$_POST['question_number']."'";
	    $sql12 = "DELETE FROM ".$tb_choice." WHERE question_number='".$_POST['question_number']."'";
		//Get post variables
		if ($mysqli->query($sql11) === TRUE and $mysqli->query($sql12) === TRUE){
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
    			echo $mgs;
    			header("location: index.php?id=".$_GET['id']."&name=".$_GET['name']."&qnum=".$_GET['qno']."&msg=".$mgs);
    		}
		}else{
		    $msg2 = 'Question Failed to Update';
		    echo $mgs2;
		    header("location: index.php?id=".$_GET['id']."&name=".$_GET['name']."&qnum=".$_GET['qno']."&msg=".$msg2);
		}
	}
?>