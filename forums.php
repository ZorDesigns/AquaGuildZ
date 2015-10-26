<?php
$page_cat = "forums";
$page_tit = "forums";
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
<a href="#" class="important_notice"><p>Forums are under construction so please DO NOT use them!</p></a>
<div class="container main-wide">
<div class="wide-padding">
<h1 class="category-title"><a href="#" title="News">News</a></h1>
<ul class="forum_row">
<li class="icon mark-as-read" data-forum-id="1">
<img src="assets/images/forum/forum_unread_locked.png" width="56" height="53" title="New Posts">
</li>
<li class="forum_title_desc">
<a href="#">
<h1>Latest News</h1>
<h2>Latest news for the community.</h2>
</a>
</li>
<li class="post">
<p>0</p>
</li>
<li class="topics">
<p>0</p>
</li>
<li class="lastpost">
<p class="topic_title"><a href="#">Title 1</a></p>
<p class="by"><a href="#">Author</a></p>
<p class="postdate">Date & Hour</p>
</li>
</ul>
<ul class="forum_row">
<li class="icon" data-forum-id="45">
<img src="assets/images/forum/forum_read_locked.png" width="56" height="53" title="No Unread Posts">
</li>
<li class="forum_title_desc">
<a href="#">
<h1>Rules and Regulations</h1>
<h2>Laws to abide by to keep your game experience intact.</h2>
</a>
</li>
<li class="post">
<p>0</p>
</li>
<li class="topics">
<p>0</p>
</li>
<li class="lastpost">
<p class="topic_title"><a href="#">Title 1</a></p>
<p class="by"><a href="#">Author</a></p>
<p class="postdate">Date & Hour</p>
</li>
</ul>
<ul class="forum_row">
<li class="icon mark-as-read" data-forum-id="41">
<img src="assets/images/forum/forum_unread.png" width="56" height="53" title="New Posts">
</li>
<li class="forum_title_desc">
<a href="#">
<h1>Guild Events</h1>
<h2>Guild Events related news</h2>
</a>
</li>
<li class="post">
<p>0</p>
</li>
<li class="topics">
<p>0</p>
</li>
<li class="lastpost">
<p class="topic_title"><a href="#">Title 1</a></p>
<p class="by"><a href="#">Author</a></p>
<p class="postdate">Date & Hour</p>
</li>
</ul></div>
</div>
<div class="clear"></div>
<div class="container main-wide">
<div class="wide-padding">
<h1 class="category-title"><a href="#" title="News">News</a></h1>
<ul class="forum_row">
<li class="icon mark-as-read" data-forum-id="1">
<img src="assets/images/forum/forum_read.png" width="56" height="53" title="New Posts">
</li>
<li class="forum_title_desc">
<a href="#">
<h1>Latest News</h1>
<h2>Latest news for the community.</h2>
</a>
</li>
<li class="post">
<p>0</p>
</li>
<li class="topics">
<p>0</p>
</li>
<li class="lastpost">
<p class="topic_title"><a href="#">Title 1</a></p>
<p class="by"><a href="#">Author</a></p>
<p class="postdate">Date & Hour</p>
</li>
</ul>
<ul class="forum_row">
<li class="icon" data-forum-id="45">
<img src="assets/images/forum/forum_unread_locked.png" width="56" height="53" title="No Unread Posts">
</li>
<li class="forum_title_desc">
<a href="#">
<h1>Rules and Regulations</h1>
<h2>Laws to abide by to keep your game experience intact.</h2>
</a>
</li>
<li class="post">
<p>0</p>
</li>
<li class="topics">
<p>0</p>
</li>
<li class="lastpost">
<p class="topic_title"><a href="#">Title 1</a></p>
<p class="by"><a href="#">Author</a></p>
<p class="postdate">Date & Hour</p>
</li>
</ul>
<ul class="forum_row">
<li class="icon mark-as-read" data-forum-id="41">
<img src="assets/images/forum/forum_unread_locked.png" width="56" height="53" title="New Posts">
</li>
<li class="forum_title_desc">
<a href="#">
<h1>Guild Events</h1>
<h2>Guild Events related news</h2>
</a>
</li>
<li class="post">
<p>0</p>
</li>
<li class="topics">
<p>0</p>
</li>
<li class="lastpost">
<p class="topic_title"><a href="#">Title 1</a></p>
<p class="by"><a href="#">Author</a></p>
<p class="postdate">Date & Hour</p>
</li>
</ul></div>
</div>
<br>
<div class="clear"></div>
</div>
<?php include("webkit/sidelogin"); ?>
</div>
</div>
<?php include("webkit/footer"); ?>
</body>
</html>