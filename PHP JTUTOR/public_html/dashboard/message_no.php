
<?php
session_start();
$conn = mysqli_connect('localhost','u779679936_jtuto','6FPoKVxFfEfs','u779679936_chat')or die ('problem to connect database');
	$conn->set_charset('utf8mb4');
$sql="SELECT * FROM chat WHERE seen= '1' and chat_to='".$_SESSION['User']."'";
$result=mysqli_query($conn,$sql);

  $rowcount=mysqli_num_rows($result);
  echo $rowcount;
?>