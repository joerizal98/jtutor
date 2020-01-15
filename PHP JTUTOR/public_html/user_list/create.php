<?php
    $sub1 = $_GET['sub1'];
    $sub2 = $_GET['sub2'];
    $name = $_GET['name'];

    
    require_once('connection.php');
	$sql1 = "select * from subject where code='".$sub1."'";
	$result1 = $con->query($sql1);
	
	$sql2 = "select * from subject where code='".$sub2."'";
	$result2 = $con->query($sql2);
	while($row1 = $result1->fetch_assoc()) {
	    $subs1 = strtolower($row1['subject']);
	    $subject1 = ucwords($subs1);
	    
	    
	    
	}
	
	while($row2 = $result2->fetch_assoc()) {
	    $subs2 = strtolower($row2['subject']);
	    $subject2 = ucwords($subs2);
	}
	
	$sql = "INSERT INTO platform (no, name, code, subject, id)
    VALUES (null, '$_GET[""]', 'john@example.com')";
    
    if ($conn->query($sql) === TRUE) {
        if(mkdir($subject1." - ".$name, 0777, true) and mkdir($subject2." - ".$name, 0777, true)){
            header("location: ../user_list?alert=success");
        }else{
            //header("location: ../user_list?alert=error");
            echo "error create folder";
        }
    } else {
        //header("location: ../user_list?alert=error");
        echo "error insert to platform";
    }
	
	    
	if(mkdir($subject1." - ".$name, 0777, true) and mkdir($subject2." - ".$name, 0777, true)){
        header("location: ../user_list?alert=success");
    }else{
        header("location: ../user_list?alert=error");
    }
	
?>