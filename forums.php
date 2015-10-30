<?php
$page_cat = "forums";
$page_tit = "forums";
include ('settings/forum.php');
include("check.php");
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
<?php 
$ct = mysqli_query($aquaglz, "SELECT * FROM categories ORDER BY id ASC");
if (mysqli_num_rows($ct) > 0) {
while ($cat = mysqli_fetch_array($ct)) {
$uid = $cat["id"];
$name = $cat["name"];

echo '
<div class="container main-wide">
<div class="wide-padding">
<h1 class="category-title" data-forum-id="'.$uid.'"><a title="'.$name.'">'.$name.'</a></h1>
';
$sct = mysqli_query($aquaglz, "SELECT * FROM subcategories WHERE $uid=cat");
if (mysqli_num_rows($sct) > 0) {
while ($scat = mysqli_fetch_array($sct)) {
$sid = $scat['uid'];
$categ = $scat['cat'];
$title = $scat['title'];
$desc = $scat['desc'];
echo '
<ul class="forum_row">
<li class="icon mark-as-read" data-forum-id="'.$sid.'">
<img src="assets/images/forum/forum_unread_locked.png" width="56" height="53" title="New Posts">
</li>
<li class="forum_title_desc">
<a href="topics.php?ctID='.$sid.'">
<h1>'.$scat['title'].'</h1>
<h2>'.$scat['desc'].'</h2>
</a>
</li>
<li class="post">
<p>0</p>
</li>
<li class="topics">
<p>0</p>
</li>
<li class="lastpost">
<p class="topic_title"><a href="topics.php?ctID='.$sid.'">'.$name.'</a></p>
<p class="by">by <a href="#">System</a></p>
<p class="postdate">Unlocked</p>
</li>
</ul>

';
}
echo '
</div>
</div>
<div class="clear"></div>';
}
}
}
?>
<div class="clear"></div>
</div>
<?php include("webkit/sidelogin"); ?>
</div>
</div>
<?php include("webkit/footer"); ?>
</body>
</html>