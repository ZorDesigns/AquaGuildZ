<?php
$page_cat = "roster";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>         <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>           <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>           <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
<head>
        <meta charset="utf-8">
        <title>AquaFlameCMS Frontpage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A wow private server made with AquaFlameCMS">
        <meta name="author" content="AquaFlameCMS">
        <!-- Le styles -->
        <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/main.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/forum.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/status.css" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="admin/img/favicon.png">
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
<li class="container_6 archived-news w-addons" id="xprate">
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
<li class="container_6 archived-news w-addons" id="launcher">
<div class="w-addon-row">
<img src="assets/images/rr.jpg" width="268" height="163" alt="Heroes WoW Background Downloader">
<div class="addon-info">
<h1>Raid Roster</h1>
<p>You will access a page that will preview all the Raid members of the Guild. Technically speaking it will show the Raiding Team.</p>
<div class="war-links">
<a class="download" href="raidroster.php" title="Raid Roster" target="_self">Raid Roster</a>
</div>
</div>
</div>
<div class="clear"></div>
</li>
</div>
</ul>
</div>
<br>
</div>
</div>
<div id="sidebar">
<div id="user_control">
<a data-toggle="modal" href="login.php">
<div id="user_control_deco"><!-- --></div>
<p><span>Log in</span><span> now</span> to participate <br>in the Invictus Experience!</p></a>
</div>
</div>
</div>
<?php include("webkit/footer") ?>
</div>
</body>
</html>