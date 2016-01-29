<?php
$page_cat = "chnava";
$page_tit = "chnava";
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
<link href="assets/stylesheets/form/reg.css" rel="stylesheet" type="text/css">
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
<div class="sitehead-account">
<h1>Account Panel > Upload Avatar</h1>
</div>
<div class="container_form_1 container_fix_ava avatar-fix" align="center">
<div class="warning_notice">
<p>Follow the rules for uploading correspondingly!</p>
</div>
<?php
$target_dir = "assets/images/avatar/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1500000) {
    echo '<div class="warning_notice">
<p>Your file is too big! Find a way to make is smaller in KB size. Max File allowed: 1.5MB!</p>
</div>';
    $uploadOk = 1;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
echo '<div class="warning_notice">
<p>Your file type is wrong! Only JPG, JPEG, PNG & GIF files are allowed! Sorry...</p>
</div>';
    $uploadOk = 1;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
echo '<div class="warning_notice">
<p>Sorry... file was not uploaded. File was not updated in the Database.</p>
</div>';
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
echo '<div class="warning_notice">
<p>Your avatar with name: '.basename( $_FILES["fileToUpload"]["name"]).' has been uploaded successfully!</p>
</div>';
$image = basename( $_FILES["fileToUpload"]["name"]);
$sql = "UPDATE users SET avatar='$image' WHERE `email`='$user_check';";
if ($aquaglz->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('Your Avatar has been updated!');</script>";
}
}
}
?>
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
<div class="page-title">Change Avatar</div>
<a href="account.php">Back to account</a>
</div>
</div>
<div class="container_cha pass-bg account-wide" align="center">
<p style="padding: 20px;">
</p>
<form action="change-avatar.php" method="post" enctype="multipart/form-data">
<div class="page-desc-holder">
Your new Avatar will take place immediately. Be careful and don't do mistakes.
</div>
<div class="row_ps">
<label for="newAvatar">New Avatar: </label>
<input class="simple_button fix-upl-avatar" type="file" name="fileToUpload" id="fileToUpload">
</div>
<div class="page-desc-holder">
Are you sure you want to apply all the new changes? If yes, please submit your changes!
</div>
<br>
<div class="row_ps">
<input style="left:-18px;" type="submit" value="Upload Image" name="submit">
</div>
<br>
<br>
<br>
</form>
<p></p>                        
</div>

</div>
</div>
<?php include("webkit/sidelogin"); ?>
</div>
</div>
<?php include("webkit/footer"); ?>
</div>
</body>
</html>