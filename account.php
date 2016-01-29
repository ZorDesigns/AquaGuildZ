<?php
$page_cat = "account";
$page_tit = "account";
?>
<!DOCTYPE html>
<html>
<head>
<?php include ('webkit/meta'); ?>
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
<!-- Main Content Add here -->
<div class="sitehead-account">
<h1>Account Panel</h1>
</div>
<div class="container_form_1" align="center">
<?php
$qer = mysqli_query($aquaglz, "SELECT * FROM `users` WHERE `email`='$user_check'");
if (mysqli_num_rows($qer) > 0) {
while ($recr = mysqli_fetch_array($qer)) {
$rank = $recr['rank'];
echo'
<div id="user_card" class="bg_cata">
<div class="left">
<ul class="recr_class">
<li id="class"><span style="background:url(assets/images/avatar/'.$recr['avatar'].') no-repeat; background-size: 100%; position:static;"></span><p></p></li>
<li id="change_avatar"><a href="change-avatar.php">Change your Avatar</a></li>
</ul>
</div>
<div class="right">
<ul style="line-height: 17px;">
<li class="lab">BattleNet</li>
<li class="data f_name" id="name">'.$recr['bTag'].'</li>
<li class="lab" data-speak="gen_rank">Rank</li>
';
if ($rank == '0'){
echo'
<li class="data" id="rank"><span> Unverified</span></li>';}
if ($rank == '1'){
echo'
<li class="data" id="rank"><span> Social</span></li>';}
if ($rank == '2'){
echo'
<li class="data" id="rank"><span> Member</span></li>';}
if ($rank == '3'){
echo'
<li class="data" id="rank"><span> Raider</span></li>';}
if ($rank == '4'){
echo'
<li class="data" id="rank"><span> Officer</span></li>';}
if ($rank == '5'){
echo'
<li class="data" id="rank"><span> Guild Master</span></li>';}
if ($rank == '6'){
echo'
<li class="data" id="rank"><span> Developer</span></li>';}
echo'
<li class="lab">First Name</li>
<li class="data">'.$recr['firstname'].'</li>
<li class="lab">Last Name</li>
<li class="data">'.$recr['lastname'].'</li>
<li class="lab">E-Mail</li>
<li class="data" id="email">'.$recr['email'].'</li>
<li class="lab" data-speak="gen_register_date">Date of registration</li>
<li class="data" id="date">'.$recr['signup_date'].'</li>
<li class="lab" id="punish_from">
</li>
</ul>
</div>
</div>
';
}
}
?>
<div id="user-right" class="bg_cata">
<div class="points margin0 row" data-points="">
<div class="col-xs-8">
<span class="point support">0</span><br><span class="pt_txt">CMS Points</span>
</div>
<div class="col-xs-8">
<span class="point vote">0</span><br><span class="pt_txt">Creeper Points</span>
</div>
<div class="col-xs-8">
<span class="point saint">0</span><br><span class="pt_txt">Saint Points</span>
</div>
</div>
<a href="#" class="msg_pm active">
<div class="achievements"></div>
<div class="msg_txt" data-speak="panel_pm_info">You have <b id="pm_count">0</b> achievement(s).<br><span>Be active on the Site and you will be awarded!</span>
</div>
</a>
<nav class="accountnav"><div class="row">
<div class="col-xs-12">
<ul>
<li>
<a href="change-avatar.php">Change Avatar</a>
</li>
<li>
<a href="chn-pass.php">Change password</a>
</li>
<li>
<a href="#">Change email</a>
</li>
</ul>
</div>
<div class="col-xs-12">
<ul>
<li>
<a href="#">
What is Gold
</a>
</li>
<li>
<a href="#">
Become Gold
</a>
</li>
<li>
<a href="#">
<span>Gold Shop</span>
</a>
</li>
</ul>
</div>
</div>
</nav> 
</div>

<br>
<br>
<br>
MORE COMING SOON!

</div>
</div>
<?php include("webkit/sidelogin"); ?>
</div>
</div>
<?php include("webkit/footer"); ?>
</div>
</body>
</html>