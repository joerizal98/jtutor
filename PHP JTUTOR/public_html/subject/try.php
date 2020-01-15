<?php
    $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    //echo $actual_link.'<br><br>';
    $redirect = str_replace("subject","Subject",$actual_link);
    
    echo $redirect;
?>