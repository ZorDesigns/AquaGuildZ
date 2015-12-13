<?php
$page_cat = "edituser";
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
<title>AquaGuildZ | Profile Edit</title>
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
/*
Allows the user to both create new records and edit existing records
*/
// connect to the database
include('../configs.php');
// creates the new/edit record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
function renderForm($first = '', $second ='', $third ='', $fourth ='', $fifth ='', $last ='', $error = '', $id = '')
{
?>



<?php if ($error != '') {
echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error
. "</div>";
} ?>

<form action="" method="post" class="form-horizontal">
<div>

<div class="l-page-header">
<?php if ($id != '') { echo "<h2 class='l-page-title'><span>Edit</span> Profile</h2>"; } else { echo "<h2 class='l-page-title'><span>Create</span> Profile</h2>"; } ?>
<!--BREADCRUMB-->
<ul class="breadcrumb t-breadcrumb-page">
<li><a href="index.php">Home</a></li>
<li>Functions</li>
<li>Edit User</li>
<li class="active"><?php echo $second; ?> - <?php if ($id != '') { ?><input type="hidden" name="id" value="<?php echo $id; ?>" />ID: <?php echo $id; ?><?php } ?>
</li>
</ul>
</div>
<div class="l-spaced">
<div class="profile-header">
<div class="profile-img"><img src="../assets/images/account/profile/<?php echo $last; ?>"></div>
<h2><?php echo $third; ?> <?php echo $fourth; ?></h2>
<h3><?php echo $second; ?></h3>
<p>Rank: <?php echo $fifth; ?></p>
<ul class="contact-info">
<!--<li><i class="fa fa-phone"></i>(367) 347-2967</li>-->
<li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $first; ?>"><?php echo $first; ?></a></li>
<!--<li><i class="fa fa-skype"></i>@johndoe007</li>-->
<li></li>
</ul>
<!--<ul class="social-links">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
<li><a href="#"><i class="fa fa-google"></i></a></li>
<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
</ul>-->
<div class="profile-info">
<!--<ul>
<li>346 &nbsp;<span>friends</span></li>
<li>87 &nbsp;<span>followers</span></li>
<li>52 &nbsp;<span>photos</span></li>
<li>754 &nbsp;<span>videos</span></li>
<li>1261 &nbsp;<span>tracks</span></li>
</ul>-->
</div>
</div>
</div>
<div class="profile-content">
<!-- Profile Tabs-->
<div id="profile" class="profile-tabs">
<ul class="resp-tabs-list">
<li>Profile</li>
</ul>
<div class="resp-tabs-container">
<!--Profile-->
<div class="profile-details-cont">
<div class="profile-details">
<h4 class="sep-bottom">General</h4>
<div class="form-group">
<label for="bTag" class="col-sm-3 control-label">BattleTag</label>
<div class="col-sm-9">
<input id="bTag" type="text" class="form-control" name="bTag" value="<?php echo $second; ?>">
</div>
</div>
<div class="form-group">
<label for="firstname" class="col-sm-3 control-label">First name</label>
<div class="col-sm-9">
<input id="firstname" type="text" class="form-control" name="firstname" value="<?php echo $third; ?>">
</div>
</div>
<div class="form-group">
<label for="lastname" class="col-sm-3 control-label">Last name</label>
<div class="col-sm-9">
<input id="lastname" type="text" class="form-control" name="lastname" value="<?php echo $fourth; ?>">
</div>
</div>
<div class="form-group">
<label for="rank" class="col-sm-3 control-label">Member Rank</label>
<div class="col-sm-9">
<input id="rank" type="text" class="form-control" name="rank" value="<?php echo $fifth; ?>">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Section Correct?</label>
<div class="col-sm-9">
<div class="checkbox">
<input type="checkbox" value="" class="checkradios">&nbsp;
</div>
</div>
</div>
<h4 class="sep-bottom">Password</h4>
<div class="form-group">
<label for="password" class="col-sm-3 control-label">Password</label>
<div class="col-sm-9">
<input id="password" disabled="" type="password" placeholder="Password" class="form-control">
</div>
</div>
<h4 class="sep-bottom">Contact</h4>
<div class="form-group">
<label for="email" class="col-sm-3 control-label">Email</label>
<div class="col-sm-9">
<input id="email" type="email" class="form-control" name="email" value="<?php echo $first; ?>">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Section Correct?</label>
<div class="col-sm-9">
<div class="checkbox">
<input type="checkbox" value="" class="checkradios">&nbsp;
</div>
</div>
</div>
<h4 class="sep-bottom">Profile Image</h4>
<div class="form-group">
<label for="avatar" class="col-sm-3 control-label">Avatar</label>
<div class="col-sm-9">
<input id="avatar" type="text" class="form-control" name="avatar" value="<?php echo $last; ?>">
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-9">
<div data-provides="fileinput" class="fileinput fileinput-new">
<div style="width: 84px; height: 84px;" class="fileinput-new thumbnail"><img src="../assets/images/account/profile/<?php echo $last; ?>"></div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">All Correct?</label>
<div class="col-sm-9">
<div class="checkbox">
<input type="checkbox" value="" class="checkradios">&nbsp;
</div>
</div>
</div>
<hr>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-9">
<div><span><input type="submit" name="submit" class="btn btn-dark btn-file"></span></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
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
header("Location: users.php");
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
// if the 'id' value is not valid, redirect the user back to the users.php page
else
{
header("Location: users.php");
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
header("Location: users.php");
}
}
// if the form hasn't been submitted yet, show the form
else
{
renderForm();
}
}
?>
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