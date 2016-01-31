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
<?php
if ($vidrsltc = $aquaglz->query("SELECT * FROM vids ORDER BY id")) {
/* determine number of rows result set */
$vid_cnt = $vidrsltc->num_rows;
?>
<a class="goback" href="media.php">Back to Media</a>
<div class="media-header">
<h2>Videos</h2>
<h3 class="items-number">(<?php echo $vid_cnt; } ?>)</h3>
<div class="clear"></div>
<div class="bline"></div>
</div>
<ul class="screanshots all-screanshots screanshots-media-page-two">
<?php
$vids = "SELECT * FROM vids ORDER BY id DESC LIMIT 2";
$vidrslt = $aquaglz->query($vids); 
if ($vidrslt->num_rows > 0) {
// output data of each row
while($vids = $vidrslt->fetch_assoc()) {
echo '
<li>
<div class="media-video-container" align="left">
<div class="media-video-thumb container_frame">
<div class="cframe_inner">
<a href="https://www.youtube.com/watch?v='.$vids["contentlnk"].'">
<!--Video Image Preview-->
<div class="image-thumb-preview" style="background-image:url(//i.ytimg.com/vi_webp/'.$vids["contentlnk"].'/mqdefault.webp);background-size: 200px 113px;background-repeat: no-repeat;"></div>
<div class="play-button-small"></div>
</a>
</div>
</div>
</div>
<div class="screanshot-title-info">'.$vids["title"].'<p>On YouTube</p></div>
</li>
';
}
}else{
echo '
<li>
<div class="media-video-container" align="left">
<div class="media-video-thumb container_frame">
<div class="cframe_inner">
<a href="#">
<!--Video Image Preview-->
<div class="image-thumb-preview" style="background-image:url(assets/images/media/vids/vids.png);background-size: 200px 113px;background-repeat: no-repeat;"></div>
<div class="play-button-small"></div>
</a>
</div>
</div>
</div>
<div class="screanshot-title-info">Coming soon...</div>
</li>
';
}
?>
</ul>
<!-- Videos.End -->
<div class="clear"></div>
<br>
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