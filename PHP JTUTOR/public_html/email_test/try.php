<?php
$mbox = imap_open("{imap.gmail.com:993/imap/ssl}INBOX", "noreply.jtutor@gmail.com", "Jtutor123")
     or die("can't connect: " . imap_last_error());

$MC = imap_check($mbox);

// Fetch an overview for all messages in INBOX
$result = imap_fetch_overview($mbox,"1:{$MC->Nmsgs}",0);
$seen = 0;
$unseen = 0;
foreach ($result as $overview) {
    if($overview->seen){
      $seen++;
    } else {
      $unseen++;
    }
}
imap_close($mbox);

echo "Seen $seen, unseen $unseen"
?>