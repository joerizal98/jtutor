<?php
    $email = $_POST['email'];
    $subject = $_POST['subject'];
            require_once "Mail.php";

            $host = "ssl://smtp.gmail.com";
            $username = "juliana.jtutor@gmail.com";
            $password = "Jtutor123";
            $port = "465";
            $to = $email;

            $email_from = "noreply.jtutor@gmail.com";
            $email_subject = $subject ;
            $email_body = $_POST['message'];
            $email_address = $email;
            $content = "text/html; charset=utf-8";
            $mime = "1.0";

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
               header("location: ../reply?alert=fail");
            } else {
                header("location: ../reply?alert=success");
            }
?>