$sql1 = "INSERT INTO tutor (no, subject, name)" . "VALUES ('null', '$sub1', '$username'), ('null', '$sub2', '$username')";
	if ($mysqli->query($sql1) == true){
		    	$sql = "DELETE FROM confim_tutor WHERE username='".$username."'";

				if ($con->query($sql) === TRUE) {
				    echo "<script type='text/javascript'>alert('Success, Now you can login using given username and password given');</script>";
		        	echo "<script type='text/javascript'>window.location.href='../login';</script>";
				} else {
				    echo "Error deleting record: " . $conn->error;
				}