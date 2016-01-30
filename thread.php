<?php
$page_cat = "forums";
$page_tit = "forums";
include __DIR__ . '/settings/forum.php';
include __DIR__ . '/check.php';
$tid = $_GET["tid"];
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
<div class="container_ main-wide">
<div class="forum-padding">
<?php 
$qq = mysqli_query($aquaglz, "SELECT * FROM `threads` WHERE `id`='$id'");
if (mysqli_num_rows($qq) > 0) {
$info = mysqli_fetch_array($qq);
$all = $info['rating'];
$total = $info['totalRatings'];
if ($all == 0 || $all == null || $total == 0 || $total == null) {
echo '<a href="#" class="important_warning"><p>No Rating has been given yet, for this thread!</p></a>';
}else {
$average = $all / $total;
}
}
?>
<!-- Actions -->
<div class="actions_c">
<script>
$("#hulk").click(function() {
  $("html, body").animate({ scrollTop: $(document).height() }, "slow");

});
</script>
<a href="#bottom" id="hulk" class="forum_btn_large">Reply Topic</a>
<div class="pagingT">
<div class="rating">
<a href="rateThread.php?tid=<?php echo $id; ?>&rating=5" class="fa-star-o" data-pagenum="5"></a>
<a href="rateThread.php?tid=<?php echo $id; ?>&rating=4" class="fa-star-o" data-pagenum="4"></a>
<a href="rateThread.php?tid=<?php echo $id; ?>&rating=3" class="fa-star-o" data-pagenum="3"></a>
<a href="rateThread.php?tid=<?php echo $id; ?>&rating=2" class="fa-star-o" data-pagenum="2"></a>
<a href="rateThread.php?tid=<?php echo $id; ?>&rating=1" class="fa-star-o" data-pagenum="1"></a>
</div>
</div>
</div>
<!-- Topic Post -->
<?php
$var = mysqli_query($aquaglz, "SELECT rank FROM `users` WHERE `email`='$user_check'");
if (mysqli_num_rows($var) > 0) {
while ($rowvar = mysqli_fetch_array($var)) {
$rank_check = $rowvar['rank'];
$qer = mysqli_query($aquaglz, "SELECT * FROM `users` WHERE `email`='$author'");
if (mysqli_num_rows($qer) > 0) {
while ($rowgb = mysqli_fetch_array($qer)) {
$gBtaG = $rowgb['bTag'];
$gbAvA = $rowgb['avatar'];
$gUseR = $rowgb['rank'];
echo '<!-- Forum Header -->
<div class="topic_header">
<div class="topic_title">
<h1>'.$title.'</h1>
<h3>Mon Oct 26, 2015, 02:44 AM</h3>
</div>
<h4><b>2</b> Post(s)</h4>
</div>
';
if ($gUseR == '6'){
echo '<div class="topic_post admin_post" id="post-'.$id.'">
<div class="officer_post_logo_hh"></div>
';}
if ($gUseR == '5'){
echo '<div class="topic_post admin_post" id="post-'.$id.'">
<div class="officer_post_logo_hh"></div>
';}
if ($gUseR == '4'){
echo '<div class="topic_post admin_post" id="post-'.$id.'">
<div class="officer_post_logo_hh"></div>
';}
if ($gUseR == '3'){
echo '<div class="topic_post admin_post" id="post-'.$id.'">
<div class="officer_post_logo_hh"></div>
';}
if ($gUseR == '2'){
echo '<div class="topic_post" id="post-'.$id.'">
';}
echo'
<!--<div class="topic_post admin_post" id="post-'.$id.'">-->
<!--<div class="admin_post_logo_hh"></div>-->
<div class="left_side">	
<div class="user_avatar"><span style="background:url(assets/images/avatar/'.$gbAvA.') no-repeat; background-size: 100%;">
</span></div>
<div class="user_info">
<div class="usr_and_pr">
<a class="username">'.$gBtaG.'</a>
</div>
';
if ($gUseR == '6'){
echo '<h3 style="color: #00B4FF;">Developer</h3>
';}
if ($gUseR == '5'){
echo '<h3 style="color: #ff8000;">Guild Master</h3>
';}
if ($gUseR == '4'){
echo '<h3 style="color: #81B558;">Officer</h3>
';}
if ($gUseR == '3'){
echo '<h3 style="color: #a335ee;">Raider</h3>
';}
if ($gUseR == '2'){
echo '<h3>Member</h3>
';}
echo'
AVG Rating: <a>'.@$average.'</a>
</div>
</div>
<div class="right_side">
';
if ($gUseR == '6'){
echo '<div class="post_container" style="color: #00B4FF;">
'.$aquaglztent.'
</div>
';}
if ($gUseR == '5'){
echo '<div class="post_container" style="color: #ff8000;">
'.$aquaglztent.'
</div>
';}
if ($gUseR == '4'){
echo '<div class="post_container" style="color: #81B558;">
'.$aquaglztent.'
</div>
';}
if ($gUseR == '3'){
echo '<div class="post_container" style="color: #a335ee;">
'.$aquaglztent.'
</div>
';}
if ($gUseR == '2'){
echo '<div class="post_container">
'.$aquaglztent.'
</div>
';}
echo'
<ul class="post_controls">
<li class="post_date">'.@$date.'</li>';
if ( in_array($rank_check , array('4', '5', '6')) ) {
echo '<li><a class="report" href="#" title="Edit">Edit</a></li><li><a class="quote post-quote-button" data-post-id="'.$id.'" href="rmv_topic.php?rid='.$id.'" title="Delete">Delete</a></li>
';}
else{
if ($author == $user_check){
echo '<li><a class="report" href="#" title="Edit">Edit</a></li><li><a class="quote post-quote-button" data-post-id="'.$id.'" href="rmv_topic.php?rid='.$id.'" title="Delete">Delete</a></li>
';}
}
echo'
</ul>
</div>
<div class="clear"></div>
</div>';
}}
?>
<!-- Replies Post -->
<?php
$qu = mysqli_query($aquaglz, "SELECT * FROM `replies` WHERE `threadID`='$id'");
if (mysqli_num_rows($qu) > 0) {
while ($row = mysqli_fetch_array($qu)) {
$reply_author = $row["author"];
$qer = mysqli_query($aquaglz, "SELECT * FROM `users` WHERE `email`='$reply_author'");
if (mysqli_num_rows($qer) > 0) {
while ($rowg = mysqli_fetch_array($qer)) {
$gBta = $rowg['bTag'];
$gbAv = $rowg['avatar'];
$gRank = $rowg['rank'];
if ($gRank == '6'){
echo '<div class="topic_post admin_post" id="post-'.$row["id"].'">
<div class="officer_post_logo_hh"></div>
';}
if ($gRank == '5'){
echo '<div class="topic_post admin_post" id="post-'.$row["id"].'">
<div class="officer_post_logo_hh"></div>
';}
if ($gRank == '4'){
echo '<div class="topic_post admin_post" id="post-'.$row["id"].'">
<div class="officer_post_logo_hh"></div>
';}
if ($gRank == '3'){
echo '<div class="topic_post admin_post" id="post-'.$row["id"].'">
<div class="officer_post_logo_hh"></div>
';}
if ($gRank == '2'){
echo '<div class="topic_post" id="post-'.$row["id"].'">
';}
echo'
<!--<div class="topic_post admin_post" id="post-'.$row["id"].'">-->
<!--<div class="admin_post_logo_hh"></div>-->
<div class="left_side">	
<div class="user_avatar"><span style="background:url(assets/images/avatar/'.$gbAv.') no-repeat; background-size: 100%;">
</span></div>
<div class="user_info">
<div class="usr_and_pr">
<a class="username"><small>'.$gBta.'</small></a>
</div>
';
if ($gRank == '6'){
echo '<h3 style="color: #00B4FF;">Developer</h3>
';}
if ($gRank == '5'){
echo '<h3 style="color: #ff8000;">Guild Master</h3>
';}
if ($gRank == '4'){
echo '<h3 style="color: #81B558;">Officer</h3>
';}
if ($gRank == '3'){
echo '<h3 style="color: #a335ee;">Raider</h3>
';}
if ($gRank == '2'){
echo '<h3>Member</h3>
';}
echo'
</div>
</div>
<div class="right_side">
';
if ($gRank == '6'){
echo '<div class="post_container" style="color: #00B4FF;">
'.$row["content"].'
</div>
';}
if ($gRank == '5'){
echo '<div class="post_container" style="color: #ff8000;">
'.$row["content"].'
</div>
';}
if ($gRank == '4'){
echo '<div class="post_container" style="color: #81B558;">
'.$row["content"].'
</div>
';}
if ($gRank == '3'){
echo '<div class="post_container" style="color: #a335ee;">
'.$row["content"].'
</div>
';}
if ($gRank == '2'){
echo '<div class="post_container">
'.$row["content"].'
</div>
';}
echo'
<ul class="post_controls">
<li class="post_date">'.@$date.'</li>';
if ( in_array($rank_check, array(4, 5, 6)) ) {
echo '<li><a class="report" href="edit-reply.php?edid='.$row['id'].'" title="Edit">Edit</a></li><li><a class="quote post-quote-button" data-post-id="'.$row['id'].'" href="rmv_replies.php?rid='.$row['id'].'" title="Delete">Delete</a></li>
';
}else{
if ($reply_author == $user_check){
echo '<li><a class="report" href="edit-reply.php?edid='.$row['id'].'" title="Edit">Edit</a></li><li><a class="quote post-quote-button" data-post-id="'.$row['id'].'" href="rmv_replies.php?rid='.$row['id'].'" title="Delete">Delete</a></li>
';}
}
echo'
</ul>
</div>
<div class="clear"></div>
</div>
';
}
}
}
}}}
?>
<!-- Actions -->
<div class="actions_c bottom"></div>
<br><br><br>
</div>
</div>
<div class="container_ main-wide">
<?php
if ($recrs = $aquaglz->query("SELECT * FROM replies WHERE `threadID`=$tid")){
/* determine number of rows result set */
$row_cnt = $recrs->num_rows;
$emails = $_SESSION['email'];
echo "
<div id='bottom' class='forum-padding'>
<div class='topic_header'>
<div class='topic_title'>
<h1>Leave a Reply</h1>
<h3>You will reply with your BattleTag (Your Specific Code e.g. #0000 is not posted, you can relax).</h3>
</div>
<h4><b>$row_cnt</b> Reply(s)</h4>
</div>
<div class='quick_reply topic_post'>
<form "; echo 'threadPage.php?tid='.$_GET['tid']; echo " method='POST'>
<h2>Quick Reply</h2>
<textarea id='quick_reply_textarea' name='cont'></textarea>
<input type='submit' value='Post Reply' name='replySent'>
<a class='forum_btn_large advanced_post' id='go-advanced-post'>Advanced post</a>
</form>
</div>
</div>
";
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