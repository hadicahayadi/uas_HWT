<?php //filename: crypt.php
//username : admin
//pass: rahasia
$pass = "hadi";
$format = "$2y$10$";
$hash = "dhaskjdsahiyerqr123128217";
$salt = $format . $hash ;

$newpass = crypt($pass , $salt);
echo $newpass;




















