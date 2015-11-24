<?php
$page_cat = "home";
$page_tit = "home";
include __DIR__ . '/configs.php';
include __DIR__ . '/settings/news';
include __DIR__ . '/settings/vids';
include __DIR__ . '/settings/slides';
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
<head>
<?php include ('webkit/meta'); ?>
<!-- Le styles -->
<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/main.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/status.css" rel="stylesheet" type="text/css">
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
<div id="slider_wrapper">
<div id="slider">
<div id="slider_trickery">
<div id="slider_mask">
<!-- -->
</div>
<div class="flexslider">
<ul class="slides">
<?php
if ($sldrslt->num_rows > 0) {
// output data of each row
while($slds = $sldrslt->fetch_assoc()) {
echo '<li><img src="assets/images/slider/'.$slds["image"].'.png" alt="'.$slds["alt"].'"></li>';
}
}else{
echo '<li><img src="assets/images/slider/noslider.png" alt=""></li>';
}
?>
</ul>
</div>
</div>
</div>
<div id="news_thumbs" class="clearfix">
<ul>
<?php
if ($vidrslt->num_rows > 0) {
// output data of each row
while($vids = $vidrslt->fetch_assoc()) {
echo '<li>
<a href="'.$vids["contentlnk"].'">
<img src="" alt="" style="background-image: url(assets/images/media/vids/'.$vids["image"].'.png);">
<span>'.$vids["title"].'</span>
</a>
</li>';
}
}else{
echo '<li>
<a href="#">
<img src="" alt="" style="background-image: url(assets/images/media/vids/novideo.png);">
<span>No Videos</span>
</a>
</li>';
}
?>
</ul>
</div>
</div>
<div id="main_content">
<a class="newer-index-btn index_pag_old_next" href="index.php?id=2">Newer</a>
<div class="paging">
<ul class="pagination-forum">
<li class="current">
<a href="#" class="index_pag_old_next pag-list" data-pagenum="1">1</a>
</li>
<li>
<a href="#" class="index_pag_old_next pag-list" data-pagenum="2">2</a>
</li>
<li>
<a href="#" class="index_pag_old_next pag-list" data-pagenum="3">3</a>
</li>
</ul>
</div>
<a class="older-index-btn index_pag_old_next" href="index.php?id=1">Older</a>
<?php
if ($result->num_rows > 0) {
// output data of each row
while($news = $result->fetch_assoc()) {
if($news['content'] == "")
{
$news['content'] = substr(strip_tags($news['content'],'<p><a><br><li><ol><ul>'),0,310);
if (substr($news['content'], -1) == '<') 
{$news['content'] = substr($news['content'], 0, -1);}
$content = $news['content'];
}else{
$content = substr(strip_tags($news['content']),0,390);}
echo '
<article>
<header>
<h1><a href="news.php?id='.$news["id"].'">'.$news["title"].'</a></h1>
<p class="meta">by <a href="">System</a> '.$news["date"].' <a href="">0</a> <img src="assets/images/content-comments.png" alt="Comments"></p>
</header>
<div class="content">
<div class="thumb">
<a href="news.php?id='.$news["id"].'"><img src="assets/images/news/square/'.$news["image"].'.png" alt=""></a>
</div>
<p>'.$content.'...</p>
<p><a href="news.php?id='.$news["id"].'">Read more</a></p>
</div>
<footer><!-- --></footer>
</article>
';
}
} else {
echo '
<article>
<header>
<h1><a href="#">Welcome to AquaGuildZ</a></h1>
<p class="meta">by <a href="">FlameCMS</a> after Installation <a href="">0</a> <img src="assets/images/content-comments.png" alt="Comments"></p>
</header>
<div class="content">
<div class="thumb">
<a href=""><img src="assets/images/news/square/install.png" alt=""></a>
</div>
<p>Welcome to AquaGuildZ powered by FlameCMS. A CMS created for your needs. All features can be found in the Documentation or you can contant the developers for any problems or clarification.</p>
<p><a href="#">Read more</a></p>
</div>
<footer><!-- --></footer>
</article>';
}
$aquaglz->close();
?>
<a class="newer-index-btn-dn index_pag_old_next" href="index.php?id=2">Newer</a>
<div class="paging-dn">
<ul class="pagination-forum">
<li class="current">
<a href="#" class="index_pag_old_next pag-list" data-pagenum="1">1</a>
</li>
<li>
<a href="#" class="index_pag_old_next pag-list" data-pagenum="2">2</a>
</li>
<li>
<a href="#" class="index_pag_old_next pag-list" data-pagenum="3">3</a>
</li>
</ul>
</div>
<a class="older-index-btn-dn index_pag_old_next" href="index.php?id=1">Older</a>
</div>
</div>
<?php include("webkit/sidebar"); ?>
</div>
<?php include("webkit/footer"); ?>
</body>
</html>