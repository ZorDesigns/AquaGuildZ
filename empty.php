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
		<link rel="shortcut icon" href="admin/img/favicon.png">
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



        </div>
        <div id="sidebar">
            <div id="user_control">
                <a data-toggle="modal" href="#loginframe">
                                <div id="user_control_deco"><!-- --></div>
                                <p><span>Log in now</span> to enhance and<br>personalize your experience!</p></a> 
				</div>
</div>
    </div><footer>
    <div id="lower_nav" class="clearfix">
    <nav>
        <ul>
            <li class="header">AquaFlame Home</li>
            <li><a href="">Whats AquaFlame?</a></li>
            <li><a href="">Donate for us</a></li>
            <li><a href="">Account Panel</a></li>
            <li><a href="">Support</a></li>
            <li><a href="">Make free account</a></li>
        </ul>
    </nav>
    <nav>
        <ul>
            <li class="header">Account</li>
            <li><a href="">Forgot Password?</a></li>
            <li><a href="">Go Premium/Vip</a></li>
            <li><a href="">Forum User CP</a></li>
            <li><a href="">Game User CP</a></li>
            <li><a href="">Report Abuse</a></li>
        </ul>
    </nav>
    <nav>
        <ul>
            <li class="header">Support</li>
            <li><a href="">OMFG I got hacked</a></li>
            <li><a href="">Banned, why?</a></li>
            <li><a href="">Forums</a></li>
            <li><a href="">FAQ</a></li>
            <li><a href="">Rules</a></li>
        </ul>
    </nav>
        <div id="logos">
        <a href="#"><span>AquaFlameCMS</span></a>
        </div>
    </div>
    <div id="credits">
        <nav class="pull-right">
            <ul>
                <li><a href="">Terms of Use</a></li>
                <li><a href="">Legal</a></li>
                <li><a href="">Privacy Policy</a></li>
            </ul>
        </nav>
            &copy; 2012 AquaFlame, INC. All rights reserved
    </div>
    </footer>
</div>
</body>
</html>