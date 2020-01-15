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
      <!-- Title -->
          <title>JTutor - My Profile</title>

      <!-- Icon -->
      <link rel="shortcut icon" href="../img/favicon.ico">

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!--Bootstrap-->
        <!--css files-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!--js files-->
        <script src="js/bootstrap.min.js"></script>

      <!--Ajax file-->
      <link rel="stylesheet" type="text/css" href="css/ajax/ajax-meyer-2-0-reset-min.css">

      <!-- Jquery script-->
      <script src="js/jquery-1.11.1.min.js"></script>

      <!--Font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">

      <!--Icon-->
      <link href="../fontawesome/css/all.css" rel="stylesheet">

      <!--Custom css-->
      <link rel="stylesheet" href="../dashboard/css/style.css">
      <?php 
        include('fetch.php');
        
      ?>
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    		    <div class="card">
    		        <div class="card-body">
    		            <div class="row">
    		                <div class="col-md-12">
    		                    <h4>Account Details</h4>
    		                    <hr>
    		                </div>
    		            </div>
    		            <div class="row">
    		                <div class="col-md-12">
    		                    <form method="post" name="myForm" action="update.php" target="_parent" onsubmit="return validateForm()" autocomplete="off" enctype="multipart/form-data">
                                  <div class="form-group row">
                                    <label for="username" class="col-4 col-form-label" >User Name</label> 
                                    <div class="col-8">
                                      <input id="username" name="username" placeholder="Username" class="form-control here" <?php echo 'value= "'.$usr.'"'; ?> type="text" readonly>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="name" class="col-4 col-form-label">First Name</label> 
                                    <div class="col-8">
                                      <input id="name" name="fname" placeholder="First Name" class="form-control here" type="text" <?php echo 'value= "'.$fname.'"'; ?>>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="lastname" class="col-4 col-form-label">Last Name</label> 
                                    <div class="col-8">
                                      <input id="lastname" name="lname" placeholder="Last Name" class="form-control here" type="text" <?php echo 'value= "'.$lname.'"'; ?>>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="text" class="col-4 col-form-label">Birthday</label> 
                                    <div class="col-8">
                                      <input id="text" name="date" placeholder="Birthday" class="form-control here" required="required" type="text" <?php echo 'value= "'.$date.'"'; ?> readonly="">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="text" class="col-4 col-form-label">Role</label> 
                                    <div class="col-8">
                                      <input id="text" name="role" placeholder="Role" class="form-control here" required="required" type="text" <?php echo 'value= "'.$role.'"'; ?> readonly="">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label> 
                                    <div class="col-8">
                                      <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text" <?php echo 'value= "'.$email.'"'; ?> readonly="">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="gender" class="col-4 col-form-label">Gender</label> 
                                    <div class="col-8">
                                      <input id="website" name="gender" placeholder="Gender" class="form-control here" type="text" <?php echo 'value= "'.$gender.'"'; ?> readonly="">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="Phone Number" class="col-4 col-form-label">Phone Number</label> 
                                    <div class="col-8">
                                      <input id="website" name="no" placeholder="Phone Number" class="form-control here" type="number" <?php echo 'value= "'.$no.'"'; ?>>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="publicinfo" class="col-4 col-form-label">Address</label> 
                                    <div class="col-8">
                                      <textarea id="text" name="address" cols="40" rows="4" class="form-control"><?php echo $address; ?></textarea>
                                    </div>
                                  </div>
                            <div class="row" style="padding-top: 20px">
    			                <div class="col-md-12">
    			                    <h4>Change Password</h4>
    			                    <hr>
    			                </div>
    			            </div>
                                  <div class="form-group row">
                                    <label for="newpass" class="col-4 col-form-label">New Password</label> 
                                    <div class="col-8">
                                      <input id="password" name="inewpass" placeholder="New Password" class="form-control here" type="password" onkeyup='check();'>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="newpass" class="col-4 col-form-label">Confirm New Password</label> 
                                    <div class="col-8">
                                      <input id="confirm_password" name="cnewpass" placeholder="Confirm New Password" class="form-control here" type="password" onkeyup='check();'>
                                    </div>
                                  </div>
                                  <span id='message'></span>
                            <div class="row" style="padding-top: 20px">
    			                <div class="col-md-12">
    			                    <h4>Change Avatar</h4>
    			                    <hr>
    			                </div>
    			            </div>
                                  <div class="col-12">
                                    <div class="col-12" style="border: 2px solid rgba(0,0,0,.125); border-radius: .25rem; height: 280px; background-color: #f5f5f5">
                                    	<div class="avatar-upload">
    								        <div class="avatar-edit">
    								            <input type='file' name='file' id="imageUpload" accept="image/*" />
    								            <input type='hidden' name='dp' value='<?php echo $dp;?>'/>
    								            <input type='hidden' name='folder' value='<?php echo $folder;?>'/>
    								            <label for="imageUpload"><span><i class="fas fa-pencil-alt" id="icon"></i></span></label>
    								        </div>
    								        <div class="avatar-preview">
    								            <div id="imagePreview" style="background-image: url(https://www.jtutor.ml/user_avatar/<?php echo $avatar;?>);">
    								            </div>
    								        </div>
    								    </div>
                                    </div>
                                  </div>

                            <div class="row" style="padding-top: 20px">
    			                <div class="col-md-12">
    			                    <h4>Update Confirmation</h4>
    			                    <hr>
    			                </div>
    			            </div>
                                  <div class="form-group row">
                                    <label for="newpass" class="col-4 col-form-label">Current Password</label> 
                                    <div class="col-8">
                                      <input id="newpass" name="oldpass" placeholder="Your Current Password" class="form-control here" type="password" required="">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    	<button name="submit" type="submit" value="Update" class="btn btn-primary" >Update My Profile</button>
                                    </div>
                                  </div>
                                </form>
    		                </div>
    		            </div>
    		            
    		        </div>
    		    </div>
    		</div>
    	</div>
    </div>
    <script src='js/jquery.min.js'></script>
    <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
    </script>
    
    <!--Password Check-->
    <script>
        var check = function() {
            if (document.getElementById('password').value == document.getElementById('confirm_password').value) {
                document.getElementById('message').innerHTML = '';
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Password not Matching';
            }
        }
    </script>
    
    <!--Password Check Before Submit-->
    <script>
        function validateForm() {
            var n = document.forms["myForm"]["inewpass"].value;
            var c = document.forms["myForm"]["cnewpass"].value;
            if (n != c) {
                alert("Password Not Matching");
                return false;
            }
        }
    </script>
    <? include('../cursor.html'); ?>
  </body>
</html>
