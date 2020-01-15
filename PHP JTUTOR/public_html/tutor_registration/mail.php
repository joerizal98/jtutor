<?php
	if(isset($_GET['user']) && !empty($_GET['user']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
	        $hash = $_GET['hash'];
	        $user = $_GET['user'];

	        $to = 'fosuwicova@hubii-network.com'; // Send email to our user
			$subject = 'Signup | Verification'; // Give the email a subject 
			$message = '
			 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
			 
------------------------
Username: '.$username.'
Password: '.$password.'
------------------------
			 
Click here to login now:
http://localhost/jtutor/login
			 
			'; // Our message above including the link
			                     
			$headers = 'From:noreply@jtutor.ml' . "\r\n"; // Set from headers
			mail($to, $subject, $message, $headers); // Send our email
	}
?>
<?php
	
