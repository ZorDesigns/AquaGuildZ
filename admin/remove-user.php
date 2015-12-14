<?php
$page_cat = "users";
include("../check.php");
if($login_rank <= 2)
{
die('
<meta http-equiv="refresh" content="2;url=wrong.php"/>
');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>AquaGuildZ | Users</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<!-- ===== FAVICON =====-->
<link rel="shortcut icon" href="img/favicon.png">
<!-- ===== CSS =====-->
<!-- General-->
<link rel="stylesheet" href="css/basic.css">
<link rel="stylesheet" href="css/general.css">
<link rel="stylesheet" href="css/theme.css" class="style-theme">
<!-- Specific-->
<link rel="stylesheet" href="css/addons/fonts/artill-clean-icons.css"/>
<link rel="stylesheet" href="css/addons/theme/syntaxhighlighter.css" class="style-theme-addon">
<link rel="stylesheet" href="css/addons/theme/select2.css" class="style-theme-addon">
</head>
<body class="l-dashboard">
<!--HEADER SLIDE-->
<header id="header" class="l-header-slide l-header-slide-3 t-header-slide-3">
<div class="widget-weather-forecast l-row">
<div class="l-span-xl-10 l-span-lg-9 l-span-md-9 l-span-sm-12">
<div id="weatherForecast">&amp;nbsp;
</div>
</div>
<div class="l-span-xl-2 l-span-lg-3 l-span-md-3 hidden-sm hidden-xs">
<div class="weather-forecast-settings">
<h3>Forecast Settings</h3>
<div class="form-group">
<div class="input-group input-group-sm">
<div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
<input type="text" placeholder="Search location" value="Athens, GRC" class="forecast-location form-control"><span class="input-group-btn">
<button type="button" class="btn btn-dark forecast-location-btn"><i class="fa fa-search"></i></button></span>
</div>
</div>
<div class="forecastcheckbo">
<div>
<label class="forecast-unit cb-radio cb-radio-primary-1">
<input type="radio" name="temperature" value="f" checked="checked">Fahrenheit
</label>
</div>
<div>
<label class="forecast-unit cb-radio cb-radio-primary-1">
<input type="radio" name="temperature" value="c">Celsius
</label>
</div>
</div><a href="#" class="forecast-geo-location">Use Your Location</a>
</div>
</div>
</div>
</header>
<!--SECTION-->
<section class="l-main-container">
<!--Left Sidebar Content-->
<aside id="sb-left" class="l-sidebar l-sidebar-1 t-sidebar-1">
<!-- Profile in sidebar-->
<?php include("webkit/profile.php"); ?>
<!-- Logo in Sidebar-->
<div class="l-side-box">
<!--Logo-->
<div class="logo-in-side">
<h1>
<span class="logo-default visible-default-inline-block"><img src="img/logo.png" alt="Proteus"></span>
</h1>
</div>
</div>
<!--Search-->
<div class="l-side-box mt-5 mb-10">
<div class="widget-search search-in-side is-search-left t-search-4">
<div class="search-toggle"><i class="fa fa-search"></i></div>
<div class="search-content">
<form role="form" action="#">
<input type="text" placeholder="Search..." class="form-control">
<button type="submit" class="btn"><i class="fa fa-search"></i></button>
</form>
</div>
</div>
</div>
<!--Main Menu-->
<div class="l-side-box">
<!--MAIN NAVIGATION MENU-->
<?php include("webkit/nav.php"); ?>
</div>
</aside>
<!--Main Content-->
<section class="l-container">
<!--HEADER-->
<header class="l-header l-header-1 t-header-1">
<div class="navbar navbar-ason">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" data-toggle="collapse" data-target="#ason-navbar-collapse" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.html" class="navbar-brand widget-logo"><span class="logo-default-header"><img src="img/logo_dark.png" alt="Proteus"></span></a>
</div>
<div id="ason-navbar-collapse" class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li>
<!-- Progress Widget-->
<?php include ('webkit/progress.php'); ?>
</li>
<?php include ('webkit/msg.php'); ?>
<li>
<!-- Search Widget-->
<div class="widget-search search-in-header is-search-right t-search-1">
<form role="form" action="#">
<input type="text" placeholder="Search..." class="form-control">
<button type="submit" class="btn"><i class="fa fa-search"></i></button>
</form>
</div>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li>
<!-- Slide Header Switcher-->
<a href="#" title="Show Weather Forecast" data-ason-type="header" data-ason-header="l-header-slide-3" data-ason-header-push="l-header-slide-push-3" data-ason-anim-all='["velocity","transition.expandIn","transition.fadeOut"]' data-ason-is-push="true" data-ason-target="#header" class="sidebar-switcher switcher t-switcher-header ason-widget">
<i class="fa fa-cloud"></i>
</a>
</li>
<li class="hidden-sm">
<!-- Full Screen Toggle-->
<a href="#" class="full-screen-page sidebar-switcher switcher t-switcher-header">
<i class="fa fa-expand"></i>
</a>
</li>
<?php include("webkit/profmini.php"); ?>
</ul>
</div>
</div>
</div>
</header>
<?php
$id = $_GET['id'];
include('../configs.php');
/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$uservi = "SELECT * FROM users WHERE uid=$id";
$userrslt = $aquaglz->query($uservi);
if ($userrslt->num_rows > 0) {
// output data of each row
while($uservi = $userrslt->fetch_assoc()) {
?>
<div class="l-page-header">
<h2 class="l-page-title"><span>Removing</span> <?php echo $uservi["bTag"];?></h2>
<!--BREADCRUMB-->
<ul class="breadcrumb t-breadcrumb-page">
<li><a href="index.php">Home</a></li>
<li>Functions</li>
<li><a href="users.php">Users</a></li>
<li class="active">Removing User: <?php echo $uservi["uid"];?></li>
</ul>
</div>
<div class="l-spaced">
<div class="profile-header">
<div class="profile-img"><img src="../assets/images/account/profile/<?php echo $uservi["avatar"];?>"></div>
<h2><?php echo $uservi["firstname"];?> <?php echo $uservi["lastname"];?></h2>
<h3><?php echo $uservi["bTag"];?></h3>
<p>Rank: <?php echo $uservi["rank"];?></p>
<ul class="contact-info">
<li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $uservi["email"];?>"><?php echo $uservi["email"];?></a></li>
<li></li>
</ul>
<div class="profile-info">
<ul>
</ul>
</div>
</div>
<!-- Row 1 - Page Summary Info-->
<!-- Page Summary Widget-->
<div class="doc doc-danger doc-border doc-left l-spaced-bottom">
This page shows you some <strong>information</strong> about <strong>Deleting</strong> permantly a user! Oh <strong>WAIT</strong>! You still have a chance to <strong>NOT</strong> delete the user!<br>
Read the options down and maybe you will change your mind! Do not hassle about removing the user before reading the information!<br>For more info check out the <strong>documentation</strong>.
</div>
<div class="l-row">
<div class="l-col-md-6">
<div class="l-box l-box-danger l-spaced-bottom">
<div class="l-box-header">
<div class="l-box-title">Danger: Administrator!</div>
</div>
<div class="l-box-body l-spaced">You are about to remove permantly one of the users from the database. By doing so you are deleting the user from existance to this site! Are you sure you want to continue? <strong>IF</strong> an Officer is reading this message, you are advised to speak with your Guild Master for removing a user. <strong>IF</strong> an Officer is reading this message, you are advised to remove members that are already removed from <strong>In-Game</strong>! By pressing yes you will be redirected to the deletion page where you can <strong>NOT</strong> reverse your option. By pressing no you will be redirected back to the users page so you can think again of your actions.</div>
<div class="l-box-footer">
<div class="l-box-title">May the "Force" be with you!</div>
</div>
</div>
</div>
<div class="l-col-md-6">
<div class="l-box l-box-danger l-spaced-bottom">
<div class="l-box-header">
<div class="l-box-title">Danger: Officer!</div>
</div>
<div class="l-box-body l-spaced">You are about to remove permantly one of the users from the database. By doing so you are deleting the user from existance to this site! Are you sure you want to continue? <strong>IF</strong> an Officer is reading this message, you are advised to speak with your Guild Master for removing a user. <strong>IF</strong> an Officer is reading this message, you are advised to remove members that are already removed from <strong>In-Game</strong>! By pressing yes you will be redirected to the deletion page where you can <strong>NOT</strong> reverse your option. By pressing no you will be redirected back to the users page so you can think again of your actions.</div>
<div class="l-box-footer">
<div class="l-box-title">May the "Force" be with you!</div>
</div>
</div>
</div>
</div>
<div class="l-row">
<div class="l-col-md-6">
<a href="delete.php?id=<?php echo $uservi["uid"];?>" type="button" class="btn btn-labeled btn-success btn-lg btn-block btn-eff btn-eff-4"><i class="glyphicon glyphicon-ok"></i> <span>REMOVE</span></a>
</div>
<div class="l-col-md-6">
<a href="users.php" type="button" class="btn btn-labeled btn-danger btn-lg btn-block btn-eff btn-eff-4"><i class="glyphicon glyphicon-remove"></i> <span>CANCEL</span></a>
</div>
</div>
</div>
<?php }} ?>
<!--FOOTER-->
<footer class="l-footer l-footer-1 t-footer-1">
<div class="group pt-10 pb-10 ph">
<div class="copyright pull-left">
&#169; Copyright 2015
<a href="#">AquaGuildZ.</a>
Powered by
<a href="#">ZorDesigns</a>
All rights reserved.
</div>
<?php
$vrsn = "SELECT * FROM version ORDER BY id DESC LIMIT 1";
$resultv = $aquaglz->query($vrsn);
if ($resultv->num_rows > 0) {
// output data of each row
while($vrsn = $resultv->fetch_assoc()) {
?>
<div class="version pull-right">v<?php echo $vrsn["text"]; }}?></div>
</div>
</footer>
</section>
</section>
<!-- ===== JS =====-->
<!-- jQuery-->
<script src="js/basic/jquery.min.js"></script>
<script src="js/basic/jquery-migrate.min.js"></script>
<!-- General-->
<script src="js/basic/modernizr.min.js"></script>
<script src="js/basic/bootstrap.min.js"></script>
<script src="js/shared/jquery.asonWidget.js"></script>
<script src="js/plugins/plugins.js"></script>
<script src="js/general.js"></script>
<!-- Semi general-->
<script type="text/javascript">
var paceSemiGeneral = { restartOnPushState: false };
if (typeof paceSpecific != 'undefined'){
var paceOptions = $.extend( {}, paceSemiGeneral, paceSpecific );
paceOptions = paceOptions;
}else{
paceOptions = paceSemiGeneral;
}
</script>
<script src="js/plugins/pageprogressbar/pace.min.js"></script>
<!-- Specific-->
<script src="js/shared/classie.js"></script>
<script src="js/shared/jquery.cookie.min.js"></script>
<script src="js/shared/jasny-bootstrap.min.js"></script>
<script src="js/shared/perfect-scrollbar.min.js"></script>
<script src="js/shared/jquery.shuffle.min.js"></script>
<script src="js/plugins/accordions/jquery.collapsible.min.js"></script>
<script src="js/plugins/forms/elements/jquery.bootstrap-touchspin.min.js"></script>
<script src="js/plugins/forms/elements/jquery.checkBo.min.js"></script>
<script src="js/plugins/forms/elements/jquery.checkradios.min.js"></script>
<script src="js/plugins/forms/elements/jquery.switchery.min.js"></script>
<script src="js/plugins/profile/toucheffects.js"></script>
<script src="js/plugins/tabs/jquery.easyResponsiveTabs.js"></script>
<script src="js/plugins/tooltip/jquery.tooltipster.min.js"></script>
<script src="js/calls/page.profile.js"></script>
<script src="js/calls/part.header.1.js"></script>
<script src="js/calls/part.sidebar.2.js"></script>
<script src="js/calls/part.theme.setting.js"></script>
</body>
</html>