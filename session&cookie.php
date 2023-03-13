<?php
session_start();
setcookie('username', time() );

$_SESSION['name'] = "Md. Naim Islam";
$_SESSION['email'] = "Mdnaim@gmail.com";
$_SESSION['age'] = "20 years";

$username = $_SESSION['name'];
$useremail = $_SESSION['email'];
$userage = $_SESSION['age'];

echo "username" .$username;echo "\n";
echo "useremail" .$useremail;echo "\n";
echo "userage" .$userage;echo "\n";