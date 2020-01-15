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
	        	$Password = $row['password'];
        	}
        }
        
?>