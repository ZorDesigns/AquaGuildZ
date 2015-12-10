<?php
// Category for Menu
$page_cat = "edituser";
// Included Files for Admin Check & Configs
include("../check.php");
// Checking System for Rank
if($login_rank <= 2)
{
// Redirect if not Admin
die('
<meta http-equiv="refresh" content="2;url=wrong.php"/>
');
}
// Creates the Edit/New Form! This function becomes reusable (function renderForm)!
function renderForm($first = '', $second ='', $third ='', $fourth ='', $fifth ='', $last ='', $error = '', $id = '')
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>AquaGuildZ | <?php if ($id != '') { echo "Edit User"; } else { echo "New User"; } ?></title>
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
<!-- Row 1 - Page Summary Info-->
<!-- Page Summary Widget-->
<div class="widget-page-summary">
<div class="l-col-lg-4">
<h2 class="page-title">Welcome to <span>AquaGuildZ</span>.</h2>
<h4 class="page-sub-title">Your <span id="rotating-text">Responsive, Beautiful, Clean, HTML5 and CSS3 based, powered by FlameCMS, Bootstrap based </span> Admin Web App.</h4><a href="#" class="page-summary-info-switcher"><i class="fa fa-bars"></i></a>
</div>
<div class="l-col-lg-8 page-summary-info">
<!-- Page Summary Settings-->
<div class="page-summary-settings">
<ul class="update-status-settings">
<li><a href="#" title="Update charts" class="chart-toggle tt-bottom"><i class="fa fa-refresh"></i></a></li>
<li>
<ul class="time-status-toggle">
<li title="Toggle unit" class="tt-bottom">
<div class="hide switcheryUnits"></div>
<input id="switcheryUnits" type="checkbox">
</li>
<li class="last-status"><a href="#" title="Use your location" class="current-weather-location tt-bottom"><i class="fa fa-compass"></i></a></li>
</ul>
</li>
<li class="last">
<div class="hide switcherySettings"></div>
<input id="switcherySettings" type="checkbox">
</li>
</ul>
</div>
<?php
/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
if ($newsrslt = $aquaglz->query("SELECT * FROM news ORDER BY id")) {
/* determine number of rows result set */
$news_cnt = $newsrslt->num_rows;
?>
<div class="l-row">
<!-- Page Summary Charts-->
<div class="summary-chart chart-views l-col-md-4">
<div class="l-row">
<div class="l-col-xl-5 l-col-md-6 l-col-sm-5">
<div class="chart-info"><a href="#" title="Update total views" class="update-chart-views tt-top"><i class="fa fa-eye"></i></a><span>
<?php
echo $news_cnt;
/* close result set */
$newsrslt->close();
}
?>
</span>
<p>News</p>
</div>
</div>
</div>
</div>
<?php
/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
if ($result = $aquaglz->query("SELECT * FROM users ORDER BY uid")) {
/* determine number of rows result set */
$row_cnt = $result->num_rows;
?>
<div class="summary-chart chart-followers l-col-md-4">
<div class="l-row">
<div class="l-col-sm-5">
<div class="chart-info"><a href="#" title="Update followers" class="update-chart-followers tt-top"><i class="fa fa-users"></i></a><span>
<?php
echo $row_cnt;
/* close result set */
$result->close();
}
?>
</span>
<p>Users</p>
</div>
</div>
</div>
</div>
<?php
/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
if ($forumrslt = $aquaglz->query("SELECT * FROM threads ORDER BY id")) {
/* determine number of rows result set */
$frm_cnt = $forumrslt->num_rows;
?>
<div class="summary-chart chart-comments l-col-md-4">
<div class="l-row">
<div class="l-col-sm-5">
<div class="chart-info"><a href="#" title="Update comments" class="update-chart-comments tt-top"><i class="fa fa-comments"></i></a><span>
<?php
echo $frm_cnt;
/* close result set */
$forumrslt->close();
}
?></span>
<p>Topics</p>
</div>
</div>
</div>
</div>
</div>
<div class="l-row">
<!-- Page Summary Clock-->
<div class="summary-time-status clock-wrapper l-col-md-8 l-col-sm-6">
<div id="clock"></div>
</div>
<!-- Page Summary Weather-->
<div class="summary-time-status weather-wrapper l-col-md-4 l-col-sm-6">
<div id="weather"></div>
</div>
</div>
</div>
</div>
<div class="doc doc-info doc-border doc-left l-spaced-bottom">
Welcome to <strong>AquaGuildZ</strong> Content Management System powered by <strong>FlameCMS</strong>! You are now <?php if ($id != '') { echo "Editing a Record"; } else { echo "Creating a new Record"; } ?>!<br>
Here you can customize your users and create one if needed.<br>For more info check out the <strong>documentation</strong>.
</div>
<!-- Row 1 - Info Widgets-->
<?php if ($error != '') { echo '
<div class="doc doc-danger doc-border doc-left l-spaced-bottom">
<h3 class="doc-text mt-0 font-semibold">ERROR</h3>
<p><strong>'.$error.'</strong></p>
</div>';
}
?>
<div class="l-box">
<div class="l-box-header">
<h4 class="widget-header">Editing user:  <strong><?php echo $second; ?></strong> <?php if ($id != '') { ?><input type="hidden" name="id" value="<?php echo $id; ?>" /><span style="float: right;">ID: <?php echo $id; ?><?php } ?></span></h4>
</div>
<div class="l-box-body l-spaced">
<form id="validateDefault" action="" method="post" class="form-horizontal validate">
<div class="form-group">
<label for="firstname" class="col-sm-3 control-label">Firstname</label>
<div class="col-sm-9">
<input id="firstname" type="text" name="firstname" placeholder="<?php echo $third; ?>" class="form-control" value="<?php echo $third; ?>"/>
</div>
</div>
<div class="form-group">
<label for="lastname" class="col-sm-3 control-label">Lastname</label>
<div class="col-sm-9">
<input id="lastname" type="text" placeholder="<?php echo $fourth; ?>" class="form-control" name="lastname" value="<?php echo $fourth; ?>"/>
</div>
</div>
<div class="form-group">
<label for="username" class="col-sm-3 control-label">BattleTag</label>
<div class="col-sm-9">
<input id="username" type="text" placeholder="<?php echo $second; ?>" class="form-control" name="bTag" value="<?php echo $second; ?>"/>
</div>
</div>
<div class="form-group">
<label for="email" class="col-sm-3 control-label">Email</label>
<div class="col-sm-9">
<input id="email" type="email" name="email" placeholder="<?php echo $first; ?>" class="form-control" name="email" value="<?php echo $first; ?>"/>
</div>
</div>
<div class="form-group">
<label for="rank" class="col-sm-3 control-label">Rank</label>
<div class="col-sm-9">
<input id="rank" type="rank" placeholder="<?php echo $fifth; ?>" class="form-control" name="rank" value="<?php echo $fifth; ?>"/>
</div>
</div>
<div class="form-group">
<label for="email" class="col-sm-3 control-label">Avatar</label>
<div data-provides="fileinput" class="fileinput fileinput-new">
<div class="col-sm-9">
<input id="avatar" type="avatar" name="avatar" placeholder="<?php echo $last; ?>" class="form-control" name="avatar" value="<?php echo $last; ?>"/>
<div style="width: 84px; height: 84px;" class="fileinput-new thumbnail"><img src="../assets/images/account/profile/<?php echo $last; ?>"></div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-9">
<div>
<input id="agree" type="checkbox" name="agree" class="checkradios"> Are you sure you want to proceed?
</div>
<label for="agree" class="error">This field is required.</label>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-9">
<button type="submit" name="submit" value="Submit" class="btn btn-dark">Submit</button>
</div>
</div>
</form>
</div>
</div>
<?php }
/*
EDIT RECORD
*/
// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id']))
{
// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit']))
{
// make sure the 'id' in the URL is valid
if (is_numeric($_POST['id']))
{
// get variables from the URL/form
$id = $_POST['id'];
$emailTag = htmlentities($_POST['email'], ENT_QUOTES);
$bTag = htmlentities($_POST['bTag'], ENT_QUOTES);
$firstname = htmlentities($_POST['firstname'], ENT_QUOTES);
$lastname = htmlentities($_POST['lastname'], ENT_QUOTES);
$rankTag = htmlentities($_POST['rank'], ENT_QUOTES);
$avatar = htmlentities($_POST['avatar'], ENT_QUOTES);
// check that firstname and lastname are both not empty
if ($emailTag == '' || $bTag == '' || $firstname == '' || $lastname == '' || $rankTag == '' || $avatar == '')
{
// if they are empty, show an error message and display the form
$error = 'ERROR: Please fill in all required fields!';
renderForm($emailTag, $bTag, $firstname, $lastname, $rankTag, $avatar, $error, $id);
}
else
{
// if everything is fine, update the record in the database
if ($stmt = $aquaglz->prepare("UPDATE users SET email = ?, bTag = ?, firstname = ?, lastname = ?, rank = ?, avatar = ? WHERE uid=?"))
{
$stmt->bind_param("ssssisi", $emailTag, $bTag, $firstname, $lastname, $rankTag, $avatar, $id);
$stmt->execute();
$stmt->close();
}
// show an error message if the query has an error
else
{
echo "ERROR: could not prepare SQL statement.";
}

// redirect the user once the form is updated
header("Location: test.php");
}
}
// if the 'id' variable is not valid, show an error message
else
{
echo "Error!";
}
}
// if the form hasn't been submitted yet, get the info from the database and show the form
else
{
// make sure the 'id' value is valid
if (is_numeric($_GET['id']) && $_GET['id'] > 0)
{
// get 'id' from URL
$id = $_GET['id'];
// get the recod from the database
if($stmt = $aquaglz->prepare("SELECT uid, email, bTag, firstname, lastname, rank, avatar FROM users WHERE uid=?"))
{
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($id, $emailTag, $bTag, $firstname, $lastname, $rankTag, $avatar);
$stmt->fetch();
// show the form
renderForm($emailTag, $bTag, $firstname, $lastname, $rankTag, $avatar, NULL, $id);
$stmt->close();
}
// show an error if the query has an error
else
{
echo "Error: could not prepare SQL statement";
}
}
// if the 'id' value is not valid, redirect the user back to the test.php page
else
{
header("Location: test.php");
}
}
}
/*
NEW RECORD
*/
// if the 'id' variable is not set in the URL, we must be creating a new record
else
{
// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit']))
{
// get the form data
$emailTag = htmlentities($_POST['email'], ENT_QUOTES);
$bTag = htmlentities($_POST['bTag'], ENT_QUOTES);
// check that firstname and lastname are both not empty
if ($emailTag == '' || $bTag == '' || $firstname == '' || $lastname == '' || $rankTag == '' || $avatar == '')
{
// if they are empty, show an error message and display the form
$error = 'ERROR: Please fill in all required fields!';
renderForm($emailTag, $bTag, $firstname, $lastname, $rankTag, $avatar, $error);
}
else
{
// insert the new record into the database
if ($stmt = $aquaglz->prepare("INSERT users (email, bTag, firstname, lastname, rank, avatar) VALUES (?, ?)"))
{
$stmt->bind_param("ssssis", $emailTag, $bTag, $firstname, $lastname, $rankTag, $avatar);
$stmt->execute();
$stmt->close();
}
// show an error if the query has an error
else
{
echo "ERROR: Could not prepare SQL statement.";
}
// redirec the user
header("Location: test.php");
}
}
// if the form hasn't been submitted yet, show the form
else
{
renderForm();
}
}
?>
</div>
<!--FOOTER-->
<footer class="l-footer l-footer-1 t-footer-1">
<div class="group pt-10 pb-10 ph">
<div class="copyright pull-left">
© Copyright 2015
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
<?php 
/* close connection */
$aquaglz->close();
?>
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
<script src="js/shared/jquery.cookie.min.js"></script>
<script src="js/shared/jquery.easing.1.3.js"></script>
<script src="js/shared/perfect-scrollbar.min.js"></script>
<script src="js/plugins/accordions/jquery.collapsible.min.js"></script>
<script src="js/plugins/charts/c3/c3.min.js"></script>
<script src="js/plugins/charts/c3/d3.v3.min.js"></script>
<script src="js/plugins/charts/other/jquery.easypiechart.min.js"></script>
<script src="js/plugins/charts/rickshaw/rickshaw.min.js"></script>
<script src="js/plugins/charts/flot/jquery.flot.min.js"></script>
<script src="js/plugins/charts/flot/jquery.flot.resize.min.js"></script>
<script src="js/plugins/charts/flot/jquery.flot.pie.min.js"></script>
<script src="js/plugins/charts/flot/jquery.flot.stack.min.js"></script>
<script src="js/plugins/charts/flot/jquery.flot.symbol.min.js"></script>
<script src="js/plugins/datetime/jqClock.min.js"></script>
<script src="js/plugins/forms/elements/jquery.bootstrap-touchspin.min.js"></script>
<script src="js/plugins/forms/elements/jquery.checkBo.min.js"></script>
<script src="js/plugins/forms/elements/jquery.switchery.min.js"></script>
<script src="js/plugins/table/footable.all.min.js"></script>
<script src="js/plugins/tabs/jquery.easyResponsiveTabs.js"></script>
<script src="js/plugins/textrotator/jquery.simple-text-rotator.min.js"></script>
<script src="js/plugins/tooltip/jquery.tooltipster.min.js"></script>
<script src="js/plugins/weather/jquery.simpleWeather.min.js"></script>
<script src="js/calls/dashboard.1.js"></script>
<script src="js/calls/part.header.1.js"></script>
<script src="js/calls/part.sidebar.2.js"></script>
<script src="js/calls/part.theme.setting.js"></script>
<script src="js/calls/shared.tooltipster.js"></script>
<script src="js/shared/classie.js"></script>
<script src="js/calls/chart.flot.js"></script>
</body>
</html>