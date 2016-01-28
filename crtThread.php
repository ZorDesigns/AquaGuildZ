<?php
$page_cat = "forums";
$page_tit = "forums";
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
<link href="assets/stylesheets/form/reg.css" rel="stylesheet" type="text/css">
<!-- Le javascripts -->
<script src="assets/javascript/jquery.min.js"></script>
<script src="assets/javascript/jquery.flexslider.min.js"></script>
<script src="assets/javascript/bootstrap.min.js"></script>
<script src="assets/javascript/global.js"></script>
<script src="assets/javascript/common_orig.js"></script>
<script src="assets/stylesheets/form/reg.js"></script>
<script src="assets/stylesheets/form/reg1.js"></script>
<!-- Special CSS & JS for WYSIWYG Editor -->
<script src="assets/ckeditor/ckeditor.js"></script>
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
<div class="forum_header">
<div class="new_title">
<p>Post New Topic</p>
<div></div>
</div>		
<div class="forum_title">
<h1>Forums</h1>
<h3>Create your Topic now!</h3>
</div>
</div>	
<form action='crtThread.php' method='POST' class="post_topic_reply" name="post_topic">
<label>
<p>Title:</p><br>
<input style="width: 832px;" type='text' name='title' maxlength="150">
</label>
<label>
<p>Tags:</p><br>
<input style="width: 832px;" type='text' name='tags' maxlength="150">
</label>
<div class="row">
<p><label>Category:</label></p>
<select name='cat' style="display: none;" styled="true" id="select-style-1">
<?php 
$sct = mysqli_query($aquaglz, "SELECT * FROM subcategories");
if (mysqli_num_rows($sct) > 0) {
while ($scat = mysqli_fetch_array($sct)) {
echo '
<option value="'.$scat['uid'].'"><b>'.$scat['title'].'</b> - (<i>'.$scat['desc'].'</i>)</option>
';
}
echo '
</select>
</div>
';
}
?>
<div id="select-style-1" class="js-select" style="display: none;">
<div class="js-select-list-top-controller" id="js-list-top-controller" align="center"><p></p></div>
<div class="js-select-list-scroller" id="js-list-scroller"><div class="js-select-list-scrollable" id="js-list">
<?php 
$sct = mysqli_query($aquaglz, "SELECT * FROM subcategories");
if (mysqli_num_rows($sct) > 0) {
while ($scat = mysqli_fetch_array($sct)) {
echo '
<ul id="'.$scat['uid'].'" class="js-select-list-option js-select-list-option-selected"><b>'.$scat['title'].'</b> - (<i>'.$scat['desc'].'</i>)</ul>
';
}
echo '
</div></div>
<div class="js-select-list-bottom-controller" id="js-list-bottom-controller" align="center"><p></p>
</div>
</div>
';
}
?>
<br>
<br>
<br>
<label>
<textarea name='description' id="editor1" class="bbcode" rows="10" cols="80"></textarea>
<script data-sample="1">
CKEDITOR.replace('editor1');
</script>
</label>
<div>
<div>
<center><input type="submit" value="Create Topic" name="createThread"></center>
</div>
</div>
</form>
</div>
<?php
if(isset($_POST["createThread"])){
$sql = "INSERT INTO threads VALUES ('', '".$_POST["cat"]."', '".$_POST["title"]."', '', '', '', '".$_POST["description"]."', '$user_check', '".$_POST["tags"]."', now())";
if ($aquaglz->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
echo "<meta http-equiv='refresh'content='2;url=forums.php'>";
}else{
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $aquaglz->error."');</script>";
echo "<meta http-equiv='refresh'content='2;url=crtThread.php'>";
}
}
?>
</div>
<div class="clear"></div>
<br>
<div class="clear"></div>
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