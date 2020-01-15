<?php
session_start();
$user = $_SESSION['User'];
$conn = mysqli_connect('localhost','u779679936_jtu0','yGW442MtTygp','u779679936_jtut')or die ('problem to connect database');

$result2= mysqli_query($conn , "SELECT * FROM user_course WHERE subject_id='".$_GET['id']."'");
while ($row2 = mysqli_fetch_assoc($result2)){
    $username = $row2['name'];
    $result= mysqli_query($conn , "SELECT * FROM user WHERE username='".$username."'");
    while ($row = mysqli_fetch_assoc($result)){
        $full_name = ucfirst($row['fistname']." ".$row['lastname']);
        if($row['dp'] == "user.png"){
            $img = $row['dp'];
        }else{
            $img = 'https://jtutor.ml/user_avatar/'.$row['folder']."/".$row['dp'];
        }
        
    	if($row['online_status'] == 1 ){
    ?>
    <?php
    echo '<li class="clearfix" id="listuser">';
    echo  	'<span><img src="'.$img.'" alt="'.$row['username'].$role.'" style="width:52px;height:52px;border: 3px solid #86BB71;border-radius: 200px;background-color:grey;"/>';
    echo   	'<div class="about">';
    echo        '<div class="name"><a>'.ucwords($full_name).'</a></div>';
    echo        '<div class="status">';
    echo	            '<i class="fa fa-circle online"></i> online';
    echo	    '</div>';
    echo	'</div></span>';
    echo '</li>';
    ?>
    <?php
    		}
    		else {
    ?>
    <?php
    echo '<li class="clearfix" id="listuser">';
    echo  	'<img src="'.$img.'" alt="'.$row['username'].'" style="width:52px;height:52px;border: 3px solid #E38968;border-radius: 200px;background-color:grey;"/>';
    echo   	'<div class="about">';
    echo        '<div class="name"><a>'.ucwords($row["username"]).'</a></div>';
    echo        '<div class="status">';
    echo	            '<i class="fa fa-circle offline"></i> offline';
    echo	    '</div>';
    echo	'</div>';
    echo '</li>';
    ?>
<?php
			}
	}
}

?>
