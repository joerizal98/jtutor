<?php
if(isset($_GET['sub1']) && isset($_GET['sub2']) AND isset($_GET['name']) && !empty($_GET['usr'])){
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
	    $cat1 = $row1['academic'];
	    
	    
	    
	}
	
	while($row2 = $result2->fetch_assoc()) {
	    $subs2 = strtolower($row2['subject']);
	    $subject2 = ucwords($subs2);
	    $cat2 = $row2['academic'];
	}
	
	
        if(mkdir($subject1." (".$cat1.") - ".$name, 0755, true) and mkdir($subject2." (".$cat2.") - ".$name, 0755, true)){
            header("location: ../user_list?alert=success");
        }else{
            echo "not working";
        }
}else{
    header("location: ../user_list");
}	
	
?>