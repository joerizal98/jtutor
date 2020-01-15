<?php
if(isset($_POST['user']))
    {
		require_once('../connection.php');
		// Check connection
		if ($con->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		// sql to delete a record
		$sql = "DELETE FROM confim_tutor WHERE username='".$_POST['user']."'";
		if ($con->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		    $dpfolder = '../user_avatar/'.$_POST['folder'];
		    $edufolder = '../edu_files/'.$_POST['folder'];
			if(rmdir($dpfolder) and rmdir($edufolder)){
				echo "Folder deleted";
			}else{
				//Get a list of all of the file names in the folder.
				$dpfiles = glob($dpfolder . '/*');
				$edufiles = glob($edufolder . '/*');
				 
				//Loop through the file list.
				foreach($dpfiles as $file){
				    //Make sure that this is a file and not a directory.
				    if(is_file($file)){
				        //Use the unlink function to delete the file.
				        unlink($file);
				    }
				    echo "dp file delete";
				}
				//Loop through the file list.
				foreach($edufiles as $file){
				    //Make sure that this is a file and not a directory.
				    if(is_file($file)){
				        //Use the unlink function to delete the file.
				        unlink($file);
				    }
				    echo "edu file delete";
				}
				rmdir($dpfolder);
				rmdir($edufolder);
				echo "Folder and File deleted";
				
			}
			header("Location: reject_mail.php?user=".$_POST['name']."&email=".$_POST['email']);
		} else {
		    echo "Error deleting record: " . $conn->error;
		}

		$con->close();
	}else{
		header("Location: ../user_list/?error=Cannot Delete ".$_POST['user']);
	}
?>