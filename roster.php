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
        <!-- Le javascripts -->
        <script src="assets/javascript/jquery.min.js"></script>
        <script src="assets/javascript/jquery.flexslider.min.js"></script>
        <script src="assets/javascript/bootstrap.min.js"></script>
        <script src="assets/javascript/global.js"></script>
		<script src="assets/javascript/common_orig.js"></script>
</head>
<body>
<div id="wrapper">
<header id="main_header" class="clearfix">
<?php include("webkit/servicebar") ?>
<div id="logo">
    </div>
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
<div class="container_2" align="center">
<div class="inline">
<div class="subscription-col subscription-3">
<a href="raidroster.php" class="game-title">Raid Roster</a>
<br />
</div>
<div class="subscription-col subscription-1">
<a href="#" class="game-title">Guild Roster</a>
</div>
</div>
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