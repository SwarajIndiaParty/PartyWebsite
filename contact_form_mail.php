<?php
$to = "contact@swarajindia.org";
// $to = "kshtjtomar40@gmail.com";
$subject = "SWARAJINDIA_Website[Sender: " . $_GET["name"] . ",Subject: " . $_GET["subject"];
$txt = "Sender: " . $_GET["name"] . "<br><br>E-mail ID: " . $_GET["email"] . "<br><br>Subject: " . $_GET["subject"] . "<br><br>Message:<br> " .$_GET["message"];
$headers = "From: ". $_GET["email"] . "\r\n" . "CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>