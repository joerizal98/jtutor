<!DOCTYPE html>
<html>
<body>

<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo array_search("Peter",$people);
  }
else
  {
  echo "Match not found";
  }
?>

</body>
</html>

<?php
$conn   = imap_open('{imap.gmail.com:993/imap/ssl}INBOX', 'juliana.jtutor@gmail.com', 'Jtutor123');

$some   = imap_search($conn, 'SUBJECT "FORGOT YOUR PASSWORD"', SE_UID);
$msgnos = imap_search($conn, 'ALL');
$uids   = imap_search($conn, 'ALL', SE_UID);

$id = array_search("Peter",$people);
print_r($msgnos);
print_r($uids);
echo $some;
?>
<?
$imapPath = '{imap.gmail.com:993/imap/ssl}INBOX';
	//$imapPath = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
	$username = 'juliana.jtutor@gmail.com';
	$password = 'Jtutor123';
	$email_read = 'UNSEEN';

	// try to connect
	$inbox = imap_open($imapPath,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());
	//$id = $_POST['id'];

	// Setting flag from un-seen email to seen on emails ID.
	
	foreach($some as $value){
        imap_setflag_full($conn, 17 , "\\Seen \\Flagged"); //IMPORTANT
        imap_delete($conn, $value);
            echo $value. " ";
    }
	

	// close the connection
	imap_expunge($inbox);
	imap_close($inbox);
	?>