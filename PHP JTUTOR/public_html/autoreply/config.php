<?php


/**** SETTINGS AREA ****/
$live               = true; // change this to true when you're ready to start sending autoreplies. false leaves it in testing mode and will not sent auto replies.
$debug              = true; //

/**** Settings for POP3/IMAP account (ie: reading emails) *****/

$email_receive_username     = 'noreply.jtutor@gmail.com';
$email_receive_password     = 'Jtutor123';
$email_receive_mode = 'imap'; // or pop3
$email_receive_host = 'imap.gmail.com';
$email_receive_port = 993;
$email_receive_secure = true; // use SSL or not.
$mailbox            = 'INBOX';
$search_string      = 'UNSEEN';
// example searches: (see http://php.net/imap_search for more details)
//$search_string      = 'TO "you@site.com" SINCE 10-May-2011';
//$search_string      = 'UNSEEN'; // all unread emails
//$search_string      = ''; // all emails no matter what


/**** Settings for SMTP account (le: sending email replies) ****/
$email_from     = $email_receive_username;
$email_from_name     = 'Jtutor';
$email_bcc     = ''; //BCC address

$email_send_host    = 'smtp.googlemail.com';
$email_send_port    = '587';
$email_send_username = $email_receive_username;
$email_send_password = $email_receive_password;
$email_send_smtpauth = true;
$email_send_smtpsecure = 'tls';

$timeformat = 'Y-d-m H:i:s';
/**** END SETTINGS ****/
