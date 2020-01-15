<?php

if($_POST[email] == "juliana.jtutor@gmail.com"){
    $email = "juliana.jtutor@gmail.com";
    $pass = "Jtutor123";
}else if($_POST[email] == "noreply.jtutor@gmail.com"){
    $email = "noreply.jtutor@gmail.com";
    $pass = "Jtutor123";
}else if($_POST[email] == "feedback@jtutor.ml"){
    $email = "feedback@jtutor.ml";
    $pass = "Jtutor123";
}

// include Imap.Class
include_once('lib/class.imap.php');

$email = new Imap();
$connect = $email->connect(
    '{mx1.hostinger.com:993/imap/ssl}INBOX', //host
	'jwan@jtutor.ml', //username
	'm9ZbBXx6rFId' //password

	
);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
if($connect){
	if(isset($_POST['inbox'])){
		// inbox array
		$inbox = $email->getMessages('html');
		echo json_encode($inbox, JSON_PRETTY_PRINT);
	}else if(!empty($_POST['uid']) && !empty($_POST['part']) && !empty($_POST['file']) && !empty($_POST['encoding'])){
		// attachments
		$inbox = $email->getFiles($_POST);
		echo json_encode($inbox, JSON_PRETTY_PRINT);
	}else {
		echo json_encode(array("status" => "error", "message" => "Not connect."), JSON_PRETTY_PRINT);
	}
}else{
	echo json_encode(array("status" => "error", "message" => "Not connect."), JSON_PRETTY_PRINT);
}