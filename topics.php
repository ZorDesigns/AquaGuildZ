<?php
$page_cat = "forums";
$page_tit = "forums";
include __DIR__ . '/settings/forum.php';
include __DIR__ . '/check.php';
$ctID = $_GET["ctID"];
$chid = mysqli_query($aquaglz, "SELECT rank FROM `subcategories` WHERE `uid`=$ctID");
if (mysqli_num_rows($chid) > 0) {
while ($chrow = mysqli_fetch_array($chid)) {
$rankch = $chrow["rank"];
}}
if($login_rank <= $rankch)
{
die('<meta http-equiv="refresh" content="2;url=wrong.php"/>');
}
?>
<!DOCTYPE html>
<html>
<head>
<?php include ('webkit/meta'); ?>
<!-- Le styles -->
<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/main.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/forums.css" rel="stylesheet" type="text/css">
<!-- Le javascripts -->
<script src="assets/javascript/jquery.min.js"></script>
<script src="assets/javascript/jquery.flexslider.min.js"></script>
<script src="assets/javascript/bootstrap.min.js"></script>
<script src="assets/javascript/global.js"></script>
<script src="assets/javascript/common_orig.js"></script>
<!-- WoWHead Linking -->
<script type="text/javascript" src="//static.wowhead.com/widgets/power.js"></script>
<script>var wowhead_tooltips = { "colorlinks": true, "iconizelinks": true, "renamelinks": true }</script>
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
<?php include("webkit/warning"); ?>
<div class="container_ main-wide">
<div class="forum-padding">
<!-- Forum Header -->
<div class="forum_header">
<div class="forum_title">
<?php
$titlefor = "SELECT * FROM subcategories WHERE `uid`=$ctID";
$title = $aquaglz->query($titlefor); 
if ($title->num_rows > 0) {
// output data of each row
while($titlefor = $title->fetch_assoc()) {
echo '<h1>'.$titlefor["title"].'</h1>
<h3>'.$titlefor["desc"].'</h3>';
}}
?>
</div>
<h4><b>
<?php
if ($recrs = $aquaglz->query("SELECT * FROM threads WHERE `cat`=$ctID")){
/* determine number of rows result set */
$row_cnt = $recrs->num_rows;
echo $row_cnt;
}?>
</b> topic(s)</h4>
</div>
<!-- Actions -->
<div class="actions_c">
<a href="crtThread.php" class="forum_btn_large">Post New Topic</a>
<div class="paging">
<ul class="pagination-forum">
<li class="current">
<a href="#" class="forum_btn_large_list" data-pagenum="1">1</a>
</li>
<li>
<a class="forum_btn_large_list" data-pagenum="2">...</a>
</li>
<li>
<a href="#" class="forum_btn_large_list" data-pagenum="3">></a>
</li>
</ul>
</div>
</div>
<?php
$qu = mysqli_query($aquaglz, "SELECT * FROM `threads` WHERE `cat`=$ctID ORDER BY id DESC");
if (mysqli_num_rows($qu) > 0) {
while ($row = mysqli_fetch_array($qu)) {
$hot = $row["hot"];
echo '					
<ul class="topic_row">
<li class="icon">
';
if ($hot == '1'){
echo '<img src="assets/images/forum/topic_unread_hot.png" width="55px" height="39px">';
}else{
echo '<img src="assets/images/forum/topic_unread.png" width="55px" height="39px">';
}
echo'
</li>
<li class="topic_title_by_date">
<h1><a href="thread.php?tid='.$row["id"].'">['.$row["id"].'] '.$row["title"].'</a></h1>
<p>Created by <a>System</a>, '.$row["last_date"].'</p>
</li>
';
if($login_rank < 3)
{
echo'<li class="lastpost">
<h4>by <a>System</a></h4>
<h5>'.$row["last_date"].'</h5><a href="thread.php?tid='.$row["id"].'" class="go_to_lastpost" title="Go to last post"><p>Go to last post</p></a></li>';
}else{
echo '<li class="lastpost">
<h4>by <a>System</a></h4>
<h5>'.$row["last_date"].'</h5><a href="rmv_forum.php?tid='.$row["id"].'" id="remove_post" title="Delete Post"><p>Delete Post</p></a></li>';
}
echo'
</ul>						
';
}
}else{
echo '
<ul class="topic_row">
<li class="icon">
<img src="assets/images/forum/topic_unread_hot.png" width="55px" height="39px">
</li>
<li class="topic_title_by_date">
<h1><a href="#">No Threads found</a></h1>
<p>Go make a <a>post</a>, so you can use the forum</p>
</li>
<li class="lastpost">
<h4>by <a>System</a></h4>
<h5>Today</h5>
<a href="#" class="go_to_lastpost" title="Go to last post"><p>Go to last post</p></a></li>
</ul>
';
}
?>
<!-- Actions -->
<div class="actions_c">
<a href="crtThread.php" class="forum_btn_large">Post New Topic</a>
<div class="paging">
<ul class="pagination-forum">
<li class="current">
<a href="#" class="forum_btn_large_list" data-pagenum="1">1</a>
</li>
<li>
<a class="forum_btn_large_list" data-pagenum="2">...</a>
</li>
<li>
<a href="#" class="forum_btn_large_list" data-pagenum="3">></a>
</li>
</ul>
</div>
</div>
</div>
</div><div class="clear"></div>
<br>
<div class="clear"></div>
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