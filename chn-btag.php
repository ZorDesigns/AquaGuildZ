<?php
$page_cat = "none";
$page_tit = "none";
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
<h1>Account Panel > Change BattleTag / Nickname</h1>
</div>
<div class="container_form_1 fix_container_pass" align="center">
<div class="warning_notice fix_volume">
<p>Your Nickname / BTag changes immediately without notice when you accept the changes.</p>
</div>
<?php
$qer = mysqli_query($aquaglz, "SELECT * FROM `users` WHERE `email`='$user_check'");
if (mysqli_num_rows($qer) > 0) {
while ($recr = mysqli_fetch_array($qer)) {
$rank = $recr['rank'];
echo'
<div class="panel panel-default margin-5 pane-bg">
<div class="panel-heading">
<div class="community-title">
<div class="tit op_player">'.$recr['bTag'].'</div>
';
if ($rank == '0'){
echo'
<small>Unverified</small>';}
if ($rank == '1'){
echo'
<small>Social</small>';}
if ($rank == '2'){
echo'
<small>Member</small>';}
if ($rank == '3'){
echo'
<small>Raider</small>';}
if ($rank == '4'){
echo'
<small>Officer</small>';}
if ($rank == '5'){
echo'
<small>Guild Master</small>';}
if ($rank == '6'){
echo'
<small>Developer</small>';}
echo'
</div>
</div>
<ul class="recr_class fix-ava">
<li id="class"><span style="background:url(assets/images/avatar/'.$recr['avatar'].') no-repeat; background-size: 100%; position:static;"></span><p></p></li>
<li id="change_avatar"><a href="#" class="fix-lett-ava"></a></li>
</ul>
<table class="table table-stripped"><tbody>
<tr>
<td style="width:40%;">Rank</td>
';
if ($rank == '0'){
echo'
<td><span class="op_player">Unverified</span></td>';}
if ($rank == '1'){
echo'
<td><span class="op_player">Social</span></td>';}
if ($rank == '2'){
echo'
<td><span class="op_player">Member</span></td>';}
if ($rank == '3'){
echo'
<td><span class="op_player">Raider</span></td>';}
if ($rank == '4'){
echo'
<td><span class="op_player">Officer</span></td>';}
if ($rank == '5'){
echo'
<td><span class="op_player">Guild Master</span></td>';}
if ($rank == '6'){
echo'
<td><span class="op_player">Developer</span></td>';}
echo'
</tr>
<tr>
<td data-speak="com_user_messages">Achievements</td>
<td><span>0</span></td>
</tr>
<tr>
<td data-speak="com_user_likes">Greedy Points</td>
<td><span>0</span></td>
</tr>
<tr>
<td>Member Since</td>
<td>'.$recr['signup_date'].'</td>
</tr>
</tbody>
</table>
</div>
';
}
}
?>
<div class="container_3 account-bg account_sub_header">
<div class="grad">
<div class="page-title">Change Nickname / BTag</div>
<a href="account.php">Back to account</a>
</div>
</div>
<div class="container_cha pass-bg account-wide" align="center">
<p style="padding: 20px;">
</p>
<form action="" method="post">
<div class="page-desc-holder">
Your new Nickname / BTag will take place immediately. Be careful and don't do mistakes.
</div>
<div class="row_ps">
<label for="newPassword">New Nickname: </label>
<input type="text" name="nickname">
</div>
<div class="page-desc-holder">
Are you sure you want to apply all the new changes? If yes, please submit your changes!
</div>
<br>
<div class="row_ps">
<input style="left:-18px;" name="chngnick" type="submit" value="Change">
</div>
<br>
<br>
<br>
</form>
<p></p>                        
</div>
<?php
if(isset($_POST["chngnick"])){
$sql = "UPDATE users SET password='".$_POST["nickname"]."' WHERE `email`='".$user_check."';";
if ($aquaglz->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('Your Nickname has been changed! Please wait while we redirect you!');</script>";
echo "<meta http-equiv='refresh'content='2;url=account.php'>";
echo $sql;
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $aquaglz->error."');</script>";
echo "<meta http-equiv='refresh'content='2;url=chn-pass.php'>";
echo $sql;
}
}
?>
</div>
</div>
<?php include("webkit/sidelogin"); ?>
</div>
</div>
<?php include("webkit/footer"); ?>
</div>
</body>
</html>