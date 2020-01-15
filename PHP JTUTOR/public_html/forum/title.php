<?php
session_start();
include_once('config.php');
date_default_timezone_set("Asia/Kuala_Lumpur");
$nowt = date('H:i:s');
$nowd = date('Y-m-d');
$scode = $_GET['id'];
$file_name = $_GET['name'];

$list= mysqli_query($conn , "SELECT * FROM list WHERE sub_id='".$scode."' and filename='".$file_name."'");
while ($row_list = mysqli_fetch_assoc($list)){
    $db_chat = $row_list['attendance'];
}


    $sql = "UPDATE list SET title='".$_POST['title']."' WHERE sub_id='".$scode."' and filename='".$file_name."'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
?>