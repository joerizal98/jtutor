<?php
session_start();
include_once('config.php');
$scode = $_GET['id'];
$file_name = $_GET['name'];

$list= ("SELECT * FROM list WHERE sub_id='".$scode."' and filename='".$file_name."'");
$result2 = $conn->query($list);


while ($row_list = mysqli_fetch_assoc($result2)){
    $db_chat = strtolower($row_list['title']);
    echo ucwords($db_chat)." ";
    
}
?>