<?php
session_start();
include_once('config.php');
$result= mysqli_query($conn , "SELECT * FROM chat WHERE chat_from='".$_SESSION['User']."' AND chat_to='".$_GET['user']."' OR chat_from='".$_GET['user']."' AND chat_to='".$_SESSION['User']."'");
while ($row = mysqli_fetch_assoc($result)){
	$color = $row['chat_color'];
	$time = date('h:i A', strtotime($row['chat_time']));
	$datec = date('d M Y', strtotime($row['chat_date']));
	$chat = strtolower($row["chat_person_name"]);
	$user = strtolower($_SESSION['User']);
	
	$result2= mysqli_query($conn , "UPDATE chat SET seen = '0' WHERE chat_from='".$_GET['user']."' AND chat_to='".$_SESSION['User']."'");
	
	$conn->query($result2);
	
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
	            <span class="message-data-time" >'.$time.', '.$date.'</span> &nbsp; &nbsp;
	            <span class="message-data-name" > You</span> <i class="fa fa-circle me"></i>
	        </div>
	        <div class="message other-message float-right" style="background-color:'.$row['chat_color'].'">
	            '.$row['chat_value'].' 
	        </div>
	    </li>';
	}else{
	    $connect = mysqli_connect('localhost','u779679936_jtu0','yGW442MtTygp','u779679936_jtut')or die ('problem to connect database');

        $result_name= mysqli_query($connect , "SELECT * FROM user where username='".$row["chat_person_name"]."'");
        while ($row_name = mysqli_fetch_assoc($result_name)){
            $full_name = ucwords(strtolower($row_name['fistname']." ".$row_name['lastname']));
            
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
    }
    
}
?>