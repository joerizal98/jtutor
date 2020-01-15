<?php
    require_once('connection.php');
    if(!empty($_POST['new_pass']) and !empty($_POST['confirm_pass']) and !empty($_GET['email'])){
        $new_pass = $_POST['new_pass'];
        $email = $_GET['email'];
        
        $sql = "UPDATE user SET password='".MD5($new_pass)."' WHERE email='".$email."'";

        if ($con->query($sql) === TRUE) {
            $sql_delete = "DELETE FROM reset_password WHERE email='".$email."'";
            if ($con->query($sql_delete) === TRUE) {
                echo '<script type="text/javascript">alert("You password has been change!");';
                echo 'window.location.href="https://www.jtutor.ml/";</script>';
            } else {
                echo "<script>history.back();</script>";
            }
        } else {
            echo "Error updating record: " . $conn->error;
        }
        //$con->close();
    }else{
        header("Location: https://www.jtutor.ml/");
        //echo "error";
         
    }
?>