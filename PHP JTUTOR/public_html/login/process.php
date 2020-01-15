<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['user']) || empty($_POST['pass']))
       {
            header("location:../login");
       }
       else
       {    
            require_once('connection.php');
            $query="select * from user where username='".$_POST['user']."' and password='".MD5($_POST['pass'])."'";
            $result=mysqli_query($con,$query);

            while($row = mysqli_fetch_assoc($result))
            {
              
              $color = $row['chat_color'];
              $fname = ucwords($row['fistname']);
              $email = $row['email'];
            }

            if(mysqli_num_rows($result)>0)
            {
                $connek = mysqli_connect('localhost' , 'u779679936_jtu0' , 'yGW442MtTygp', 'u779679936_jtut')or die ('problem to connect database');
                $results = mysqli_query($connek, "UPDATE user
                SET online_status = '1'
                WHERE username = '$_POST[user]';");

                $_SESSION['User']=$_POST['user'];
                $_SESSION['email']=$email;
                $_SESSION['color'] = $color;
                $_SESSION['name'] = $fname;
                header("location: ../");
            }
            else
            {   ;
                header("location:/login/?error= incorrect login info");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>