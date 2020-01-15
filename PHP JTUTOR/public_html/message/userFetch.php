<?php
session_start();
$user = $_SESSION['User'];
$conn = mysqli_connect('localhost','u779679936_jtu0','yGW442MtTygp','u779679936_jtut')or die ('problem to connect database');


    $result= mysqli_query($conn , "SELECT * FROM user WHERE username<>'".$user."'");
    while ($row = mysqli_fetch_assoc($result)){
        $username = $row['username'];
        if($row['dp'] == "user.png"){
            $img = $row['dp'];
            $user_name = $row['fistname']." ".$row['lastname'];
            
        }else{
            $img = 'https://jtutor.ml/user_avatar/'.$row['folder']."/".$row['dp'];
        }
    	    if($row['online_status'] == 1 ){
    ?>
            <?php
            echo '<li class="clearfix" id="listuser"><a href="https://www.jtutor.ml/message/?user='.$username.'" target="_parent"style="cursor:pointer">';
            echo  	'<span><img src="'.$img.'" alt="'.$row['username'].$role.'" style="width:52px;height:52px;border: 3px solid #86BB71;border-radius: 200px;background-color:grey;"/>';
            echo   	'<div class="about">';
            echo        '<div class="name"><a>'.ucwords($row['fistname']." ".$row['lastname']).'</a></div>';
            echo        '<div class="status">';
            echo	            '<i class="fa fa-circle online"></i> online';
            echo	    '</div>';
            echo	'</div></span>';
            echo '</a></li>';
            ?>
    <?php
    		}
    		else {
    ?>
                <?php
                echo '<li class="clearfix" id="listuser"><a href="https://www.jtutor.ml/message/?user='.$username.'" target="_parent"style="cursor:pointer">';
                echo  	'<img src="'.$img.'" alt="'.$row['username'].'" style="width:52px;height:52px;border: 3px solid #E38968;border-radius: 200px;background-color:grey;"/>';
                echo   	'<div class="about">';
                echo        '<div class="name"><a>'.ucwords($row['fistname']." ".$row['lastname']).'</a></div>';
                echo        '<div class="status">';
                echo	            '<i class="fa fa-circle offline"></i> offline';
                echo	    '</div>';
                echo	'</div>';
                echo '</a></li>';
                ?>
<?php
			}
	}

?>
