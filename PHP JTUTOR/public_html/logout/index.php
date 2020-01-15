<?php 
    session_start();
    if(isset($_GET['logout']))
    {	
    	$connek = mysqli_connect('localhost','u779679936_jtu0','yGW442MtTygp','u779679936_jtut') or die ('problem to connect database');
                $results = mysqli_query($connek, "UPDATE user
                SET online_status = '0'
                WHERE username = '$_SESSION[User]';");
        session_destroy();
        header("location: ../");
    }

?>