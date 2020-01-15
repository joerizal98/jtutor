<?php
    session_start();
    if(!isset($_SESSION['User']))
    {
        header("location: http://localhost/jtutor/login");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Title -->
        <title>JTutor - Manage User</title>

        <!-- Icon -->
        <link rel="shortcut icon" href="../img/favicon.ico">

        <style type="text/css">
            .avatar {
                vertical-align: middle;
                width: 20px;
                height: 20px;
                border-radius: 20%;
            }
        </style>

        <!-- Bootstrap Core CSS -->
        <link href="../dashboard/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../dashboard/css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../dashboard/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dashboard/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../dashboard/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../"><img src="../img/nest.png"  alt="JTutor" style="width: 120px"></a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php

						    if(isset($_SESSION['User']))
						    {?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../img/user.png" alt="Avatar" class="avatar"> <?php echo strtoupper($_SESSION["User"]); }?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="../my_profile"><i class="fa fa-user fa-fw"></i> My Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="../logout/?logout"><i class="fa fa-sign-out-alt fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="../dashboard" ><i class="fas fa-tachometer-alt fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="../emails"><i class="fas fa-envelope fa-fw"></i>  Email</a>
                            </li>
                            <li>
                                <a href="../message"><i class="fas fa-comments fa-fw"></i> Message</a>
                            </li>
                            <li>
                                <a href="../my_profile"><i class="fas fa-user fa-fw"></i> My Profile</a>
                            </li>
                            </li>
                            <?php if(strtolower($_SESSION['User']) == "admin"){
                            echo '<li><a href="../user_list/" class="active"><i class="fas fa-clipboard-list fa-fw"></i>Manage User</a>
                            </li>';}
                ?>
                            <li>
                            <li>
                                <a href="../logout/?logout"><i class="fa fa-sign-out-alt fa-fw"></i> Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Manage User</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row message -->
                
                <!-- here -->
                <div class="row">
                    <div class="">
                        
                        <!-- /.panel -->
                        <div class="">
                            <div class="">
                                <div class="row" style="position: relative; height: 1700px">
                                	<!--start here-->
                                		<iframe name="my_frame" src="display.php" style=" height: 100%; width:100%;" frameborder="0" scrolling="no"></iframe>
                                	
                                    <!--end here-->
                                    <!-- /.col-lg-4 (nested) -->
                                    <div class="col-lg-8">
                                        <div id="morris-bar-chart"></div>
                                    </div>
                                    <!-- /.col-lg-8 (nested) -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        
                    </div>
                    <!-- /.col-lg-8 -->
                    
                        <!-- /.here -->
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../dashboard/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../dashboard/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../dashboard/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dashboard/js/startmin.js"></script>
        <? include('../cursor.html'); ?>
    </body>
</html>
