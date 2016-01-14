<?php
$page_cat = "media";
$page_tit = "media";
include __DIR__ . '/configs.php';
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
<link href="assets/stylesheets/media.css" rel="stylesheet" type="text/css">
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
<div class="container_4" align="center">
<!-- Videos -->
<div class="media-container flleft half-w" align="left">
<div class="media-c-header">
<h3>Videos</h3>
<a class="view-all" href="index.php?page=all-videos">View all</a>
</div>
<?php
$vids = "SELECT * FROM vids ORDER BY id DESC LIMIT 2";
$vidrslt = $aquaglz->query($vids); 
if ($vidrslt->num_rows > 0) {
// output data of each row
while($vids = $vidrslt->fetch_assoc()) {
echo '
<div class="media-video-container" align="left">
<div class="media-video-thumb container_frame">
<div class="cframe_inner">
<a href="'.$vids["contentlnk"].'">
<!--Video Image Preview-->
<div class="image-thumb-preview" style="background-image:url(assets/images/media/vids/'.$vids["image"].'.png);"></div>
</a>
</div>
</div>
<div class="video-info">
<!--Video Title-->
<h3>'.$vids["title"].'</h3>
<!--Video Description-->
<p>'.$vids["desc"].'</p>
<!--Video Youtube Link-->
<a href="'.$vids["contentlnk"].'" target="_blank">Watch in YouTube</a>
</div>
<div class="clear"></div>
</div>
';
}
}else{
echo '
<div class="media-video-container" align="left">
<div class="media-video-thumb container_frame">
<div class="cframe_inner">
<a href="#">
<!--Video Image Preview-->
<div class="image-thumb-preview" style="background-image:url(assets/images/media/vids/vids.png);"></div>
</a>
</div>
</div>
<div class="video-info">
<!--Video Title-->
<h3>No Videos Available</h3>
<!--Video Description-->
<p>Please upload a video as soon as possible so that the community can watch!</p>
<!--Video Youtube Link-->
<a href="#" target="_blank">Coming soon...</a>
</div>
<div class="clear"></div>
</div>
';
}
?>
</div>
<!-- Videos.End -->
<!-- Wallpapers -->
<div class="media-container flright half-w" align="left">
 <div class="media-c-header">
<h3>Wallpapers</h3>
<a class="view-all" href="index.php?page=all-wallpapers">View all</a>
</div>
<ul class="screanshots screanshots-media-page">
<?php
$wlp = "SELECT * FROM wallpapers ORDER BY id DESC LIMIT 4";
$wlprsl = $aquaglz->query($wlp); 
if ($wlprsl->num_rows > 0) {
// output data of each row
while($wlp = $wlprsl->fetch_assoc()) {
echo '
<li>
<a href="#'.$wlp["id"].'" class="container_frame">
<span class="cframe_inner" style="background-image:url(assets/images/news/usquare/'.$wlp["image"].'.png);"></span>
<div class="media-zoom-ico"></div>
</a>
</li>
';
}
}else{
echo '
<li>
<a href="#" class="container_frame">
<span class="cframe_inner" style="background-image:url(assets/images/media/wallps/wallps.png);"></span>
<div class="media-zoom-ico"></div>
</a>
</li>';
}
?>
<div class="clear"></div>
</ul>
</div>
<!-- Wallpapers.End -->
<div class="clear"></div>
<br>
<!-- Screanshots -->
<div class="media-container flright full-w" align="left">
<div class="media-c-header">
<h3>Screenshots</h3>
<a class="view-all" href="index.php?page=all-screenshots">View all</a>
</div>
<ul class="screanshots screanshots-media-page-two">
<?php
$scrn = "SELECT * FROM screenshots ORDER BY id DESC LIMIT 10";
$scrnrsl = $aquaglz->query($scrn); 
if ($scrnrsl->num_rows > 0) {
// output data of each row
while($scrn = $scrnrsl->fetch_assoc()) {
echo '
<li>
<a href="#'.$scrn["id"].'" class="container_frame" rel="shadowbox" title="'.$scrn["title"].'">
<span class="cframe_inner" style="background-image:url(assets/images/media/screens/'.$scrn["image"].'.png); background-size: 100%; background-repeat: no-repeat;"></span>
<div class="media-zoom-ico"></div>
</a>
</li>
';
}
}else{
echo '
<li>
<a href="#" class="container_frame" rel="shadowbox" title="Nothing Yet">
<span class="cframe_inner" style="background-image:url(assets/images/media/screens/screen.png); background-size: 100%; background-repeat: no-repeat;"></span>
<div class="media-zoom-ico"></div>
</a>
</li>';
}
?>
<div class="clear"></div>
</ul>
 <div class="clear"></div>  
</div>
<!-- Screanshots.End -->
<div class="clear"></div>
 </div>
</div>
<?php include("webkit/sidelogin"); ?>
</div>
</div>
<?php include("webkit/footer"); ?>
<?php 
// Closing the Connection for Injection Measures!
$aquaglz->close();
?>
</body>
</html>