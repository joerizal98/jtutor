<?php
	require_once('connection.php');
	$sql1 = "select * from confim_tutor where username='".$_POST['user']."'";
    $result1 = $con->query($sql1);
    $pass = rand(1000,9000);
	while($row = $result1->fetch_assoc()) {
		$mysqli = new mysqli('localhost','u779679936_jtu0','yGW442MtTygp','u779679936_jtut');
	    $username = $mysqli->real_escape_string($row['username']);
	    $password = $mysqli->real_escape_string($pass);
	    $role = $mysqli->real_escape_string($row['role']);
	    $email = $mysqli->real_escape_string($row['email']);
	    $firstname = $mysqli->real_escape_string($row['fname']);
	    $lastname = $mysqli->real_escape_string($row['lname']);
	    $date = $mysqli->real_escape_string($row['birthday']);
	    $gender = $mysqli->real_escape_string($row['gender']);
	    $pnumber = $mysqli->real_escape_string($row['no']);
	    $address =  $mysqli->real_escape_string($row['address']);
	    $sub1 = $mysqli->real_escape_string($row['subject1']);
        $sub2 = $mysqli->real_escape_string($row['subject2']);
        $hash = $mysqli->real_escape_string($row['hash']);
        $dp = $mysqli->real_escape_string($row['dp']);
        $chat_color = $mysqli->real_escape_string(sprintf("#%06x",rand(0,16777215)));
        $folder = $mysqli->real_escape_string($row['folder']);
        
        $name = ucwords($firstname." ".$lastname);
        $dbname = $mysqli->real_escape_string($name);

	    $sql = "INSERT INTO user (username, password, role, email, fistname, lastname, birthday, gender, pnumber, address, chat_color, online_status, dp, folder)" . "VALUES ('$username', MD5($password), 'teacher', '$email', '$firstname', '$lastname', '$date', '$gender', '$pnumber', '$address', '$chat_color', '0', '$dp', '$folder')";

	    if ($mysqli->query($sql) == true){
	        $code1 =  rand(10000,55555);
	        $code2 = rand(66666,99999);
		    $sql1 = "INSERT INTO tutor (no, subject, name, code, username)" . "VALUES ('null', '$sub1', '$dbname','$code1', '$username'), ('null', '$sub2', '$dbname', '$code2', '$username')";

		    if ($mysqli->query($sql1) == true){
		    	$sql = "DELETE FROM confim_tutor WHERE username='".$username."'";

				if ($con->query($sql) === TRUE) {
		        	//header(" location: /mail.php?user='".$username."'&hash='".$hash."'&subjt1='".$sub1."'&subjt2='".$sub2."'");
		        	$name = ucwords($firstname." ".$lastname);
		        	header("location:mail.php?user=".$username."&pass=".$password."&email=".$email."&sub1=".$sub1."&sub2=".$sub2."&name=".$name."");
				} else {
				    echo "Error deleting record: " . $conn->error;
				}
		        
		    }else{
		        echo "<script type='text/javascript'>alert('Database Error  asdasdasdasd!');</script>";
		        //echo 'window.location.href="../user_list";</script>';
		    }

	    }else{
	        echo "<script type='text/javascript'>alert('Database Error 111111!');</script>";
	        echo("Error description: " . mysqli_error($mysqli));
	    }
	    
    }
?>