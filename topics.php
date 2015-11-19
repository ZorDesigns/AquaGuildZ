<?php
$page_cat = "forums";
$page_tit = "forums";
include __DIR__ . '/settings/forum.php';
include __DIR__ . '/check.php';
if($login_rank <= 1)
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
<div class="container main-wide">
<div class="forum-padding">
<!-- Forum Header -->
<div class="forum_header">
<div class="forum_title">
<h1>General Discussion</h1>
<h3>Most of our posts contains kill and previous progression</h3>
</div>
<h4><b>1</b> topic(s)</h4>
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
$ctID = $_GET["ctID"];
$qu = mysqli_query($aquaglz, "SELECT * FROM `threads` WHERE `cat`=$ctID ORDER BY id DESC");
if (mysqli_num_rows($qu) > 0) {
while ($row = mysqli_fetch_array($qu)) {
echo '					
<ul class="topic_row">
<li class="icon">
<img src="assets/images/forum/topic_unread_hot.png" width="55px" height="39px">
</li>
<li class="topic_title_by_date">
<h1><a href="thread.php?tid='.$row["id"].'">['.$row["id"].'] '.$row["title"].'</a></h1>
<p>Created by <a>System</a>, '.$row["last_date"].'</p>
</li>
<li class="lastpost">
<h4>by <a>System</a></h4>
<h5>'.$row["last_date"].'</h5>
<a href="thread.php?tid='.$row["id"].'" class="go_to_lastpost" title="Go to last post"><p>Go to last post</p></a></li>
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
</body>
</html>