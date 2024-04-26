<?php
$length = 32;
$_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length); 
// 1 hour = 60 seconds * 60 minutes = 3600
//$_SESSION['token-expire'] = time() + 3600;
?>