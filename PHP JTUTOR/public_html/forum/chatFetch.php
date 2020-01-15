<?php
session_start();
include_once('config.php');
$scode = $_GET['id'];
$file_name = $_GET['name'];

$connect = mysqli_connect('localhost','u779679936_jtu0','yGW442MtTygp','u779679936_jtut')or die ('problem to connect database');


$list= ("SELECT * FROM list WHERE sub_id='".$scode."' and filename='".$file_name."'");
$result2 = $conn->query($list);


while ($row_list = mysqli_fetch_assoc($result2)){
    $db_chat = $row_list['attendance'];


$result= mysqli_query($conn , "SELECT * FROM ".$db_chat);
while ($row = mysqli_fetch_assoc($result)){
    
    $names= mysqli_query($connect , "SELECT * FROM user WHERE username='".$row["chat_person_name"]."'");
    while ($row_user = mysqli_fetch_assoc($names)){
        $full_name = ucfirst($row_user['fistname']." ".$row_user['lastname']);
    }
    
	$color = $row['chat_color'];
	$time = date('h:i A', strtotime($row['chat_time']));
	$datec = date('d M Y', strtotime($row['chat_date']));
	$chat = strtolower($row["chat_person_name"]);
	$user = strtolower($_SESSION['User']);
	
	date_default_timezone_set("Asia/Kuala_Lumpur");
    $nowd = date('d M Y');
	if($nowd > $datec){
	    $date = date('d M', strtotime($datec));
	}else if($nowd < $datec){
	    $date = date('d M', strtotime($nowd));
	}else{
	    $date = "Today";
	}
	
	if(strcmp($chat, $user) == 0){
	echo '
		<li class="clearfix">
			<div class="message-data align-right">
	            <span class="message-data-time" >'.$time.', '.$date.$_GET['id'].'</span> &nbsp; &nbsp;
	            <span class="message-data-name" > You</span> <i class="fa fa-circle me"></i>
	        </div>
	        <div class="message other-message float-right" style="background-color:'.$row['chat_color'].'">
	            '.$row['chat_value'].' 
	        </div>
	    </li>';
	}else{
		echo '
		<li class="clearfix">
              <div class="message-data" >
                <span class="message-data-name"><i class="fa fa-circle online"></i> '.$full_name.'</span>
                <span class="message-data-time">'.$time.', '.$date.'</span>
              </div>
              <div class="message my-message" style="background-color:'.$row['chat_color'].'">
                '.$row['chat_value'].'
              </div>
            </li>';
	}
}}
?>