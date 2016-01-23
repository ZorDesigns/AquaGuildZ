<?php
$page_cat = "services";
$page_tit = "form";
include __DIR__ . '/configs.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
<head>
<?php include ('webkit/meta'); ?>
<!-- Le styles -->
<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/main.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/forum.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/media.css" rel="stylesheet" type="text/css">
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
<?php
if ($recrs = $aquaglz->query("SELECT * FROM recruits ORDER BY id DESC")){
/* determine number of rows result set */
$row_cnt = $recrs->num_rows;
?>
<div class="container_form_1" align="center">
<div class="holder-bugtracker">
<div class="recruit-reports-holder recruits">
<h1><?php echo $row_cnt;?></h1>
<h3>Submited Recruits</h3>
</div>
<div class="recruit-reports-holder confirmed">
<?php
if ($recra = $aquaglz->query("SELECT approved FROM recruits WHERE approved='1'")){
/* determine number of rows result set */
$row_rec = $recra->num_rows;
?>
<h1><?php echo $row_rec;?></h1>
<h3>Approved Recruits</h3>
</div>
<a href="crtRecruit.php" class="submit-recruit">
<div class="plus-ico">
<div id="partone"></div><div id="parttwo"></div>
</div>
<h1>Recruit me Now!</h1>
</a>
<div class="clear"></div>
<div class="current-recruits">
There are <b><?php echo $row_cnt;
/* close result set */
$recrs->close();
}
?></b> Recruit Posts <span>(<?php echo $row_rec;
/* close result set */
$recra->close();
}
?> of them are approved)</span> 
</div>
</div>
<div class="clear"><br></div>
<div class="container_form_1" align="center">
<div class="container_rec_form rec-search-results" style="width:843px; padding-top:14px; padding-bottom:10px;">
<div class="unity_rec">
<?php
$recrs = "SELECT * FROM recruits ORDER BY id DESC";
$recrslt = $aquaglz->query($recrs); 
if ($recrslt->num_rows > 0) {
// output data of each row
while($recrs = $recrslt->fetch_assoc()) {
echo '
<a href="postRecruit.php?ctID='.$recrs["id"].'">
<ul class="rec-row" style="border:#1d2716 2px dashed;">
<li class="title">'.$recrs["class"].': '.$recrs["spec"].'</li>
<li class="by">by <b>'.$recrs["battletag"].'</b></li>
<li class="date">'.$recrs["last_date"].'</li>
<li class="status '.strtolower($recrs["type"]).'"><b>'.$recrs["type"].'</b></li>
</ul>
</a>
';
}
}else{
echo '
<a href="#">
<ul class="rec-row" style="border:#1d2716 2px dashed;">
<li class="title">No Recruits</li>
<li class="by">by <b>SYSTEM</b></li>
<li class="date">The Future | The Past</li>
<li class="status approved"><b>Closed</b></li>
</ul>
</a>
';
}
?>
</div>                 
</div>
</div>
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