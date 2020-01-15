<?php
    require_once("connection.php");
    session_start();
    
    $query_user="select * from user where username='".$_SESSION['User']."' and role='teacher'";
    $result_user=mysqli_query($connect,$query_user);
    if(mysqli_num_rows($result_user)>0){
        include('teacher.php');
    }else{
        include('student.php');
    }
    include('../../cursor.html');
    
    
?>