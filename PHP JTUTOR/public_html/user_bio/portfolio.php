<!doctype html>
<?
        session_start();
        require_once('connection.php');
    	$sql = "select * from confim_tutor where username='".$_GET['id']."'";
        $result = $con->query($sql);
        $sql2 = "select * from user where username='".$_GET['id']."'";
        $result2 = $con->query($sql2);
        if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
        	    $edu = $row['edu'];
        	    $img = "https://www.jtutor.ml/edu_files/".$row['folder']."/".$row['eduimg'];
        	}
        }else{
            while($row2 = $result2->fetch_assoc()) {
        	    $edu = $row2['edu'];
        	    $dir = "../edu_files/".$row2['folder']."/".$row2['eduimg'];
        	    $file = scandir($dir, 1);
        	    $scans= array_values($file);
        	    $img = "https://www.jtutor.ml/edu_files/".$row2['folder']."/".$file[0];
        	}
        }
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
  <body>
    
    <div class="site-wrap">

      <a href="#" class="offcanvas-toggle js-offcanvas-toggle">Menu</a>
      <div class="offcanvas_menu" id="offcanvas_menu">
        <ul class="mb-5">
          <li><a onclick="window.history.go(-1); return false;" href="#">Bio</a></li>
          <li class="active"><a href="#">Certificate</a></li>
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
      
      <aside style="background-image: url(default.png);"></aside>
      <main>
        <a onclick="window.history.go(-1); return false;" href="#" class="home-button"><span class="fa fa-home"></span></a>
        <h1 class="mb-5">Education Level: <?echo $edu;?></h1>
        <div class="mb-7">
          <ul class="portfolio-list">
            <li>
              
                <img src="<?echo $img;?>" alt="" style="width: 100%">
            </li>
            
          </ul>
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
        window.scrollTo(0, 200);
    </script>

  </body>
</html>