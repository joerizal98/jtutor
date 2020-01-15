<?php
    session_start();
	if(!isset($_SESSION['User']))
    {
        header("location: https://jtutor.ml/login");
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
        <title>JTutor - My Course</title>

        <!-- Icon -->
        <link rel="shortcut icon" href="../img/favicon.ico">

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="../fontawesome/css/all.css">

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
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
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
                                        <i class="fab fa-twitter fa-fw"></i> 3 New Followers
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
                                <a class="text-center" href="#">
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
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo strtoupper($_SESSION["name"]); }?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="../my_profile/"><i class="fa fa-user fa-fw"></i> My Profile</a>
                            
                            
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
                                <a href="../my_course" class="active"><i class="fas fa-book-reader fa-fw"></i>  My Course</span></a>
                            </li>
                            <li>
                                <a href="../course"><i class="fas fa-book-open fa-fw"></i>  Course List</a>
                            </li>
                            <li>
                                <a href="../message"><i class="fas fa-comments fa-fw"></i> Message</a>
                            </li>
                            <li>
                                <a href="../my_profile"><i class="fas fa-user fa-fw"></i> My Profile</a>
                            </li>
                            </li>
                            <?php if($_SESSION['User'] == "admin"){
                            echo '<li><a href="../user_list/"><i class="fas fa-clipboard-list fa-fw"></i>Manage User</a>
                            </li>';}
						    ?>
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
                        <h1 class="page-header">My Course</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">

                    	<?php
							require_once("connection.php");
							$name = $_SESSION['User'];
							
							$quer="select * from user where username='".$name."' and role='teacher'";
                            $userval=mysqli_query($con,$quer);
                            
                            if(mysqli_num_rows($userval)>0){
    							$sql = "SELECT * FROM tutor where username = '".$name."'";
    							$result = mysqli_query($con, $sql);
                            }else{
                                $sql = "SELECT * FROM user_course where name = '".$name."'";
    							$result = mysqli_query($con, $sql);
                            }
						?>
                        
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading" style="font-weight: bold">
                                <i class="fas fa-book-reader fa-fw"></i> My Course
                            </div>
                            <!-- /.panel-heading -->
                            

                            <div class="panel-body">
                                <div class="row">
                                	<!--start here-->
                            <?php
                            	while ($row = mysqli_fetch_array($result)) {
                            	    if(mysqli_num_rows($userval)>0){
            							$usr = $row['username'];
    									$csr = $row['subject'];
    									$subject_id = $row['code'];
                                    }else{
                                        $usr = $row['name'];
    									$csr = $row['course'];
    									$subject_id = $row['subject_id'];
                                    }

									require_once("connection.php");
									$sql1 = "SELECT * FROM subject where code = '".$csr."'";
									$result1 = mysqli_query($con, $sql1);

									while ($row2 = mysqli_fetch_array($result1)) {
										$csrname = $row2['subject'];
										$cat = $row2['academic'];
										$code = $row2['code'];
										$rnum = rand();

		                                echo '<div class="col-lg-4">
		                                        <div class="">
		                                            <div class="col-lg-0">
		                                                <div class="panel panel-default">
		                                                    <div class="panel-heading" style="text-align: center; font-weight: bold">
		                                                        <a href="../subject/?id='.$subject_id.'">'.$csrname.'</a>
		                                                    </div>
		                                                    <div class="">
		                                                        <a href="../subject/?id='.$subject_id.'"><img src="https://www.jtutor.ml/course/subject/images/'.$code.'.png" style="width:100%" class="img-responsive"></a>
		                                                    </div>
		                                                    <div class="panel-footer" style="text-align: center; font-weight: bold">
		                                                        <form id="myform'.$rnum.'" method="post" action="redirect.php?id='.$subject_id.'"><input type="hidden" name="subject" value="'.$code.'">
		                                                        	<input type="hidden" name="file" value="Bahasa Melayu - Joe">
		                                                        <a href="../subject/?id='.$subject_id.'" style="cursor:pointer">'.$cat.'</a>
		                                                    </form>
		                                                    </div>
		                                                </div>
		                                            </div>
		                                        </div>
		                                    </div>';
	                                }
                            	}
                            ?>
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
                    
                        <!-- /.panel -->
                        
                        <!-- /.panel -->
                        
                            
                            <!-- /.panel-footer -->
                        </div>
                        <!-- /.panel .chat-panel -->
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>
        <? include('../cursor.html'); ?>
    </body>
</html>
