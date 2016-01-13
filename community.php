<?php
$page_cat = "community";
$page_tit = "community";
include __DIR__ . '/configs.php';
include __DIR__ . '/settings/comslide';
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
<link href="//wow.zamimg.com/css/basic.css" rel="stylesheet" type="text/css" id="style1">
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
<div class="container_6" align="center">
<div class="content_holder">
<div id="wowhd-search">
<div class="lgo"></div>
<form action="http://www.wowhead.com/search" class="search">
<span><a href="javascript:;"></a><input class="searchwd" type="text" name="q"></span>
<input class="search-bwd" type="submit" name="" value=""><img style="margin: 19px 0px 0px -505px;" src="assets/stylesheets/form/images/logo_search.png"/></input>
</form>
</div>
<span class="clear"><!-- --></span>
<!-- Slider for Community -->
<div class="flexslider flexicom">
<ul class="slides">
<?php
if ($sldrslt->num_rows > 0) {
// output data of each row
while($slds = $sldrslt->fetch_assoc()) {
echo '<li><div class="slide_mask">
<a href="'.$slds["lnk"].'"><img src="assets/images/slider/'.$slds["image"].'.png">
<span class="comslider-title">'.$slds["title"].'</span></a>
<span class="comslider-desc">'.$slds["desc"].'</span>
</div>
';
}
}else{
echo '<li><div class="slide_mask">
<a href="#"><img src="assets/images/slider/noslider.png">
<span class="comslider-title">No Sliders</span></a>
<span class="comslider-desc">Go to the Admin Panel and add some!</span>
</div>';
}
?>
</ul>
</div>
<span class="clear"><!-- --></span>
<a href="http://www.icy-veins.com/wow/" class="main-services-banner left-bnr" style="background-image:url('assets/images/community/icyveins.jpg');">
<span class="banner-title">Icy Veins</span>
<span class="banner-desc">Icy Veins provides news and detailed guides for all Blizzard Games like World of Warcraft.</span>
</a>
<a href="http://www.mmo-champion.com/content/" class="main-services-banner right-bnr" style="background-image:url('assets/images/community/mmochamp.jpg');">
<span class="banner-title">MMO Champion</span>
<span class="banner-desc">Articles and forums with game news and raiding strategies for World of Warcraft!</span>
</a>
<span class="clear"><!-- --></span>
<section id="twitter-com">
<a class="twitter-timeline" href="https://twitter.com/BlizzardCSEU_EN" data-widget-id="687110952177799169"></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</section>
</div>
<br>
</div>
<br>
</div>
<?php include("webkit/sidecom"); ?>
</div>
<?php include("webkit/footer"); ?>
</div>
</body>
</html>