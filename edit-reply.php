<?php
$page_cat = "forums";
$page_tit = "forums";
include __DIR__ . '/check.php';
if($login_rank <= 1)
{
die('<meta http-equiv="refresh" content="2;url=wrong.php"/>');
}
// GET the Variable "ID" from the URL
$edi = $_GET['edid'];
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
<p>Edit your Reply</p>
<div></div>
</div>
<?php
$qu = mysqli_query($aquaglz, "SELECT * FROM `replies` WHERE `id`='$edi'");
if (mysqli_num_rows($qu) > 0) {
while ($row = mysqli_fetch_array($qu)) {
$editor = $row["threadID"];
$content = $row["content"];
$qer = mysqli_query($aquaglz, "SELECT * FROM `threads` WHERE `id`='$editor'");
if (mysqli_num_rows($qer) > 0) {
while ($rowg = mysqli_fetch_array($qer)) {
$redirect_id = $rowg['id'];
echo'<div class="forum_title">
<h1>@ '.$rowg['title'].'</h1>
<h3>Submit your reply!</h3>
</div>
';
?>
</div>
<form action="" method="POST" class="post_topic_reply" name="post_topic">
<br>
<br>
<br>
<label>
<div style="background-color: transparent!important;">
<textarea name='description' id="editor1" class="bbcode" rows="10" cols="80"></textarea>
<script data-sample="1">
enterMode : CKEDITOR.ENTER_BR
CKEDITOR.replace('editor1');
CKEDITOR.instances['editor1'].setData('<?php echo $content; ?>')
</script>
</div>
</label>
<div>
<div>
<center><input type="submit" value="Post Reply" name="changereply"></center>
<?php
if(isset($_POST["changereply"])){
$sql = "UPDATE replies SET content='".$_POST["description"]."' WHERE `id`='".$edi."';";
if ($aquaglz->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('Your Reply has been updated! We are redirecting you!');</script>";
echo "<meta http-equiv='refresh'content='2;url=thread.php?tid=$redirect_id'>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $aquaglz->error."');</script>";
echo "<meta http-equiv='refresh'content='2;url=thread.php?tid=$redirect_id'>";
}
}
}
}
}
}?>
</div>
</div>
</form>
</div>
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