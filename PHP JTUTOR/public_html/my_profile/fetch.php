<?php
	require_once('connection.php');
	if ($con->connect_error) {
          die("Connection failed: " . $con->connect_error);
        }

        //student database
        $sql = "select * from user where username='".$_SESSION['User']."'";
        $result = $con->query($sql);
        //tutor database
        //$sql1 = "select * from confim_tutor where username='".$_SESSION['User']."'";
        //$result1 = $con->query($sql1);

        if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
        		//fetch data if student
	        	$usr = $row['username'];
	        	$fname = $row['fistname'];
	        	$lname = $row['lastname'];
	        	$role = $row['role'];
	        	$email = $row['email'];
	        	$no = $row['pnumber'];
	        	$date = $row['birthday'];
	        	$gender = $row['gender'];
	        	$address = $row['address'];
	        	$dp = $row['dp'];
	        	$Password = $row['password'];
	        	$folder = $row['folder'];
	        	if ($dp == 'user.png'){
	        	    $avatar = $dp;
	        	}else{
	        	    $avatar = $folder."/".$dp;
	        	}
        	}
        }else{
        	//if ($result1->num_rows > 0) {
	        //	while($row = $result->fetch_assoc()) {
	        		//fetch data if tutor
	        //	$usr = $row['username'];
	        //	$fname = $row['fistname'];
	        //	$lname = $row['lastname'];
	        //	$role = $row['role'];
	        //	}
	        //}else{
	        //	echo "error"; die;
	        //}
        }
        
?>