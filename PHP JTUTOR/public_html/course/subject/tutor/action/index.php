<?php 
session_start();
      $mysqli = new mysqli('localhost','u779679936_jtu0','yGW442MtTygp','u779679936_jtut');
      $name = $mysqli->real_escape_string($_SESSION['User']);
      $subject = $mysqli->real_escape_string($_GET['subject']);
      $code = $mysqli->real_escape_string($_GET['id']);
      $sql = "INSERT INTO user_course (name, course, subject_id)" . "VALUES ('$name', '$subject', '$code')";
      if ($mysqli->query($sql) == true){
                echo '<script type="text/javascript">alert("Enroll Subject Successful!");';
                echo 'history.back();</script>';
              }else{
                echo "<script type='text/javascript'>alert('Database Error!');history.back();</script>"; die;
              }


?>
<!DOCTYPE html>
<html>
<head>
  <title>success</title>
</head>
<body>
</body>
</html>>