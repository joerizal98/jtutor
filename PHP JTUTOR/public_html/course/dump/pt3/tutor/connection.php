<?php

    $con=mysqli_connect('localhost','root','','user_data');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>