<?php
$page_cat = "home";
$page_tit = "home";
include __DIR__ . '/configs.php';
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
<img src="//i.ytimg.com/vi_webp/'.$vids["contentlnk"].'/mqdefault.webp" alt="" style="background-repeat: no-repeat;max-width: 138px;max-height: 86px;">
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
<?php
// The name says it all :P
$per_page = 4;

// Numbering the results from the DB
if ($news = $aquaglz->query("SELECT * FROM news ORDER BY id DESC"))
{
if (@$news->num_rows != 0)
{
$total_results = $news->num_rows;
// Returns the highest integer in row by rounding them up -> ceil()
$total_pages = ceil($total_results / $per_page);

// Checking the Variable of the Page
if (isset($_GET['page']) && is_numeric($_GET['page']))
{
$show_page = $_GET['page'];
if ($show_page > 0 && $show_page <= $total_pages)
{
$start = ($show_page -1) * $per_page;
$end = $start + $per_page;
}
else
{
// Error to show the first page.
$start = 0;
$end = $per_page;
}
}
else
{
// Display Page One if not numbered.
$start = 0;
$end = $per_page;
}

// Pagination Yay!
echo '<a class="newer-index-btn index_pag_old_next" href="index.php">View All</a>
<div class="paging">
<ul class="pagination-forum">';
for ($i = 1; $i <= $total_pages; $i++)
{
if (isset($_GET['page']) && $_GET['page'] == $i)
{
echo '<li class="current">
<a href="index.php?page='.$i.'" class="current_nr pag-list" data-pagenum="'.$i.'">'.$i.'</a>
</li>';
}
else
{
echo '';
echo'
<li class="current">
<a href="index.php?page='.$i.'" class="index_pag_old_next pag-list" data-pagenum="'.$i.'">'.$i.'</a>
</li>
';
}
}
echo '</ul>
</div>
<a class="older-index-btn-dn index_pag_old_next" href="index.php?page=1">First</a>';

// Loop results from the DB Query, displaying them
for ($i = $start; $i < $end; $i++)
{
// Make sure the PHP doesn't display "potatoes"
if ($i == $total_results) { break; }

// Search for Specific Row
$news->data_seek($i);
$row = $news->fetch_row();

//Minimizing the news information.
if($row[3] == "")
{
$row[3] = substr(strip_tags($row[3],'<p><a><br><li><ol><ul>'),0,310);
if (substr($row[3], -1) == '<') 
{$row[3] = substr($row[3], 0, -1);}
$content = $row[3];
}else{
$content = substr(strip_tags($row[3]),0,390);
}
// Display the News in rows
echo '
<article>
<header>
<h1><a href="news.php?id='.$row[0].'">'.$row[4].'</a></h1>
<p class="meta">by <a href="">System</a> '.$row[2].' <a href="">0</a> <img src="assets/images/content-comments.png" alt="Comments"></p>
</header>
<div class="content">
<div class="thumb">
<a href="news.php?id='.$row[0].'"><img src="assets/images/news/square/'.$row[6].'.png" alt=""></a>
</div>
<p>'.$content.'...</p>
<p><a href="news.php?id='.$row[0].'">Read more</a></p>
</div>
<footer><!-- --></footer>
</article>
';
}
}
// Else use the Basic Intro for not having any News
else
{
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
}
// Close the Query
$aquaglz->close();
?>
</div>
</div>
<?php include("webkit/sidebar"); ?>
</div>
<?php include("webkit/footer"); ?>
</body>
</html>