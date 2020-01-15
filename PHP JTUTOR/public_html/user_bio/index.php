<!doctype html>
<?
        session_start();
        require_once('connection.php');
        $database_name = $_GET['dt'];
        if ($_GET['dt'] == 1){
        	$sql = "select * from confim_tutor where username='".$_GET['id']."'";
            $result = $con->query($sql);
        	while($row = $result->fetch_assoc()) {
        	    $name = $row['fname']." ".$row['lname'];
        	    $username = $row['username'];
        	    $email = $row['email'];
        	    $birthday = $row['birthday'];
        	    $gender = $row['gender'];
        	    $no = $row['no'];
        	    $edu = $row['edu'];
        	    $address = $row['address'];
        	    $sub1 = $row['subject1'];
        	    $sub2 = $row['subject2'];
        	    $title = "Application Detail";
        	    $subs = $sub1.", ".$sub2; 
        	    if($row['dp'] == "user.png"){
        	        $dp = "default.png";
        	    }else{
        	        $dp = "https://jtutor.ml/user_avatar/".$row['folder']."/".$row['dp'];
        	    }
        	}
        }elseif ($_GET['dt'] == 0){
            $sql1 = "select * from user where username='".$_GET['id']."'";
            $result1 = $con->query($sql1);
        	while($row1 = $result1->fetch_assoc()) {
        	    $name = $row1['fistname']." ".$row1['lastname'];
        	    $username = $row1['username'];
        	    $email = $row1['email'];
        	    $birthday = $row1['birthday'];
        	    $gender = $row1['gender'];
        	    $no = $row1['pnumber'];
        	    $edu = $row1['edu'];
        	    
        	    $address = $row1['address'];
        	    if($row1['role'] == "student"){
        	        $title = "Student Detail";
        	    }else{
        	        $sqlt = "select * from tutor where username='".$_GET['id']."'";
                    $resultt = $con->query($sqlt);
                	while($rowt = $resultt->fetch_assoc()) {
                	    $subs = $rowt['subject'].",".$subs;
                	}
        	        $title = "Teacher Detail";
        	    }
        	    if($row1['dp'] == "user.png"){
        	        $dp = "default.png";
        	    }else{
        	        $dp = "https://jtutor.ml/user_avatar/".$row1['folder']."/".$row1['dp'];
        	    }
        	}
        }
        
        $sub = $subs;
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Playfair+Display:,300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body onload="myFunction()">
    
    <div class="site-wrap">

      <a href="portfolio.php?id=<?echo $_GET['id'].'&dt=1&csr=0';?>" class="offcanvas-toggle " Style="color:white">
      <? if ($database_name == 1 or $database_name == 0){
        echo "Certificate";}
      ?></a>
      <div class="offcanvas_menu" id="offcanvas_menu">
        <ul class="mb-5">
          <li class="active"><a href="index.php?id=<?echo $_GET['id'].'&dt=1&csr=0';?>">Bio</a></li>
          <li><a href="portfolio.php?id=<?echo $_GET['id'].'&dt=1&csr=0';?>">Certificate</a></li>
        </ul>

        <ul class="social">
          <li><a href="#" class="fa fa-twitter"></a></li>
          <li><a href="#" class="fa fa-facebook"></a></li>
          <li><a href="#" class="fa fa-instagram"></a></li>
        </ul>

</br><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

      </div>
    
      
      <aside style="background-image: url(<?echo $dp;?>);"></aside>
      <main>
        <h2 class="mb-0">Hi, I'm <?echo $name;?></h2>
        <div class="mb-3">
        <p class="lead mb-3"><?echo $title;?></p>
        </div>
        <h4>My Personal Detail</h4>
        <table width="100%">
        	<tr>
        		<td style="width: 40%">Username</td>
        		<td valign="top">: </td>
        		<td> <?echo $username;?></td>
        	</tr>
        	<tr>
        		<td>Name</td>
        		<td valign="top">: </td>
        		<td> <?echo $name;?></td>
        	</tr>
        	<tr>
        		<td>Email</td>
        		<td valign="top">: </td>
        		<td> <?echo $email;?></td>
        	</tr>
        	<tr>
        		<td>Birthday</td>
        		<td valign="top">: </td>
        		<td> <?echo $birthday;?></td>
        	</tr>
        	<tr>
        		<td>Gender</td>
        		<td valign="top">: </td>
        		<td> <?echo $gender;?></td>
        	</tr>
        	<tr>
        		<td>Phone Number</td>
        		<td valign="top">: </td>
        		<td> <?echo $no;?></td>
        	</tr>
        	<tr>
        	    <? if ($database_name == 1){
        	    echo "<td>Education:</td><td>: </td><td>".$edu."</td>";
        	}?>
        	</tr>
        	<tr>
        		<td valign="top">Address</td>
        		<td valign="top">: </td>
        		<td> <?echo $address;?></td>
        	</tr>
        	
        	<tr><? if ($database_name == 1 or $database_name == 0){
        	    echo "<td>Subject Selected:</td><td>: </td><td>".$sub." </td>
        	    ";
        	    
        	}?>
        		
        	</tr>
        	<br>
        </table>
        <style>
            html, body {
                max-width: 100%;
                overflow-x: hidden;
            }
            .buttons {
              margin-top:10px;
              background-color: Crimson;  
              border-radius: 5px;
              color: white;
              padding: 10px;
              text-decoration: none;
              text-align:center;
            }
            
            .buttons:focus,
            .buttons:hover {
              background-color: FireBrick;
              color: White;
            }
        </style>
        <?php
            if($_GET['csr'] == 0 ){
                $display= "none";
                $link = "";
                $title = "";
            }else if ($_GET['csr'] == 1 ){
                $display= "none";
                $link = "";
                $title = "Enroll this Subject With this Tutor";
            }else if ($_GET['csr'] == 2 ){
                $display= "block";
                $title = "Enroll this Subject With this Tutor";
                $link = "https://www.jtutor.ml/course/subject/tutor/action/?id=".$_GET['id_code']."&subject=".$_GET['subject'];
            }
        ?>
        <div style="text-align: center; display:<?echo $display?>">
            <br>
            <a href="<?echo $link?>" class="buttons"><?echo $title?></a>
        </div>
        <!-- <h2 class="mb-4 mt-5">Services</h2>
        <div class="row">
          <div class="col-md-6 col-lg-6 mb-4">
            <div class="media custom-media  d-block">
              <div class="icon mr-3"><span class="ion-android-cart"></span></div>
              <div class="media-body">
                <h3 class="mt-0"><a href="#">eCommerce Websites</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati totam.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 mb-4">
            <div class="media custom-media  d-block">
              <div class="icon mr-3"><span class="ion-bonfire"></span></div>
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Branding Identity </a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 mb-4">
            <div class="media custom-media  d-block">
              <div class="icon mr-3"><span class="ion-videocamera"></span></div>
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Video Editing</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati totam.</p>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-6 mb-4">
            <div class="media custom-media  d-block">
              <div class="icon mr-3"><span class="ion-cube"></span></div>
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Web Applications </a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam.</p>
              </div>
            </div>
          </div> -->
        </div>
        
      </main>
    </div>

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        function myFunction() {
            window.scrollTo(0, 50);
        }
    </script>
    <? include('../cursor.html'); ?>
  </body>
</html>