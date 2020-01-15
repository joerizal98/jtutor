<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 5; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        
        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        
        /* The Close Button */
        .close {
            color: #000;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
            color: red;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container" style="border-style: groove; padding-top:5px; margin-top:10px; margin-bottom: 10px" id="pending_teacher">
    <h1 style="text-align:center; padding-bottom:5px">Pending Tutor Application List</h1>
	<div class="row">
		
        
        <div class="col-md-12">
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                    <th></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Education Level</th>
                    <th>Subject 1</th>
                    <th>Subject 2</th>
                    <th>Approve</th>
                    <th>Reject</th>
                   </thead>
    <tbody>
        <style>
            .fa-list-ul:hover {
                color: #357ebd;
            }
        </style>
    <?php
      require_once('../connection.php');
      if ($con->connect_error) {
              die("Connection failed: " . $con->connect_error);
      }

      	// define how many results you want per page
		$results_per_page = 5;
		// find out the number of results stored in database
		$sql='SELECT * FROM confim_tutor';
		$result = mysqli_query($con, $sql);
		$number_of_results = mysqli_num_rows($result);
		// determine number of total pages available
		$number_of_pages = ceil($number_of_results/$results_per_page);
		// determine which page number visitor is currently on
		if (!isset($_GET['page0'])) {
		  $page = 1;
		  $pagenow = 1;
		} else {
		  $page = $_GET['page0'];
		  $pagenow = $_GET['page0'];
		}

		// determine the sql LIMIT starting number for the results on the displaying page
		$this_page_first_result = ($page-1)*$results_per_page;

		// display the links to the pages
		

      $sql='SELECT * FROM confim_tutor LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
		$result = mysqli_query($con, $sql);

        if ($result->num_rows > 0) {
	        while($row = mysqli_fetch_array($result)) {
	            $usr = $row['username'];
	            $fname = $row['fname'];
	            $lname = $row['lname'];
	            $email = $row['email'];
	            $date = $row['birthday'];
	            $gender = $row['gender'];
	            $address = $row['address'];
	            $sub1 = $row['subject1'];
	            $sub2 = $row['subject2'];
	            $edu = $row['edu'] ;
	            $folder = $row['folder'];
	            
	            echo '<tr><td><i class="fas fa-list-ul" style="cursor: pointer;" onclick="myFunction1(';?><?echo"'https://jtutor.ml/user_bio/?id=".$usr."&dt=1&csr=0'";?><?echo')"></i></td>';
	            echo '<td>'.$fname.'</td>'; //First Name
	            echo '<td>'.$lname.'</td>'; //Last Name
	            echo '<td>'.$email.'</td>'; //Email
	            echo '<td>'.$edu.'</td>'; //Education Level
	            echo '<td>'.$sub1.'</td>'; //Subject1 Name
	            echo '<td>'.$sub2.'</td>';//Subject 2
	            echo '<!--Approve Button-->
	                  <td align="center">
	                    <form method="post" action="approve.php" target="_parent">
	                      <input type="hidden" name="user" value="'.$usr.'">
	                      <p data-placement="top" data-toggle="tooltip" title="Approve"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="" ><span class="glyphicon glyphicon-ok"></span></button></p>
	                    </form>
	                  </td>
	                  <!--decline button-->
	                  <td align="center">
	                    <form method="post" action="decline.php" target="_parent">
	                      <input type="hidden" name="user" value="'.$usr.'">
	                      <input type="hidden" name="folder" value="'.$folder.'">
	                      <input type="hidden" name="email" value="'.$email.'">
	                      <input type="hidden" name="name" value="'.$fname.' '.$lname.'">
	                      <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="" ><span class="glyphicon glyphicon-trash"></span></button></p>
	                    </form>
	                  </td>
	                </tr>';
	        }
        }else{

        }?>
   
    
   
    
    </tbody>
        
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
	<?php
			$sqlq='SELECT * FROM confim_tutor';
			$resultq = mysqli_query($con, $sqlq);
			$number_of_resultsq = mysqli_num_rows($resultq);
			// determine number of total pages available
			$num = ceil($number_of_resultsq/5);
		$fnow_paging = $_GET['page0'] - 1;
		$lnow_paging = $_GET['page0'] + 1;
		if ($page<=1){
			$class = 'class="disabled"';
			$fnumpage = '';
		}else{
			$class = 'class=""';
			$fnumpage = 'href="display.php?page0='.$fnow_paging.'"';
		}
		if ($page>=$num) {
			$class2 = 'class="disabled"';
			$lnumpage = '';
		}else{
			$class2 = 'class=""';
			$lnumpage = 'href="display.php?page0='.$lnow_paging.'"';
		}
	?>
	<li <?php echo $class;?> ><a <?php echo $fnumpage;?>><span class="glyphicon glyphicon-chevron-left"></span></a></li>
<?php
		for ($page=1;$page<=$number_of_pages;$page++) {
				if ($page == $pagenow){
					$style = 'class="active"';
				}else{
					$style = 'class=""';
				}
				echo '<li '.$style.'><a href="display.php?page0=' . $page . '">' . $page . '</a></li>';
		}
  ?>
  <!--<li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>-->
  
  <li <?php echo $class2;?> ><a <?php echo $lnumpage;?>><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
	</div>
</div>
    <div id="myModal" class="modal">
    
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <p><iframe id="profile" style="width:100%; height:500px" frameBorder="0"></iframe></p>
      </div>
    
    </div>

    <script>
        function myFunction1(name) {
            var modal = document.getElementById('myModal');
        
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
        
            // When the user clicks the button, open the modal 
        
                document.getElementById('profile').src = name;
                modal.style.display = "block";
                window.parent.scroll(0,180);
        
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
                document.getElementById('pending_teacher').scrollIntoView();
        
            }
        
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                    document.getElementById('pending_teacher').scrollIntoView();
                }
            }
        
        }
    </script>
</body>
</htm