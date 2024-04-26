<?php
$siteurl = "http://localhost/eworldtrade/";
$fullpageurl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pageurl   = "https://$_SERVER[HTTP_HOST]";
$ip_address = (isset($_SERVER["HTTP_CF_CONNECTING_IP"])?$_SERVER["HTTP_CF_CONNECTING_IP"]:$_SERVER['REMOTE_ADDR']);
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="ip2loc" content="<?php echo $ip_address ?>">
<script src="https://kit.fontawesome.com/2235db50dc.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $siteurl; ?>favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/style-web.css">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/inner.css">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/responsive.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

