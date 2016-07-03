<?php
$page_cat = "services";
$page_tit = "services";
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
<div class="container_com" align="center">
<!-- Videos -->
<div class="warning_notice fix_media_warn">
<p><?php echo $cms['name']; ?> provide the following features free of charge just to make the Guild a better place!</p>
</div>
<div class="container_3 fix_media_vid_panel" style="background-image: url(assets/images/bg-rec.png)!important;">
<div class="grad">
<div class="page-title">Guild Recruitment</div>
<a href="form.php">Go Now!</a>
</div>
</div>
<div class="container_wowhead account-wide" align="left" style="background-image: url(assets/images/bg-guildrecr.png)!important;">
<div class="media-video-container media-fix" align="left">
<div class="media-video-thumb container_frame">
<div class="cframe_inner">
<a href="form.php">
<!--Video Image Preview-->
<div class="image-thumb-preview" style="background-image:url(assets/images/guildrecr.png);background-size: 200px 113px;background-repeat: no-repeat;"></div>
<div class="play-button-small"></div>
</a>
</div>
</div>
<div class="video-info">
<!--Video Title-->
<h3>Guild Recruitment</h3>
<!--Video Description-->
<p>Want to join the Guild? Interested in becoming a Hellenic Horde member? Go now to the link and place a form to be recruited! You will pass 2 tests! Good Luck!</p>
<!--Video Youtube Link-->
<a href="form.php">Go to Recruitment Now!</a>
</div>
<div class="clear"></div>
</div>                   
</div>
<!-- Videos.End -->
<!-- Wallpapers -->
<div class="container_3 fix_media_vid_panel2" style="background-image: url(assets/images/youtube-ac.png)!important;">
<div class="grad">
<div class="page-title">Youtubers</div>
<a href="youtubers.php">Go Now!</a>
</div>
</div>
<div class="container_mmo account-wide" align="right" style="background-image: url(assets/images/bg-youtube.png)!important;">
<div class="media-video-container media-fix" align="left">
<div class="media-video-thumb container_frame">
<div class="cframe_inner">
<a href="youtubers.php">
<!--Video Image Preview-->
<div class="image-thumb-preview" style="background-image:url(assets/images/youtubers.png);background-size: 200px 113px;background-repeat: no-repeat;"></div>
<div class="play-button-small"></div>
</a>
</div>
</div>
<div class="video-info">
<!--Video Title-->
<h3>Youtubers</h3>
<!--Video Description-->
<p>We provide a feature that shows our latest Youtubers that upload content relative to the progress of the Guild or their own.</p>
<!--Video Youtube Link-->
<a href="youtubers.php">Go check them out!</a>
</div>
</div>
<div class="clear"></div>
</div>
<!-- Wallpapers.End -->
<div class="clear"></div>
<div class="container_3 account-bg fix_icyveins_panel">
<div class="grad">
<div class="page-title">Change Logs</div>
<a href="#">Coming Soon!</a>
</div>
</div>
<div class="container_icyveins vid-bg account-wide" align="left">
<div class="media-video-container media-fix" align="left">
<div class="media-video-thumb container_frame">
<div class="cframe_inner">
<a href="#">
<!--Video Image Preview-->
<div class="image-thumb-preview" style="background-image:url(assets/images/changelogs.png);background-size: 200px 113px;background-repeat: no-repeat;"></div>
<div class="play-button-small"></div>
</a>
</div>
</div>
<div class="video-info">
<!--Video Title-->
<h3>Change Logs</h3>
<!--Video Description-->
<p>The changelog page enables you to view our changes that we make everyday... Please keep in mind that not all changes are currently applied to the guild or the website.</p>
<!--Video Youtube Link-->
<a href="#" target="_blank">Coming Soon!</a>
</div>
<div class="clear"></div>
</div>                   
</div>
<!-- Videos.End -->
<!-- Wallpapers -->
<div class="container_3 fix_curse_panel" style="background-image: url(assets/images/bg-cursevoip.png)!important;">
<div class="grad">
<div class="page-title">Teamspeak</div>
<a href="http://www.teamspeak.com/">Go Now!</a>
</div>
</div>
<div class="container_mmo account-wide" align="right" style="background-image: url(assets/images/bg-cursevoice.png)!important;">
<div class="media-video-container media-fix" align="left">
<div class="media-video-thumb container_frame">
<div class="cframe_inner">
<a href="http://www.teamspeak.com/">
<!--Video Image Preview-->
<div class="image-thumb-preview" style="background-image:url(assets/images/cursevoice.png);background-size: 200px 113px;background-repeat: no-repeat;"></div>
<div class="play-button-small"></div>
</a>
</div>
</div>
<div class="video-info">
<!--Video Title-->
<h3>Teamspeak</h3>
<!--Video Description-->
<p>Teamspeak is the Voice (VoIP) Application that our Guild uses to achieve our progress! Teamspeak provides the Best Voice (Audio) Quality that is currently out there!</p>
<!--Video Youtube Link-->
<a href="http://www.teamspeak.com/" target="_blank">Go to Teamspeak now!</a>
</div>
</div>
<div class="clear"></div>
</div>
<!-- Wallpapers.End -->
<br>
<!-- Screanshots -->
<div class="container_3 fix_curse_voice_panel" style="background-image: url(assets/images/bg-wide-serv.png)!important;">
<div class="grad">
<div class="page-title">Guild Site Progress</div>
<a href="#">Details Coming Soon!</a>
</div>
</div>
<div class="container_screen account-wide" style="background-image: url(assets/images/bg-serv-screen.png)!important;">
<p><div class="block online_players">
<div class="half_top logo_container">
</div>
<div class="middle_content">
<h1>70%</h1>
<h2 style="font-size: 23px!important;margin: -10px 0 0 43px!important;">Site Style</h2>
</div>
</div></p>
<p><div class="block online_players">
<div class="half_top logo_container">
</div>
<div class="middle_content">
<h1 class="fix_area_h1">85%</h1>
<h2 style="font-size: 23px!important;margin: -10px 0 0 17px!important;">Site Code</h2>
</div>
</div></p>
<p><div class="block online_players">
<div class="half_top logo_container">
<div class="realm_logo">
<span class="picto_Joueurs"></span>
</div>
</div>
<div class="middle_content">
<h1 class="fix_area_h1">67%</h1>
<h2 style="font-size: 23px!important;margin: -10px 0 0 -4px!important;">Site Features</h2>
</div>
</div></p>
<p><div class="block online_players">
<div class="half_top logo_container">
</div>
<div class="middle_content">
<h1 class="fix_memb_h1">92%</h1>
<h2 style="font-size: 23px!important;margin: -10px 0 0 34px!important;">ART Style</h2>
</div>
</div></p>
<p><div class="block online_players">
<div class="half_top logo_container">
</div>
<div class="middle_content">
<h1 class="fix_area_h1">100%</h1>
<h2 style="font-size: 23px!important;margin: -10px 0 0 56px!important;">BETA</h2>
</div>
</div></p>
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