<?php
$conn = mysqli_connect('localhost' , 'root' , '', 'user_data')or die ('problem to connect database');
$result= mysqli_query($conn , "SELECT * FROM user");
while ($row = mysqli_fetch_assoc($result)){
	if($row['online_status'] == 1 ){
		echo "<font color='#009900'>".$row['username']."-".$row['role']." (Online)"."</font><br>";
		}
		else {
				echo "<font color='#FF0000'>".$row['username']."-".$row['role']." (Offline)"."</font><br>";
			}
	}

?>