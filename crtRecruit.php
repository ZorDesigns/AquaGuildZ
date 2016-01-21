<?php
$page_cat = "services";
$page_tit = "services";
include __DIR__ . '/configs.php';
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
<link href="assets/stylesheets/forums.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/form/reg.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/media.css" rel="stylesheet" type="text/css">
<!-- Le javascripts -->
<script src="assets/javascript/jquery.min.js"></script>
<script src="assets/javascript/jquery.flexslider.min.js"></script>
<script src="assets/javascript/bootstrap.min.js"></script>
<script src="assets/javascript/global.js"></script>
<script src="assets/javascript/common_orig.js"></script>
<script src="assets/stylesheets/form/reg.js"></script>
<script src="assets/stylesheets/form/reg1.js"></script>
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
<div class="container_crt" align="center">
<div class="recruit-bg-dark">
<div class="recruit-title">
<h1>Recruitment Post</h1>
<h4>Please answer all the questions correctly with please do not lie to any of the questions because we are gonna check! All the Questions must be answered correctly! Please try to read again and again your post, so everything is in place and written well!</h4>
</div>
</div>
<div class="container_form_2" align="left" style="padding:36px">
<form method="post" action="#" name="BTSubmitForm">
<div class="row_">
<p><label>Class:</label></p>
<select name='cat' style="display: none;" styled="true" id="select-style-1">
<option value="1">Death Knight</option>
<option value="2">Druid</option>
</select>
</div>
<br>
<div class="clear"></div>
<div class="row_">
<p><label>Spec:</label></p>
<select name='cat' style="display: none;" styled="true" id="select-style-1">
<option value="1">Tank</option>
<option value="2">Healer</option>
<option value="3">DPS</option>
</select>
</div>
<br>
<div class="clear"></div>
<div class="row_">
<p><label>Are you familiar with raiding?</label></p>
<select name='cat' style="display: none;" styled="true" id="select-style-1">
<option value="1">Yes</option>
<option value="2">No</option>
</select>
</div>
<br>
<div class="clear"></div>
<div class="row_">
<p><label>Please link your Armory Link:</label></p>
<input style="width: 832px;" type='text' name='tags' maxlength="150">
</div>

<div class="sub-selects">
<!-- Categories -->
<div id="category-select" style="display:inline-block; margin:0 0 0 9px; display:none;">
</div>
<div id="subcategory-select" style="display:inline-block; margin:0 0 0 9px; display:none;">
</div>
</div>
<br>
<textarea name="text" style="display:block; float:none; width:800px; height:300px; margin:20px 0px 15px 1px;" placeholder="Please describe yourself with as much detail as possible."></textarea>
<input type="submit" value="Post">
</form>
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