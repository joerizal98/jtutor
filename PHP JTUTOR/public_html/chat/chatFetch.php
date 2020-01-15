<?php
include_once('config.php');
$result= mysqli_query($conn , "SELECT * FROM chat");
while ($row = mysqli_fetch_assoc($result)){
	$color = $row['chat_color'];
	echo "<font color='".$color."'>";
	echo $row['chat_person_name']." :";
	echo $row['chat_value']."<br>";
	echo $row['chat_time']."</font><br>";
	
	}
?>