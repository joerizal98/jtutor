<?php
session_start();
include_once('config.php');
$result= mysqli_query($conn , "SELECT * FROM chat WHERE chat_from='".$_SESSION['User']."' AND chat_to='".$_GET['user']."' OR chat_from='".$_GET['user']."' AND chat_to='".$_SESSION['User']."'");
$chat_rows = mysqli_num_rows($result);
if ($chat_rows > 0){
    $chat_no = "already ".$chat_rows." messages";
}else{
    $chat_no = "no messages with this user";
}
	
	    $connect = mysqli_connect('localhost','u779679936_jtu0','yGW442MtTygp','u779679936_jtut')or die ('problem to connect database');
	    
	        $result_contact= mysqli_query($connect , "SELECT * FROM contact where user='".$_SESSION['User']."' AND contact='".$_GET['user']."'");
	        $links = "https://www.jtutor.ml/message/add_contact.php?user=".$_GET['user'];
            if ($result_contact->num_rows > 0){
                    $contact_color = "gold";
                    $eventnow = "";
            }else{
                    
                    $contact_color = "#D8DADF";
                    $eventnow = 'href="'.$links.'"';
            }

        $result_name= mysqli_query($connect , "SELECT * FROM user where username='".$_GET['user']."'");
        while ($row_name = mysqli_fetch_assoc($result_name)){
            $full_name = ucwords(strtolower($row_name['fistname']." ".$row_name['lastname']));
            $dp = $row_name['dp'];
            if($dp != "user.png"){
                $folder = $row_name['folder'];
            }
            
            $path_dp = "https://jtutor.ml/user_avatar/".$folder."/".$dp;
            if($row_name['online_status'] == 1){   
        		echo '
        		<img src="'.$path_dp.'" alt="avatar" style="width:52px;height:52px;border: 3px solid #86BB71;border-radius: 200px;background-color:grey;"/>
                <div class="chat-about">
                    <div class="chat-with">'.$full_name.'</div>
                    <div class="chat-num-messages">'.$chat_no.'</div>
                </div>
                
                <a '.$eventnow.' target="_parent" title="Add to Contact"><i class="fa fa-user-plus" id="attendance" style="cursor:pointer; color:'.$contact_color.'"></i></a>
                ';
    	    }else{
    	        
    	        echo '
        		<img src="'.$path_dp.'" alt="avatar" style="width:52px;height:52px;border: 3px solid #E38968;border-radius: 200px;background-color:grey;"/>
                <div class="chat-about">
                    <div class="chat-with">'.$full_name.'</div>
                    <div class="chat-num-messages">'.$chat_no.'</div>
                    </div>
                </div>
                <a '.$eventnow.' title="Add to Contact" target="_parent"><i class="fa fa-user-plus" id="attendance" style="cursor:pointer; color:'.$contact_color.'"></i></a>
                ';
	        }
        }
?>