<?php
$page_cat = "home";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>         <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>           <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>           <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
<head>
        <meta charset="utf-8">
        <title>AquaGuildZ - UVT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A Guild System Manager made with AquaGuildZ Core">
        <meta name="author" content="AquaGuildZ - UVT">
		<link rel="shortcut icon" href="admin/img/favicon.png">
        <!-- Le styles -->
        <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/main.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/forum.css" rel="stylesheet" type="text/css">
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
                    <li><img src="assets/images/slider/featured1.png" alt=""></li>
<li><img src="assets/images/slider/featured2.png" alt=""></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="news_thumbs" class="clearfix">
       <ul>
            <li>
                    <a href="#">
                        <img src="" alt="" style="background-image: url(assets/images/news/usquare/newsthumb1.png);">
                        <span>Test Title</span>
                    </a>
                  </li>
  <li>
                    <a href="#">
                        <img src="" alt="" style="background-image: url(assets/images/news/usquare/newsthumb2.png);">
                        <span>Test Title</span>
                    </a>
                  </li>
  <li>
                    <a href="#">
                        <img src="" alt="" style="background-image: url(assets/images/news/usquare/newsthumb3.png);">
                        <span>Test Title</span>
                    </a>
                  </li><li>
                    <a href="#">
                        <img src="" alt="" style="background-image: url(assets/images/news/usquare/newsthumb4.png);">
                        <span>hdrd</span>
                    </a>
                  </li>        </ul>
    </div>
</div>
<div id="main_content">
    <article>
                <header>
                    <h1><a href="">Pro Guide: Hotie</a></h1>
                        <p class="meta">by <a href="">FailZorD</a> 2 years, 6 months, 3 weeks ago <a href="">0</a> <img src="assets/images/content-comments.png" alt="Comments"></p>
                    </header>
                    <div class="content">
                    <div class="thumb">
                        <a href=""><img src="assets/images/news/square/newsarticle1.png" alt=""></a>
                        </div>
                    <p>Priest Hotie has been announced as the best Priest Discipline on Twisting Nether! After a lot of research and statistics Hotie was announced...</p>
<div align="right"><a href="" class="login-btn">Read More</a></div>
                    </div>
                    <footer><!-- --></footer>
                </article><article>
                <header>
                    <h1><a href="">hdrd</a></h1>
                        <p class="meta">by <a href="">FailZorD</a> 2 years, 6 months, 3 weeks ago <a href="">0</a> <img src="assets/images/content-comments.png" alt="Comments"></p>
                    </header>
                    <div class="content">
                    <div class="thumb">
                        <a href=""><img src="assets/images/news/square/newsarticle2.png" alt=""></a>
                        </div>
                    <p>hhdrh</p>
<div align="right"><a href="" class="login-btn">Read More</a></div>
                    </div>
                    <footer><!-- --></footer>
</article>
</div>
</div>
<?php include("webkit/sidebar"); ?>
</div>
<?php include("webkit/footer"); ?>
</body>
</html>