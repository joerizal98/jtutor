<?php
session_start();
include_once('config.php');
$scodedb = $scode;
$file_namedb = $file_name;

$list= ("SELECT * FROM list WHERE sub_id='".$scodedb."' and filename='".$file_namedb."'");
$result2 = $conn->query($list);
while ($row_list = mysqli_fetch_assoc($result2)){
    $db_chat = $row_list['chat'];


    $result= mysqli_query($conn , "SELECT * FROM ".$db_chat."WHERE student='".$_SESSION['User']."'");
    if ($result->num_rows > 0) {
         $color = "gold";
         $alert ="none";
    }else{
        $color = "";
        $alert = "block";
    }
}
?>