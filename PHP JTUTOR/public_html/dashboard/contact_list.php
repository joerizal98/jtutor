<?php
session_start();
$con=mysqli_connect("localhost","u779679936_jtu0","yGW442MtTygp","u779679936_jtut");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM contact WHERE user='".$_SESSION['User']."'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo $rowcount;
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>