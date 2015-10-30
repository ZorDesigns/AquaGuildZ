<?php
$page_cat = "forums";
$page_tit = "forums";
include ('settings/forum.php');
include("check.php");
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
<?php include("webkit/warning"); ?>
<div class="container main-wide">
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
<a class="forum_btn_large">Reply Topic</a>
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
echo '<!-- Forum Header -->
<div class="topic_header">
<div class="topic_title">
<h1>'.$title.'</h1>
<h3>Mon Oct 26, 2015, 02:44 AM</h3>
</div>
<h4><b>2</b> Post(s)</h4>
</div>	
<div class="topic_post" id="post-'.$id.'">
<!--<div class="topic_post admin_post" id="post-'.$id.'">-->
<!--<div class="admin_post_logo_hh"></div>-->
<div class="left_side">	
<div class="user_avatar"><span style="background:url(admin/img/profile/lady.gif) no-repeat; background-size: 100%;">
</span></div>
<div class="user_info">
<div class="usr_and_pr">
<a class="username">'.$author.'</a>
</div>
<h3>Member</h3>
AVG Rating: <a>'.@$average.'</a>
</div>
</div>
<div class="right_side">
<div class="post_container">
'.$aquaglztent.'
</div>
<ul class="post_controls">
<li class="post_date">'.$date.'</li><li><a class="report" href="#" title="Rate">Rate</a></li><li><a class="quote post-quote-button" data-post-id="'.$id.'" href="#" title="Quote">Quote</a></li>
</ul>
</div>
<div class="clear"></div>
</div>';?>
<!-- Topic Post -->
<?php 
$qu = mysqli_query($aquaglz, "SELECT * FROM `replies` WHERE `threadID`='$id'");
if (mysqli_num_rows($qu) > 0) {
while ($row = mysqli_fetch_array($qu)) {
echo '
<div class="topic_post" id="post-'.$row["id"].'">
<!--<div class="topic_post admin_post" id="post-'.$row["id"].'">-->
<!--<div class="admin_post_logo_hh"></div>-->
<div class="left_side">	
<div class="user_avatar"><span style="background:url(admin/img/profile/profile.gif) no-repeat; background-size: 100%;">
</span></div>
<div class="user_info">
<div class="usr_and_pr">
<a class="username"><small>'.$row["author"].'</small></a>
</div>
<h3>Member</h3>
</div>
</div>
<div class="right_side">
<div class="post_container">
'.$row["content"].'
</div>
<ul class="post_controls">
<li class="post_date">'.$row["date"].'</li><li><a class="report" href="#" title="Rate">Rate</a></li><li><a class="quote post-quote-button" data-post-id="'.$row["id"].'" href="#" title="Quote">Quote</a></li>
</ul>
</div>
<div class="clear"></div>
</div>
';
}
}
?>
<!-- Actions -->
<div class="actions_c bottom"></div>
<br><br><br>
</div>
</div>
<div class="container main-wide">
<?php 
echo "
<div class='forum-padding'>
<div class='topic_header'>
<div class='topic_title'>
<h1>Leave a Reply</h1>
<h3>Reply as: $email</h3>
</div>
<h4><b>2</b> Reply(s)</h4>
</div>
<div class='quick_reply topic_post'>
<form "; echo 'threadPage.php?tid='.$_GET['tid']; echo " method='POST'>
<h2>Quick Reply</h2>
<textarea id='quick_reply_textarea' name='cont'></textarea>
<input type='submit' value='Post' name='replySent'>
<a class='forum_btn_large advanced_post' id='go-advanced-post'>Advanced post</a>
</form>
</div>
</div>
";
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
</body>
</html>