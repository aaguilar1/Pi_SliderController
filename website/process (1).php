<?php ob_start();


if(isset($_Post['submit'])){
$to = "aa1363@scarletmail.rutgers.edu";
$subject = $_Post['subject'];
$email = $_Post['email'];
$txt = $_Post['message'];
$headers = "From: ".$email ."\r\n" .



mail($to, $subject, $txt, $headers);

header("Location: sponsors.html");

}







?>