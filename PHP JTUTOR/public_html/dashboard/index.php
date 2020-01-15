<?php
session_start();
    $user = strtolower($_SESSION['User']);
    if ($user == admin){
        include 'admin.php';  
    }else{
        include 'student.php'; 
    }
    include('../cursor.html');
?>
<?
if(isset($_SESSION['User']) and strtolower($_SESSION['User']) != "admin") {
	include("../intercom.php");
}
?>