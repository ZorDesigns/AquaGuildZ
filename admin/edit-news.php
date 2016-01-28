<?php
include("../check.php");
if($login_rank < 4)
{
die('
<meta http-equiv="refresh" content="2;url=wrong.php"/>
');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>AquaGuildZ | Articles Edit</title>
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
<script src="../assets/ckeditor/ckeditor.js"></script>
<!-- WoWHead Linking -->
<script type="text/javascript" src="//static.wowhead.com/widgets/power.js"></script>
<script>var wowhead_tooltips = { "colorlinks": true, "iconizelinks": true, "renamelinks": true }</script>
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
<?php if ($id != '') { $page_cat = "enews"; } else { $page_cat = "lnews"; } ?>
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
<?php if ($error != '') {
echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error
. "</div>";
} ?>
<form action="" method="post" class="form-horizontal">
<div>
<div class="l-page-header">
<?php if ($id != '') { echo "<h2 class='l-page-title'><span>Edit</span> News Article</h2>"; } else { echo "<h2 class='l-page-title'><span>Create</span> News Article</h2>"; } ?>
<!--BREADCRUMB-->
<ul class="breadcrumb t-breadcrumb-page">
<li><a href="index.php">Home</a></li>
<li>Functions</li>
<?php if ($id != '') { echo "<li>Edit News</li>"; } else { echo "<li>Create Article</li>"; } ?>
<li class="active"><?php echo $fourth; ?> - <?php if ($id != '') { ?><input type="hidden" name="id" value="<?php echo $id; ?>" />ID: <?php echo $id; ?><?php } ?>
</li>
</ul>
</div>
<div class="l-spaced">
<div class="l-box l-spaced-bottom">
<div class="l-box-header">
<?php if ($id != '') { echo "<h2 class='l-box-title'>Edit <span>News Article</span></h2>"; } else { echo "<h2 class='l-box-title'>Create <span>News Article</span></h2>"; } ?>
</div>
<div class="l-box-body l-spaced">
<form class="form-horizontal" novalidate="">
<div class="form-group">
<label for="author" class="col-sm-3 control-label">Author</label>
<div class="col-sm-9">
<input name="author" id="author" type="text"  required="" placeholder="Author (0 for System)" class="form-control parsley-error" value="<?php echo $first; ?>">
</div>
</div>
<div class="form-group">
<label for="date" class="col-sm-3 control-label">Date</label>
<div class="col-sm-9">
<input name="date" id="date" type="text"  placeholder="Date (Leave empty for AUTO)" class="form-control" value="<?php echo $second; ?>">
</div>
</div>
<div class="form-group">
<label for="title" class="col-sm-3 control-label">Title</label>
<div class="col-sm-9">
<input name="title" id="title" type="text" required="" placeholder="Minimum Length" class="form-control" value="<?php echo $fourth; ?>">
</div>
</div>
<input name="comments" id="comments" type="hidden" value="0" class="form-control" value="<?php echo $fifth; ?>">
<div class="form-group">
<label for="image" class="col-sm-3 control-label">Image Name</label>
<div class="col-sm-9">
<input name="image" id="image" type="text" required="" placeholder="Maximum Length" class="form-control" value="<?php echo $last; ?>">
</div>
</div>
<div class="form-group">
<label for="content" class="col-sm-3 control-label">Content (GO BIG!)</label>
<div class="col-sm-9">
<textarea name="content" id="content" required="" class="form-control" type="text"><?php echo $third; ?></textarea>
<script>
CKEDITOR.replace('contents');
</script>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-9">
<button name="submit" type="submit" class="btn btn-dark">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<?php }
/* EDIT RECORD */
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
$author = htmlentities($_POST['author'], ENT_QUOTES);
$date = htmlentities($_POST['date'], ENT_QUOTES);
$content = htmlentities($_POST['content'], ENT_QUOTES);
$title = htmlentities($_POST['title'], ENT_QUOTES);
$comments = htmlentities($_POST['comments'], ENT_QUOTES);
$image = htmlentities($_POST['image'], ENT_QUOTES);

// check that content and title are both not empty
if ($author == '' || $date == '' || $content == '' || $title == '' || $comments == '' || $image == '')
{
// if they are empty, show an error message and display the form
$error = 'ERROR: Please fill in all required fields!';
renderForm($author, $date, $content, $title, $comments, $image, $error, $id);
}
else
{
// if everything is fine, update the record in the database
if ($stmt = $aquaglz->prepare("UPDATE news SET author = ?, date = ?, content = ?, title = ?, comments = ?, image = ? WHERE id=?"))
{
$stmt->bind_param("ssssisi", $author, $date, $content, $title, $comments, $image, $id);
$stmt->execute();
$stmt->close();
}
// show an error message if the query has an error
else
{
echo "ERROR: could not prepare SQL statement.";
}

// redirect the user once the form is updated
header("Location: news.php");
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
if($stmt = $aquaglz->prepare("SELECT id, author, date, content, title, comments, image FROM news WHERE id=?"))
{
$stmt->bind_param("i", $id);
$stmt->execute();

$stmt->bind_result($id, $author, $date, $content, $title, $comments, $image);
$stmt->fetch();

// show the form
renderForm($author, $date, $content, $title, $comments, $image, NULL, $id);

$stmt->close();
}
// show an error if the query has an error
else
{
echo "Error: could not prepare SQL statement";
}
}
// if the 'id' value is not valid, redirect the user back to the news.php page
else
{
header("Location: news.php");
}
}
}
/* NEW RECORD */
// if the 'id' variable is not set in the URL, we must be creating a new record
else
{
// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit']))
{
// get the form data
$author = htmlentities($_POST['author'], ENT_QUOTES);
$date = htmlentities($_POST['date'], ENT_QUOTES);
$content = htmlentities($_POST['content'], ENT_QUOTES);
$title = htmlentities($_POST['title'], ENT_QUOTES);
$comments = htmlentities($_POST['comments'], ENT_QUOTES);
$image = htmlentities($_POST['image'], ENT_QUOTES);

// check that content and title are both not empty
if ($author == '' || $date == '' || $content == '' || $title == '' || $comments == '' || $image == '')
{
// if they are empty, show an error message and display the form
$error = 'ERROR: Please fill in all required fields!';
renderForm($author, $date, $content, $title, $comments, $image, $error);
}
else
{
// insert the new record into the database
if ($stmt = $aquaglz->prepare("INSERT news (author, date, content, title, comments, image) VALUES (?, ?, ?, ?, ?, ?)"))
{
$stmt->bind_param("isssis", $author, $date, $content, $title, $comments, $image);
$stmt->execute();
$stmt->close();
}
// show an error if the query has an error
else
{
echo "ERROR: Could not prepare SQL statement.";
}

// redirec the user
header("Location: news.php");
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