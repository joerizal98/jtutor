<?php
    session_start();
	if(!isset($_SESSION['User']))
    {
        header("location: ../login");
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
        <title>JTutor - Dashboard</title>

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
                                        <i class="fas fa-envelope fa-fw"></i> <span id="emailno3">0</span> New Mail
                                        <span class="pull-right text-muted small"><span id="mgstimes">0</span> minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> <span id="emailno3">0</span> New Message
                                        <span class="pull-right text-muted small"><span id="mgstimes2">0</span> minutes ago</span>
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
                            <i class="fa fa-user fa-fw"></i> <?php echo strtoupper($_SESSION["User"]); }?> <b class="caret"></b>
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
                                <a href="../dashboard" class="active"><i class="fas fa-tachometer-alt fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="../emails"><i class="fas fa-envelope fa-fw"></i>  Email</span></a>
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
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <!-- /.row message -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge" id="emailno">0</div>
                                        <div>New Mail!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="https://www.jtutor.ml/emails/">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
							require_once("connection.php");
							$sql = "SELECT * FROM subject";
							$result = mysqli_query($con, $sql);
							$available = mysqli_num_rows($result);
							
							$sql_teacher = "SELECT * FROM user where role='teacher'";
							$result_teacher = mysqli_query($con, $sql_teacher);
							$available_teacher = mysqli_num_rows($result_teacher);
							
							$sql_student = "SELECT * FROM user where role='student'";
							$result_student = mysqli_query($con, $sql_student);
							$available_student = mysqli_num_rows($result_student);
					?>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-book fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $available; ?></div>
                                        <div>Available Course!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="https://www.jtutor.ml/course/">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-chalkboard-teacher fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $available_teacher; ?></div>
                                        <div>Available Teacher!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="https://www.jtutor.ml/user_list/">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user-graduate fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?echo $available_student;?></div>
                                        <div>Available Student!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="https://www.jtutor.ml/user_list/">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8">

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
                                <i class="fas fa-envelope fa-fw"></i> Email Manager
                            </div>
                            <!-- /.panel-heading -->
                            

                            <div class="panel-body">
                                <div class="row">
                                	<!--start here-->
                            <br>
                            <div class="col-lg-4">
                                <div class="">
                                    <div class="col-lg-0">
                                        <div class="panel panel-default">
		                                    <div class="panel-heading" style="text-align: center; font-weight: bold">
		                                            <a href="../email/?id=noreply">noreply.jtutor@gmail.com</a>
		                                    </div>
		                                    <div class="">
		                                        <a href="../email/?id=noreply"><img src="https://www.jtutor.ml/dashboard/email.png" style="width:100%" class="img-responsive"></a>
		                                    </div>
		                                    <div class="panel-footer" style="text-align: center; font-weight: bold">
		                                            <a href="../email/?id=noreply" style="cursor:pointer">View More</a>
		                                    </div>
		                               </div>
		                           </div>
		                        </div>
		                    </div>
		                    <div class="col-lg-4">
                                <div class="">
                                    <div class="col-lg-0">
                                        <div class="panel panel-default">
		                                    <div class="panel-heading" style="text-align: center; font-weight: bold">
		                                            <a href="../email/?id=juliana">juliana.jtutor@gmail.com</a>
		                                    </div>
		                                    <div class="">
		                                        <a href="../email/?id=juliana"><img src="https://www.jtutor.ml/dashboard/email.png" style="width:100%" class="img-responsive"></a>
		                                    </div>
		                                    <div class="panel-footer" style="text-align: center; font-weight: bold">
		                                            <a href="../email/?id=juliana" style="cursor:pointer">View More</a>
		                                    </div>
		                               </div>
		                           </div>
		                        </div>
		                    </div>
		                    <div class="col-lg-4">
                                <div class="">
                                    <div class="col-lg-0">
                                        <div class="panel panel-default">
		                                    <div class="panel-heading" style="text-align: center; font-weight: bold">
		                                            <a href="../email/?id=feedback">feedback@jtutor.com</a>
		                                    </div>
		                                    <div class="">
		                                        <a href="../email/?id=feedback"><img src="https://www.jtutor.ml/dashboard/email.png" style="width:100%" class="img-responsive"></a>
		                                    </div>
		                                    <div class="panel-footer" style="text-align: center; font-weight: bold">
		                                            <a href="../email/?id=feedback" style="cursor:pointer">View More</a>
		                                    </div>
		                               </div>
		                           </div>
		                        </div>
		                    </div>
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
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="font-weight: bold">
                                <i class="fa fa-bell fa-fw"></i> Notifications
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-envelope fa-fw"></i> <span id="emailno2">0</span> New Mail
                                            <span class="pull-right text-muted small"><em><span id="mgstime">0</span> minutes ago</em>
                                            </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-comment fa-fw"></i> <span id="mgseno">0</span> New Message
                                            <span class="pull-right text-muted small"><em><span id="mgstime6">0</span> minutes ago</em>
                                            </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fas fa-chalkboard-teacher fa-fw"></i> <?php echo $available_teacher; ?> Available Teacher
                                            <span class="pull-right text-muted small"><em><span id="mgstime5">0</span> minutes ago</em>
                                            </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-user-graduate fa-fw"></i> <?php echo $available_student; ?> Available Student
                                            <span class="pull-right text-muted small"><em><span id="mgstime4">0</span> minutes ago</em>
                                            </span>
                                    </a>
                                </div>
                                <!-- /.list-group -->
                                <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div id="past" style="display:none">0</div>
                        
                        <!-- /.panel -->
                        
                        <!-- /.panel -->
                        <script>
                                var date = new Date();
                                var hour = date.getHours();
                                var min = date.getMinutes();
                                var c = hour + '' + min;
                              document.getElementById('past').innerHTML = c
                              function setText(){
                                xhrc = new XMLHttpRequest();
                                xhrc.open('POST' , 'teet.php', true);
                                xhrc.setRequestHeader('content-type','application/x-www-form-urlencoded');
                                xhrc.send();
                                xhrc.onreadystatechange = function(){
                                    var dates = new Date();
                                    var hours = dates.getHours();
                                    var mins = dates.getMinutes();
                                    var cs = hours + '' + mins;
                                //  alert(xhr.responseText);
                                  document.getElementById('emailno').innerHTML = xhrc.responseText;
                                  document.getElementById('emailno2').innerHTML = xhrc.responseText;
                                  var pasttime = cs - document.getElementById('past').innerHTML;
                                  document.getElementById('mgstime').innerHTML = pasttime;
                                  document.getElementById('emailno3').innerHTML = xhrc.responseText;
                                  document.getElementById('mgstimes').innerHTML = pasttime;
                                  document.getElementById('mgstime4').innerHTML = pasttime;
                                  document.getElementById('mgstime5').innerHTML = pasttime;
                                  document.getElementById('mgstime6').innerHTML = pasttime;
                                  document.getElementById('mgstimes2').innerHTML = pasttime;
                                }
                              }
                              
                              document.getElementById('past').innerHTML = c
                              function Message(){
                                xhr = new XMLHttpRequest();
                                xhr.open('POST' , 'message_no.php', true);
                                xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
                                xhr.send();
                                xhr.onreadystatechange = function(){
                                  document.getElementById('mgseno').innerHTML = xhr.responseText;
                                }
                              }
                              setInterval("setText()",30000);
                              setInterval("Message()",2000);
                        </script>
                            
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

    </body>
</html>
