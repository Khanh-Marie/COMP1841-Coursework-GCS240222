<?php
$message = $_REQUEST['message'] ;

ini_set("SMTP", "smtp.gre.ac.uk");
ini_set("sendmail_from","nguyennamkhanh1308@gmail.com");

mail("nguyennamkhanh1308@gmail.com", "testing email connection", $message);
echo "Works";
?>