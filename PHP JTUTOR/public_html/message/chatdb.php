<?php
session_start();
include_once('config.php');
date_default_timezone_set("Asia/Kuala_Lumpur");
$nowt = date('H:i:s');
$nowd = date('Y-m-d');
if("" == trim($_POST['chat']))
{

}else{
	$result = mysqli_query($conn , "INSERT INTO `u779679936_chat`.`chat`
            (`chat_id`,
             `chat_person_name`,
             `chat_value`,
             `chat_color`,
			 `chat_time`,
			 `chat_date`,
			 `chat_from`,
			 `chat_to`,
			 `seen`
			 )
VALUES (NULL,
        '$_SESSION[User]',
		'$_POST[chat]',
		'$_SESSION[color]',
		'$nowt',
		'$nowd',
		'$_SESSION[User]',
		'$_GET[user]',
		'1'
		);");
	
	}

?>