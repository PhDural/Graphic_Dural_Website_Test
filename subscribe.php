<?php
if (isset($_POST{'submit' })) {
    $emailFrom = $_POST{'email'};
$emailTo = "philipdural@graphicdural.com";
$headers = "From: ".$emailFrom;
$txt = "Newsletter Subscriber";
email($emailTo, $headers);
header("Location: index.php?mailsend");
}
?>