<?php
    if (empty($_POST['email'])){
        header("Location: https://www.jtutor.ml/forgot_passwords/");
        die();
    }
     require_once('connection.php');
            $query="select * from user where email='".$_POST['email']."'";
            $result=mysqli_query($con,$query);
    
    if(mysqli_num_rows($result)>0){
            $email =  $_POST['email'];
            $hash = md5(rand(0,1000));
        
            $sql_reset = "INSERT INTO reset_password (email, hash)
            VALUES ('$email', '$hash')";
    
            if(!empty($email) and $con->query($sql_reset) === TRUE){
                header("Location: https://www.jtutor.ml/forgot_passwords/email.php?email=".$email."&hash=".$hash);
            }else{
                echo "Error: " . $sql_reset . "<br>" . $con->error;
                echo'error';
                echo $email;
            }
        
        
        
    }else{
        header("Location: https://www.jtutor.ml/forgot_passwords/?alert=User Not Found");
    }
?>