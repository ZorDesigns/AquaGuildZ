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
<div class="container_4" style="height: 817px!important;" align="center">
<!-- Screenshots -->
<?php
if ($scrnrslt = $aquaglz->query("SELECT * FROM wallpapers ORDER BY id")) {
/* determine number of rows result set */
$scrn_cnt = $scrnrslt->num_rows;
?>
<div class="warning_notice fix_media_warn">
<p>Wallpapers posted are uploaded to the server! Please upload and consider the server perfomance!</p>
</div>
<div class="container_3 bg-wide-screen fix_media_2 fix_media_vid_panel3">
<div class="grad">
<div class="page-title">Wallpapers (<?php echo $scrn_cnt; } ?>)</div>
<a href="media.php">Back to Media</a>
</div>
</div>
<div class="container_screen account-wide" style="background-image: url(assets/images/bg-media-screen-wide.png)!important;height: 747px!important;">
<ul class="screanshots all-screanshots screanshots-media-page-two">
<?php
$walp = "SELECT * FROM wallpapers ORDER BY id DESC LIMIT 16";
$walprslt = $aquaglz->query($walp); 
if ($walprslt->num_rows > 0) {
// output data of each row
while($walp = $walprslt->fetch_assoc()) {
echo '
<li>
<div class="media-video-container" align="left">
<div class="media-video-thumb container_frame">
<div class="cframe_inner">
<a href="wallpaper.php?id='.$walp["id"].'">
<!--Video Image Preview-->
<div class="image-thumb-preview" style="background-image:url(assets/images/media/wallps/'.$walp["image"].');background-size: 200px 113px;background-repeat: no-repeat;"></div>
<div class="media-zoom-ico fix-zoom-media"></div>
</a>
</div>
</div>
</div>
<div class="screanshot-title-info">'.$walp["title"].'<p>On Main Server</p></div>
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
<div class="image-thumb-preview" style="background-image:url(assets/images/media/screens/screen.png);background-size: 200px 113px;background-repeat: no-repeat;"></div>
<div class="media-zoom-ico fix-zoom-media"></div>
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
</div>
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