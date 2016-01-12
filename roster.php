<?php
$page_cat = "roster";
$page_tit = "roster";
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>   <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>   <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
<head>
<?php include ('webkit/meta'); ?>
<!-- Le styles -->
<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/main.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/forum.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/status.css" rel="stylesheet" type="text/css">
<!-- Le javascripts -->
<script src="assets/javascript/jquery.min.js"></script>
<script src="assets/javascript/jquery.flexslider.min.js"></script>
<script src="assets/javascript/bootstrap.min.js"></script>
<script src="assets/javascript/global.js"></script>
<script src="assets/javascript/common_orig.js"></script>
</head>
<body>
<?php include("webkit/servicebar") ?>
<div id="wrapper">
<header id="main_header" class="clearfix">
<a href="index.php"><div id="logo"></div></a>
<div id="searchbar">
<form>
<input placeholder="Search characters, items, forums and more..." type="text">
</form>
</div>
</header>
<div id="content" class="clearfix">
<div id="main">
<?php include("webkit/menu") ?>
<!-- Main Content Add here -->
<div class="container_5 features" align="center">
<div class="content_holder">
<div class="sub-page-title">
<div id="title"><h1>Roster<p></p><span></span></h1></div>
</div>
<ul>
<div class="features-bg-dark_roster">
<li class="container_0 archived-news w-addons">
<div class="w-addon-row">
<img src="assets/images/gr.jpg" width="268" height="163" alt="Guild Roster">
<div class="addon-info">
<h1>Guild Roster</h1>
<p>You will access a page that will preview all the members of the Guild. Technically speaking it will show the Roster of the Guild.</p>
<div class="war-links">
<a class="download" href="guildroster.php" title="Guild Roster" target="_self">Guild Roster</a>
</div>
</div>
</div>
<div class="clear"></div>
</li>
<li class="container_0 archived-news w-addons">
<div class="w-addon-row">
<img src="assets/images/rr.jpg" width="268" height="163" alt="Heroes WoW Background Downloader">
<div class="addon-info">
<h1>Raid Progress</h1>
<p>You will access a page that will view all the Progress of our Guild. Technically speaking it will show the Raid Bosses if they are killed or not.</p>
<div class="war-links">
<a class="download" href="progress.php" title="Raid Roster" target="_self">Raid Progress</a>
</div>
</div>
</div>
<div class="clear"></div>
</li>
</div>
</ul>
</div>
</div>
<br>
</div>
<?php include("webkit/sidelogin"); ?>
</div>
</div>
<?php include("webkit/footer"); ?>
</body>
</html>