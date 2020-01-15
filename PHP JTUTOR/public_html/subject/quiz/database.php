<?php
//database connection creation
$db_host = 'localhost';
$db_name = 'u779679936_quiz';
$db_user = 'u779679936_u7796';
$db_pass = 'XFic8EwzfHFl';

//create mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);


//error handler
if($mysqli->connect_error){
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}