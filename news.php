<?php
include ('configs.php');
$page_cat = "home";
$page_tit = "home";
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
<link href="assets/stylesheets/roster.css" rel="stylesheet" type="text/css">
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
<div id="main_content">
<div class="container_3 archived-news">  
<!-- News Content -->
<?php 
$newsID = $_GET["id"];
$news = "SELECT * FROM news WHERE id=$newsID";
$result = $aquaglz->query($news); 
if ($result->num_rows > 0)
// output data of each row
while($news = $result->fetch_assoc()) {
echo '
<div class="arnews-head" align="left">
<h1>'.$news["title"].' </h1>'.$news["date"].', posted by System
</div>
<div class="header-image">
<img itemprop="image" alt="" src="assets/images/news/full/'.$news["image"].'-big.png" />
</div>
<div class="arnews-cont" align="left"><br><p><a href="assets/images/news/full/'.$news["image"].'-big.png">Click</a> for a full view of the image.</p></div>
<div class="arnews-cont" align="left"><p>'.$news['content'].'</p>
<div class="clear"></div>
</div>
';
} 
$aquaglz->close();
?>
<!-- News Content.End --> 
</div>
<a class="newer-news-btn" href="#">Newer</a>
<a class="older-news-btn" href="#">Older</a>
<div class="clear"></div>
</div>
</div>
<?php include("webkit/sidebar"); ?>
</div>
<?php include("webkit/footer"); ?>
</body>
</html>