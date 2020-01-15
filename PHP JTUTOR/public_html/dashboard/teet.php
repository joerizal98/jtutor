<?php   
	// Connect to gmail
	$imapPath = '{imap.gmail.com:993/imap/ssl}INBOX';
	$imapPath2 = '{mx1.hostinger.com:993/imap/ssl}INBOX';
	//$imapPath = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
	$username = 'juliana.jtutor@gmail.com';
	$username2 = 'noreply.jtutor@gmail.com';
	$password = 'Jtutor123';
	
	$username3 = 'jwan@jtutor.ml';
	$password3 = 'm9ZbBXx6rFId';


	$conn   = imap_open($imapPath,$username,$password, OP_READONLY);
	$conn2   = imap_open($imapPath,$username2,$password, OP_READONLY);
	$conn3   = imap_open($imapPath2,$username3,$password3);
	$msgnos = imap_search($conn, 'UNSEEN');
	$msgno = imap_search($conn2, 'UNSEEN');
	$msgno2 = imap_search($conn3, 'UNSEEN');
    
    $mgs = $msgnos;
    if (!$mgs) {
        $email1 = "0";
    } else {
        $email1 = sizeof($msgnos)."<br>";
    }
    
    $mgs2 = $msgno;
    if (!$mgs2) {
        $email2 = "0";
    } else {
        $email2 = sizeof($msgno);
    }
    
    $mgs3 = $msgno2;
    if (!$mgs3) {
        $email3 = "0";
    } else {
        $email3 =  sizeof($msgno2);
    }
    
    echo $email1 + $email2 +$email3;
    
    
?>