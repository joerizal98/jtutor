<?php
	if(isset($_GET['user']) and isset($_GET['email'])){
	        $name = $_GET['user'];
	        $email = $_GET['email'];
	}      
            require_once "Mail.php";

            $host = "ssl://smtp.gmail.com";
            $username = "noreply.jtutor@gmail.com";
            $password = 'Jtutor123';
            $port = '465';
            $to = $email;

            $email_from = 'noreply.jtutor@gmail.com';
            $email_subject = 'Rejected Application';
            $email_body = '
            
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>

    <style type="text/css">

	    * { margin: 0; padding: 0; font-size: 100%; font-family: "Avenir Next", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; line-height: 1.65; }

		img { max-width: 100%; margin: 0 auto; display: block; }

		body, .body-wrap { width: 100% !important; height: 100%; background: #f8f8f8; }

		a { color: #71bc37; text-decoration: none; }

		a:hover { text-decoration: underline; }

		.text-center { text-align: center; }

		.text-right { text-align: right; }

		.text-left { text-align: left; }

		.button { display: inline-block; color: white; background: #71bc37; border: solid #71bc37; border-width: 10px 20px 8px; font-weight: bold; border-radius: 4px; }

		.button:hover { text-decoration: none; }

		h1, h2, h3, h4, h5, h6 { margin-bottom: 20px; line-height: 1.25; }

		h1 { font-size: 32px; }

		h2 { font-size: 28px; }

		h3 { font-size: 24px; }

		h4 { font-size: 20px; }

		h5 { font-size: 16px; }

		p, ul, ol { font-size: 16px; font-weight: normal; margin-bottom: 20px; }

		.container { display: block !important; clear: both !important; margin: 0 auto !important; max-width: 580px !important; }

		.container table { width: 100% !important; border-collapse: collapse; }

		.container .masthead { padding: 80px 0; background: #71bc37; color: white; }

		.container .masthead h1 { margin: 0 auto !important; max-width: 90%; text-transform: uppercase; }

		.container .content { background: white; padding: 30px 35px; }

		.container .content.footer { background: none; }

		.container .content.footer p { margin-bottom: 0; color: #888; text-align: center; font-size: 14px; }

		.container .content.footer a { color: #888; text-decoration: none; font-weight: bold; }

		.container .content.footer a:hover { text-decoration: underline; }


    </style>
</head>
<body>
<table class="body-wrap">
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td align="center" class="masthead">

                        <img width="50%" src="https://www.jtutor.ml/img/nest.png">

                    </td>
                </tr>
                <tr>
                    <td class="content">

                        <h2>Hi '.$name.',</h2>

                        <p style="text-align: justify;">We regret to inform you that we have rejected your application to be tutor in our platform, <b>JTutor</b>. We only accept convincing application for tutor but dont worry because you can apply anytime and we may accept your application when we find it convincing enough.</p>

                        <p style="text-align: justify;">Thank You for your interest in JTutor</a>.</p>

                        <p><em>– Ms. Juliana</em></p>

                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td class="content footer" align="center">
                        <p><a href="https://www.jtutor.ml/">Jtutor.ml</a> | <a href="https://www.jtutor.ml/#aboutus">More Information</a></p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
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
                $message = $name." has been remove successfuly";
                echo "<script type='text/javascript'>
                            alert('$message');
                            window.location.href = 'https://www.jtutor.ml/user_list/';
                      </script>";
            }
?>



              

	
