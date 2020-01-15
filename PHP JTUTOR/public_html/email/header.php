<?php
    session_start();
    if(!isset($_SESSION['User']))
    {
        header("location: ../login");
    }
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JTutor - Online Tutor</title>
    <base target="_blank">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap-4.1.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fixed.css">
    <link rel="stylesheet" href="../css/lightbox.css">
    <style>
		#btn{
			color: white;
		}

		.dropdown {
			cursor:default;
		    position: relative;
		    display: inline-block;
		}

		.dropdown-content {
			float: right;
		    display: none;
		    position: absolute;
		    background-color: #f1f1f1;
		    min-width: 160px;
		    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		    right: 0;
		    background: rgba(9,20,24, .9)!important;
		}

		.dropdown-content a {
		    color: white;
		    padding: 13px 16px;
		    text-decoration: none;
		    display: block;
		}

		.dropdown-content a:hover {color: #431478;}

		.dropdown:hover .dropdown-content {display: block;float: right;}

		.dropdown:hover #btn {color: #431478;}
	</style>
</head>
<body>

<div id="home">
        <!--Navigation-->
        <nav class="navbar navbar-expand-md fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="../" target="_parent"><img src="../img/nest.png"  alt="JTutor"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="custom-toggler-icon"><i class="fas fa-bars"></i></span></button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" class="" href="../" target="_parent">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" class="" href="../#howitwork" target="_parent">How It Works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" class="" href="../dashboard" target="_parent">Dashboard</a>
                        </li>
                        <?php

						    if(isset($_SESSION['User']))
						    {
						        echo 
						        '<div class="dropdown">
						        <li class="nav-item">
									<a class="nav-link" id="btn" target="_parent">'.$_SESSION['name'].'</a>
									<div class="dropdown-content">
									    <a href="https://www.jtutor.ml/my_profile/" target="_parent">My Account</a>
									    <a href="../logout/?logout" target="_parent">Logout</a>
  									</div>
								</li></div>';
						        
						    }
						    else
						    {
						        echo 
						        '<li class="nav-item" >
									<a class="nav-link" class="" href="login/">Login</a>
								</li>';
						    }

						?>
                    </ul>
                </div>
            </div>
        </nav>
</div>
    <script src="footer/js/jquery-3.3.1.min.js"></script>
<script src="footer/bootstrap-4.1.0-dist/js/bootstrap.min.js"></script>
<script src="footer/js/all.js"></script>
    
</body>
