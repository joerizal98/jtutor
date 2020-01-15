<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

require_once('connection.php');
require_once('fetch.php');
session_start();
include('pass.php');
    if (MD5($_POST["oldpass"]) == $Password){
		$usr = $con->real_escape_string($_POST["username"]);
		$fname = $con->real_escape_string($_POST["fname"]);
		$lname = $con->real_escape_string($_POST["lname"]);
		$no = $con->real_escape_string($_POST["no"]);
		$address = $con->real_escape_string($_POST["address"]);
		$role = $con->real_escape_string($_POST["role"]);
		$folder = $_POST["folder"];
		require_once('fetch.php');
		if($_POST["inewpass"] != ""){  
            $new_pass = $con->real_escape_string(MD5($_POST["inewpass"]));
        }else{
            
            $new_pass = $con->real_escape_string($Password);
        }
		
		if($_FILES['file']['name'] != ""){
            copy ( $_FILES['file']['tmp_name'], "../user_avatar/".$folder."/". $_FILES['file']['name'] ) 
            or die( "Could not upload avatar");  
            $dp = $con->real_escape_string($_FILES['file']['name']);
        }else{
            $dp = $con->real_escape_string($_POST['dp']);
        }

		if ($con->connect_error) {
	          die("Connection failed: " . $con->connect_error);
	    }
	 
		// Attempt update query execution
			$sql = "UPDATE user SET  password='$new_pass', fistname='$fname', lastname='$lname', pnumber='$no', address='$address', dp='$dp' WHERE username='$usr'";
		
		if(mysqli_query($con, $sql)){
		    echo '<script type="text/javascript">alert("Success");';
                echo 'window.location.href="../my_profile";</script>';
		} else {
		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con); die;
		}
    }else{
         echo '<script type="text/javascript">alert("Inccorect Password");';
         echo 'window.location.href="../my_profile";</script>';
    }
// Close connection
mysqli_close($con);
?>