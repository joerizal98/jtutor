<?php
    session_start();
    $_SESSION['file'] = $_GET['id'];
    echo $_GET['id'];
    
    if(isset($_SESSION['file'])){
        header("Location: ../subject");
    }