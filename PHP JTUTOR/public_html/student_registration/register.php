<?php 
require_once('connection.php');
session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {   
        
        require_once('connection.php');
        $query9="select * from confim_tutor where username='".$_POST['username']."' or email='".$_POST['email']."'";
        $result9=mysqli_query($con,$query9);
        
        require_once('connection.php');
        $query="select * from user where username='".$_POST['username']."'";
        $result=mysqli_query($con,$query);
if(mysqli_fetch_assoc($result9)) {
    echo '<script type="text/javascript">alert("Username or Email Already Taken");';
    echo 'window.location.href="../student_registration";</script>';
}else{
        if(mysqli_fetch_assoc($result)) {
            echo '<script type="text/javascript">alert("Username Already Taken");';
            echo 'window.location.href="../student_registration";</script>';

        } else {   
            require_once('connection.php');
            $query1="select * from user where email='".$_POST['email']."'";
            $result1=mysqli_query($con,$query1);

            if(mysqli_fetch_assoc($result1)) {
                echo '<script type="text/javascript">alert("Email Already Taken");';
                echo 'window.location.href="../student_registration";</script>';
            } else {
                $mysqli = new mysqli('localhost','u779679936_jtu0','yGW442MtTygp','u779679936_jtut');
                $ranum = rand();
                $folder = $mysqli->real_escape_string($_POST['username'].$ranum);
                $avatar = $mysqli->real_escape_string($_FILES['avatar']['name']);
                if (preg_match("!image!", $_FILES['avatar']['type'])){
                    if (!file_exists('../user_avatar/'.$folder)) {
                        mkdir('../user_avatar/'.$folder, 0777, true);
                        $avatar_path = $mysqli->real_escape_string('../user_avatar/'.$folder.'/'.$_FILES['avatar']['name']);
                        copy($_FILES['avatar']['tmp_name'], $avatar_path);
                        $avatar = $mysqli->real_escape_string($_FILES['avatar']['name']);
                    } 
                }else{
                    if (!file_exists('../user_avatar/'.$folder)) {
                    mkdir('../user_avatar/'.$folder, 0777, true);
                    $avatar = $mysqli->real_escape_string('user.png');
                    }
                }

                
                $username = $mysqli->real_escape_string($_POST['username']);
                $password = $mysqli->real_escape_string($_POST['password']);
                $email = $mysqli->real_escape_string($_POST['email']);
                $firstname = $mysqli->real_escape_string($_POST['fname']);
                $lastname = $mysqli->real_escape_string($_POST['lname']);
                $date = $mysqli->real_escape_string($_POST['date']);
                $gender = $mysqli->real_escape_string($_POST['gender']);
                $pnumber = $mysqli->real_escape_string($_POST['pno']);
                $address =  $mysqli->real_escape_string($_POST['address'].', '.$_POST['city'].', '.$_POST['zipcode']);
                $chat_color = $mysqli->real_escape_string(sprintf("#%06x",rand(0,16777215)));

                $sql = "INSERT INTO user (username, password, role, email, fistname, lastname, birthday, gender, pnumber, address, chat_color, online_status, dp, folder)" . "VALUES ('$username', MD5($password), 'student', '$email', '$firstname', '$lastname', '$date', '$gender', '$pnumber', '$address', '$chat_color', '0', '$avatar', '$folder')";
              if ($mysqli->query($sql) == true){
                echo '<script type="text/javascript">alert("You just signed up successfully!");';
                echo 'window.location.href="../login";</script>';
                //header("location: ../login");
                //echo 'window.location.href="../login";</script>';
              }else{
                echo "<script type='text/javascript'>alert('Database Error!');</script>";
              }
            }
        }
}
    } else {
        echo 'Not Working Now Guys';
    }

?>