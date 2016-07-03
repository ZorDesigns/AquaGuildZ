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
$vids = "SELECT * FROM vids WHERE id=$sid";
$scrnrslts = $aquaglz->query($vids); 
if ($scrnrslts->num_rows > 0) {
// output data of each row
while($vids = $scrnrslts->fetch_assoc()) {
$vidlink = $vids['contentlnk'];
?>
<div class="warning_notice fix_media_warn">
<p>Screenshots posted are uploaded to IMGUR.com! Thou you can preview them here!</p>
</div>
<div class="container_3 bg-wide-screen fix_media_2 fix_media_vid_panel3">
<div class="grad">
<div class="page-title">Video > <?php echo $vids["title"]; ?></div>
<a href="vids.php">Back to Videos</a>
</div>
</div>
<div class="container_screen account-wide" style="background-image: url(assets/images/bg-media-screen-wide.png)!important;height: 680px!important;">
<?php
echo '<div class="datam" id="player"></div>
<div class="infosm"><h3></h3><ul><li>
<span>Description</span>: <a>'.$vids['desc'].'</a>
</li><li><span>Uploaded on</span>: <span>YouTube</span></li>';
?>
</ul>
</div>
<script>
// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
player = new YT.Player('player', {
height: '523',
width: '930',
videoId: '<?php echo $vidlink; ?>',
events: {
'onReady': onPlayerReady,
'onStateChange': onPlayerStateChange
}
});
}
// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
event.target.playVideo();
}
// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;
function onPlayerStateChange(event) {
if (event.data == YT.PlayerState.PLAYING && !done) {
done = true;
}
}
function stopVideo() {
player.stopVideo();
}
</script>
<a class="goback" href="#" onclick="window.open('https://www.youtube.com/watch?v=<?php echo $vids["contentlnk"]; ?>')">View on YouTube</a>
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