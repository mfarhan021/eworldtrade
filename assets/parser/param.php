<?php

if (isset($_GET['source']) || isset($_GET['cat']) || isset($_GET['utm_source']) || isset($_GET['utm_medium'])) {
	if (($_GET['source'] == "email") || isset($_GET['cat']) || ($_GET['utm_source'] == "newsletter") || ($_GET['utm_source'] == "Newsletter") || ($_GET['utm_medium'] == "Email") || ($_GET['utm_medium'] == "email")) {
		$lb_source                                 = "Email";
		if (isset($_GET['cat'])) {$lb_source_cat   = $_GET['cat'];}
		if (isset($_GET['nam'])) {$lb_source_nam   = $_GET['nam'];}
		if (isset($_GET['ema'])) {$lb_source_ema   = $_GET['ema'];}
		if (isset($_GET['con'])) {$lb_source_con   = $_GET['con'];}
		if (isset($_GET['pho'])) {$lb_source_pho   = $_GET['pho'];}
		if (isset($_GET['offer'])) {$lb_source_off = $_GET['offer'];}
	}
} elseif ($_GET['source'] == "ppc") {
	$lb_source = "PPC";
} elseif ($_GET['src'] == "google-ppc-us-search") {
	$lb_source = "PPC";
} else {
	$lb_source = "Organic";
}
$fullpageurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pageurl     = $actual_link     = "http://$_SERVER[HTTP_HOST]";

?>