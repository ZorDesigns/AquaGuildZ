<?php
$page_cat = "media";
$page_tit = "media";
include __DIR__ . '/configs.php';
$sid = $_GET["id"];
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
<?php include("settings/googletracking.php") ?>
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
<div class="container_4" style="height: 751px!important;" align="center">
<!-- Screenshots -->
<?php
$scrn = "SELECT * FROM wallpapers WHERE id=$sid";
$scrnrslts = $aquaglz->query($scrn); 
if ($scrnrslts->num_rows > 0) {
// output data of each row
while($scrn = $scrnrslts->fetch_assoc()) {
?>
<div class="warning_notice fix_media_warn">
<p>Wallpapers posted are uploaded to the main & backup System! Thou you can preview & download them here!</p>
</div>
<div class="container_3 bg-wide-screen fix_media_2 fix_media_vid_panel3">
<div class="grad">
<div class="page-title">Wallpaper > <?php echo $scrn["title"]; ?></div>
<a href="wallps.php">Back to Wallpapers</a>
</div>
</div>
<div class="container_screen account-wide" style="background-image: url(assets/images/bg-media-screen-wide.png)!important;height: 680px!important;">
<?php
echo '<div class="datam" style="background-image: url(assets/images/media/wallps/'.$scrn['image'].');background-size: 930px 523px;background-repeat: no-repeat;"></div>
<div class="infosm"><h3></h3><ul><li>
<span>Description</span>: <a>'.$scrn['desc'].'</a>
</li><li><span>Uploaded on</span>: <span>'.$scrn['date'].'</span></li>';
?>
</ul>
</div>
<a class="goback" href="#" onclick="window.open('assets/images/media/wallps/<?php echo $scrn["image"]; ?>')">View Bigger</a>
<?php }} ?>
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