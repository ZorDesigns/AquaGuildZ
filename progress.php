<?php
$page_cat = "roster";
$page_tit = "gprogress";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>         <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>           <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>           <html class="no-js lt-ie9"> <![endif]-->
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
<?php include("webkit/menu"); ?>
<!-- Main Content Add here -->
<div class="container_6" align="center">
<div>
<div class="clear"></div>
<br>
<div class="clear"></div>
<a class="container_3 brown wider fixed">
<span class="error_icons atention"></span>
<p>We are changing the Progress system! We will now redirect you to another site to check our Progress! You are redirected to WoWProgress.com</p>
</a>
</div>
<meta http-equiv='refresh'content='5;url=http://www.wowprogress.com/guild/eu/twisting-nether/Hellenic+Horde'>
<div class="clear"></div>
</div>
</div>
<?php include("webkit/sidebar"); ?>
</div>
<?php include("webkit/footer"); ?>
<?php 
// Closing the Connection for Injection Measures!
$aquaglz->close();
?>
</body>
</html>