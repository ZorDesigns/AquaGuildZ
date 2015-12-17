<?php
include __DIR__ . '/configs.php';
$page_cat = "home";
$page_tit = "home";
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
<link href="assets/stylesheets/status.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/roster.css" rel="stylesheet" type="text/css">
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
<div id="main_content">
<div class="container_3 archived-news">  
<!-- News Content -->
<?php
$newsID = $_GET["id"];
$currentid=$newsID;
$result = mysqli_query($aquaglz, "select * from news where id=$currentid");
while ($row = mysqli_fetch_array($result))
{
$newsTT=$row['title'];
$newsDT=$row['date'];
$newsIMG=$row['image'];
$newsCNT=$row['content'];
$currentid=$row['id'];
}
$resultPrev = mysqli_query($aquaglz, "select * from news where id<$currentid ORDER BY id DESC LIMIT 1");
while($prevRow = mysqli_fetch_array($resultPrev))
{
$previd = $prevRow['id'];
}
$resultNext = mysqli_query($aquaglz, "select * from news where id>$currentid LIMIT 1");
while($nextRow = mysqli_fetch_array($resultNext))
{
$nextid = $nextRow['id'];
}
echo '
<div class="arnews-head" align="left">
<h1>'.$newsTT.' </h1>'.$newsDT.', posted by System
</div>
<div class="header-image">
<img itemprop="image" alt="" src="assets/images/news/full/'.$newsIMG.'-big.png" />
</div>
<div class="arnews-cont" align="left"><br><p><a href="assets/images/news/full/'.$newsIMG.'-big.png">Click</a> for a full view of the image.</p></div>
<div class="arnews-cont" align="left">'.$newsCNT.'
<div class="clear"></div>
</div>
</div>
';
if (@$nextid < '1'){
echo '<a class="newer-news-btn" href="news.php?id='.@$currentid.'">Newer</a>';
}else{
echo '<a class="newer-news-btn" href="news.php?id='.@$nextid.'">Newer</a>';
}
if (@$previd < '1'){
echo '<a class="older-news-btn" href="news.php?id='.@$currentid.'">Older</a>';
}else{
echo '<a class="older-news-btn" href="news.php?id='.@$previd.'">Older</a>';
}
?>
<!-- News Content.End --> 
<div class="clear"></div>
</div>
</div>
<?php include("webkit/sidebar"); ?>
</div>
<?php include("webkit/footer"); ?>
<?php 
// Closing the Connection for Injection Measures!
$aquaglz->close();
?>
</body>
</html>