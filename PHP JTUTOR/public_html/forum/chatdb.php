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
if("" == trim($_POST['chat']))
{

}else{
	$result = mysqli_query($conn , "INSERT INTO `u779679936_forum`.`$db_chat`
            (`chat_id`,
             `chat_person_name`,
             `chat_value`,
             `chat_color`,
			 `chat_time`,
			 `chat_date`
			 )
VALUES (NULL,
        '$_SESSION[User]',
		'$_POST[chat]',
		'$_SESSION[color]',
		'$nowt',
		'$nowd'
		);");
	
	}

?>