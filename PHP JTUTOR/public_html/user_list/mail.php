<?php
	if(isset($_GET['user']) && !empty($_GET['user']) AND isset($_GET['pass']) && !empty($_GET['pass'])){
	        $pass = $_GET['pass'];
	        $user = $_GET['user'];
	        $email = $_GET['email'];
	        $name = $_GET['name'];
	}      
            require_once "Mail.php";

            $host = "ssl://smtp.gmail.com";
            $username = "noreply.jtutor@gmail.com";
            $password = 'Jtutor123';
            $port = '465';
            $to = $email;

            $email_from = 'noreply.jtutor@gmail.com';
            $email_subject = 'Congratulation '.$name;
            $email_body = '
            
            <!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Verify your work email address</title>
  
  
  
  
  
</head>

<body>

  <head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		body {
			margin: 0;
			background: #FEFEFE;
			color: #585858;
		}

		table {
			font-size: 15px;
			line-height: 23px;
			max-width: 500px;
			min-width: 460px;
			text-align: center;
		}
		.table_inner { min-width: 100% !important; }
		td {
			font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
			vertical-align: top;
		}
		
		.carpool_logo { margin: 30px auto; }

		.dummy_row { padding-top: 20px !important; }
		.section,
		.sectionlike { background: #C9F9E9; }
		.section { padding: 0 20px;  }
		.sectionlike { padding-bottom: 10px; }
		.section_content {
			width: 100%;
			background: #fff;
		}
		.section_content_padded { padding: 0 35px 40px; }
		.section_zag { background: #F4FBF9; }
		.imageless_section { padding-bottom: 20px; }

		img {
			display: block;
			margin: 0 auto;
		}
		.img_section {
			width: 100%;
			max-width: 500px;
		}
		.img_section_side_table { width: 100% !important; }

		h1 {
			font-size: 20px;
			font-weight: 500;
			margin-top: 40px;
			margin-bottom: 0;
		}
		.near_title { margin-top: 10px; }
		.last { margin-bottom: 0; }

		a {
			color: #63D3CD;
			font-weight: 500;
			word-break: break-word; /* Footer has long unsubscribe link */
		}

		.button {
			display: block;
			width: 100%;
			max-width: 300px;
			background: #20DA9C;
			border-radius: 8px;
			color: #fff;
			font-size: 18px;
			font-weight: normal; /* Resetting from a */
			padding: 12px 0;
			margin: 30px auto 0;
			text-decoration: none;
		}

		small {
			display: block;
			width: 100%;
			max-width: 330px;
			margin: 14px auto 0;
			font-size: 14px;
		}
		.signature { padding: 20px; }

		.footer,
		.footer_like { background: #1FD99A; }
		.footer { padding: 0 20px 30px; }
		.footer_content {
			width: 100%;
			text-align: center;
			font-size: 12px;
			line-height: initial;
			color: #005750;
		}
		.footer_content a {
			color: #005750;
		}
		.footer_item_image { margin: 0 auto 10px; }
		.footer_item_caption { margin: 0 auto; }

		.footer_legal {
			padding: 20px 0 40px;
			margin: 0;
			font-size: 12px;
			color: #A5A5A5;
			line-height: 1.5;
		}

		.text_left { text-align: left; }
		.text_right { text-align: right; }
		.va { vertical-align: middle;  }
		
		.stats {
			min-width: auto !important;
			max-width: 370px;
			margin: 30px auto 0;
		}
		.counter { font-size: 22px; }
		.stats_counter { width: 23%; }
		.stats_image {
			width: 18%;
			padding: 0 10px;
		}
		.stats_meta { width: 59%; }
		.stats_spaced { padding-top: 16px; }
		.walkthrough_spaced { padding-top: 24px; }

		.walkthrough { max-width: none;  }
		.walkthrough_meta { padding-left: 20px; }

		.table_checkmark { padding-top: 30px;  }
		.table_checkmark_item { font-size: 15px; }
		.td_checkmark {
			width: 24px;
			padding: 7px 12px 0 0;
		}

		.padded_bottom { padding-bottom: 40px; }
		.marginless { margin: 0; }

		/* Restricting responsive for iOS Mail app only as Inbox/Gmail have render bugs */
		@media only screen and (max-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {
			table { min-width: auto !important; }

			.section_content_padded {
				padding-right: 25px !important;
				padding-left: 25px !important;
			}

			.counter { font-size: 18px !important; }
		}
	</style>
</head>
<body style="	margin: 0;
	background: #6f42c1;
	color: #585858;
">
	<!-- Preivew text -->
	<span class="preheader" style="display: none !important; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;border-collapse: collapse;border: 0px;"></span> 
	<!-- Carpool logo -->
	<table align="center" border="0" cellspacing="0" cellpadding="0" style="	font-size: 15px;
	line-height: 23px;
	max-width: 500px;
	min-width: 460px;
	text-align: center;
">
		<tbody><tr>
			<td style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
	vertical-align: top;
    border: none !important;
">
				<img src="https://www.jtutor.ml/img/nest.png" class="carpool_logo" width="232" style="	display: block;
	margin: 0 auto;
margin: 30px auto;">
			</td>
		</tr>
		<!-- Header -->
		<tr>
			<td class="sectionlike imageless_section" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
	vertical-align: top;
    border: none !important;
  background: #C9F9E9;
  padding-bottom: 10px;
padding-bottom: 20px;"></td>
		</tr>
		<!-- Content -->
		<tr>
			<td class="section" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
	vertical-align: top;
    border: none !important;
	background: #C9F9E9;
	padding: 0 20px;
">
				<table border="0" cellspacing="0" cellpadding="0" class="section_content" style="	font-size: 15px;
	line-height: 23px;
	max-width: 500px;
	min-width: 460px;
	text-align: center;
	width: 100%;
	background: #fff;
">
					<tbody><tr>
						<td class="section_content_padded" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
	vertical-align: top;
    border: none !important;
padding: 0 35px 40px;">
							<h1 style="	font-size: 20px;
	font-weight: 500;
	margin-top: 40px;
	margin-bottom: 0;
">Hi '.$name.',</h1>
							<p class="near_title last" style="margin-top: 10px;margin-bottom: 0;">Congratulation you Application to become Teacher in Jtutor Tutoring Plaform has Been Approved. Below is Your User Name and Password</p>
							<p class="near_title last" style="margin-top: 10px;margin-bottom: 0;color:#20DA9C">Username: '.$user.'
								<br>
								Password: '.$pass.'
							</p>
							<a href="https://www.jtutor.ml/login/" style="	display: block;
	width: 100%;
	max-width: 300px;
	background: #20DA9C;
	border-radius: 8px;
	color: #fff;
	font-size: 18px;
	padding: 12px 0;
	margin: 30px auto 0;
	text-decoration: none;
" target="_blank">Login Now!</a>
							<small style="	display: block;
	width: 100%;
	max-width: 330px;
	margin: 14px auto 0;
	font-size: 14px;
">Please Change Your Password After Receiving This Email and Welcome To JTutor Tutoring Platform
</small>
						</td>
					</tr>
				</tbody></table>
			</td>
		</tr>
		<!-- Signature -->
		<tr>
			<td class="section" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
	vertical-align: top;
    border: none !important;
	background: #C9F9E9;
	padding: 0 20px;
">
				<table border="0" cellspacing="0" cellpadding="0" class="section_content section_zag" style="	font-size: 15px;
	line-height: 23px;
	max-width: 500px;
	min-width: 460px;
	text-align: center;
	width: 100%;
	background: #fff;
background: #F4FBF9;">
					<tbody><tr>
						<td class="signature" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
	vertical-align: top;
    border: none !important;
padding: 20px;">
							<p class="marginless" style="margin: 0;">Happy Tutoring, <br>The JTutor Team</p>
						</td>
					</tr>
				</tbody></table>
			</td>
		</tr>
		<!-- Footer -->
		<tr>
			<td class="section dummy_row" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
	vertical-align: top;
    border: none !important;
	background: #C9F9E9;
	padding: 0 20px;
padding-top: 20px !important;"></td>
		</tr>
		<tr>
			<td style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
	vertical-align: top;
    border: none !important;
">
				<table border="0" cellspacing="0" cellpadding="0" class="section_content" style="	font-size: 15px;
	line-height: 23px;
	max-width: 500px;
	min-width: 460px;
	text-align: center;
	width: 100%;
	background: #fff;
">
					<tbody><tr>
						<td class="footer_like" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
	vertical-align: top;
    border: none !important;
background: #1FD99A; "><img src="https://carpool-email-assets.s3.amazonaws.com/shared/footer@2x.png" alt="" width="500" class="img_section" style="	display: block;
	margin: 0 auto;
	width: 100%;
	max-width: 500px;
"></td>
					</tr>
					<tr>
						<td class="footer" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
	vertical-align: top;
    border: none !important;
	padding: 0 20px 30px;
	background: #1FD99A;
">
							<table border="0" cellspacing="0" cellpadding="0" class="footer_content" style="	font-size: 15px;
	line-height: 23px;
	max-width: 500px;
	min-width: 460px;
	text-align: center;
	width: 100%;
	font-size: 12px;
	line-height: initial;
	color: #005750;
">
								<tbody><tr>
									<td width="33%" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
	vertical-align: top;
    border: none !important;
">
										<img src="https://carpool-email-assets.s3.amazonaws.com/shared/footer-learn@2x.png" width="24" class="footer_item_image" style="	display: block;
	margin: 0 auto;
margin: 0 auto 10px;">
										<p class="footer_item_caption" style="margin: 0 auto;">More about <br><a href="https://www.jtutor.ml/" style="	color: #005750;
" target="_blank">JTutor</a></p>
									</td>
									<td width="33%" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
	vertical-align: top;
    border: none !important;
">
										<img src="https://carpool-email-assets.s3.amazonaws.com/shared/footer-support@2x.png" width="24" class="footer_item_image" style="	display: block;
	margin: 0 auto;
margin: 0 auto 10px;">
										<p class="footer_item_caption" style="margin: 0 auto;">Questions? <br><a href="https://www.jtutor.ml/#contact" style="	color: #005750;
" target="_blank">We here</a>
									</p></td>
									<td width="33%" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
	vertical-align: top;
    border: none !important;
">
										<img src="https://carpool-email-assets.s3.amazonaws.com/shared/footer-fb@2x.png" width="24" class="footer_item_image" style="	display: block;
	margin: 0 auto;
margin: 0 auto 10px;">
										<p class="footer_item_caption" style="margin: 0 auto;">Join the community <br><a href="https://www.facebook.com/" style="	color: #005750;
" target="_blank">on Facebook</a></p>
									</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
				</tbody></table>
			</td>
		</tr>
		<!-- Legal footer -->
		<tr>
			<td style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
	vertical-align: top;
    border: none !important;
">
				<p class="footer_legal" style="	padding: 20px 0 40px;
	margin: 0;
	font-size: 12px;
	color: #A5A5A5;
	line-height: 1.5;
">
				If you did not enter this email address when signing up for JTutor, disregard this message.<br><br>
				© 2018 JTUTOR, 1600 Amphitheatre Parkway, Mountain View, CA 94043
<br><br>

This is a mandatory service email from JTUTOR.
</p>
			</td>
		</tr>
	</tbody></table>

</body>
  
  

</body>

</html>

            
            ' ;
            $email_address = $email;
            $content = 'text/html; charset=utf-8';
            $mime = '1.0';

            $headers = array ('From' => $email_from,
                            'To' => $to,
                            'Subject' => $email_subject,
                            'Reply-To' => $email_address,
                            'MIME-Version' => $mime,
                            'Content-type' => $content);

            $params = array  ('host' => $host,
                            'port' => $port,
                            'auth' => true,
                            'username' => $username,
                            'password' => $password);

            $smtp = Mail::factory ('smtp', $params);
            $mail = $smtp->send($to, $headers, $email_body);

            if (PEAR::isError($mail)) {
                echo("<p>" . $mail->getMessage() . "</p>");
            } else {
                header("location: ../subject/create.php?sub1=".$_GET['sub1']."&sub2=".$_GET['sub2']."&usr=".$user."&name=".$_GET['name']);
            }
?>



              

	
