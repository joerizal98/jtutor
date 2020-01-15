<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container" style="border-style: groove; padding-top:5px; margin-top:10px; margin-bottom: 10px" id="student">
    <h1 style="text-align:center; padding-bottom:5px">Registered Student List</h1>
	<div class="row">
		
        
        <div class="col-md-12">
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                    <th></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Birth Date</th>
                    <th>Gender</th>
                    <th width="30%">Address</th>
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
		$results_per_page = 4;
		// find out the number of results stored in database
		$sql='SELECT * FROM user WHERE role="student"';
		$result = mysqli_query($con, $sql);
		$number_of_results = mysqli_num_rows($result);
		// determine number of total pages available
		$number_of_pages = ceil($number_of_results/$results_per_page);
		// determine which page number visitor is currently on
		if (!isset($_GET['page1'])) {
		  $page = 1;
		  $pagenow = 1;
		} else {
		  $page = $_GET['page1'];
		  $pagenow = $_GET['page1'];
		}

		// determine the sql LIMIT starting number for the results on the displaying page
		$this_page_first_result = ($page-1)*$results_per_page;

		// display the links to the pages
		

      $sql='SELECT * FROM user WHERE role="student" LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
		$result = mysqli_query($con, $sql);

        if ($result->num_rows > 0) {
	        while($row = mysqli_fetch_array($result)) {
	            $usr = $row['username'];
	            $fname = $row['fistname'];
	            $lname = $row['lastname'];
	            $email = $row['email'];
	            $date = $row['birthday'];
	            $gender = $row['gender'];
	            $address = $row['address'];
	            $sub1 = $row['fistname'];
	            $sub2 = $row['fistname'];
	            $edu = $row['birthday'] ;
	            $folder = $row['folder'];
	            
	            echo '<tr><td><i class="fas fa-list-ul" style="cursor: pointer;" onclick="myFunction2(';?><?echo"'https://jtutor.ml/user_bio/?id=".$usr."&dt=0&csr=0'";?><?echo')"></i></td>';
	            echo '<td>'.$fname.'</td>'; //First Name
	            echo '<td>'.$lname.'</td>'; //Last Name
	            echo '<td>'.$email.'</td>'; //Email
	            echo '<td>'.$date.'</td>'; //Subject1 Name
	            echo '<td>'.$gender.'</td>';//Subject 2
	            echo '<td>'.$address.'</td>'; //Education Level
	            
	        }
        }else{

        }?>
   
    
   
    
    </tbody>
        
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
	<?php
			$sqlq='SELECT * FROM user WHERE role="student"';
			$resultq = mysqli_query($con, $sqlq);
			$number_of_resultsq = mysqli_num_rows($resultq);
			// determine number of total pages available
			$num = ceil($number_of_resultsq/4);
		$fnow_paging = $_GET['page1'] - 1;
		$lnow_paging = $_GET['page1'] + 1;
		if ($page<=1){
			$class = 'class="disabled"';
			$fnumpage = '';
		}else{
			$class = 'class=""';
			$fnumpage = 'href="display.php?page1='.$fnow_paging.'"';
		}
		if ($page>=$num) {
			$class2 = 'class="disabled"';
			$lnumpage = '';
		}else{
			$class2 = 'class=""';
			$lnumpage = 'href="display.php?page1='.$lnow_paging.'"';
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
				echo '<li '.$style.'><a href="display.php?page1=' . $page . '">' . $page . '</a></li>';
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
        function myFunction2(name) {
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
                document.getElementById('student').scrollIntoView();
        
            }
        
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                    document.getElementById('student').scrollIntoView();
                }
            }
        
        }
    </script>
</body>
</htm