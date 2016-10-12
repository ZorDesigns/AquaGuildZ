<?php
$page_tit = "reg";
session_start();
if (isset($_SESSION['userSession'])!=""){
header("Location: index.php");
}
require_once 'configs.php';
if(isset($_POST['btn-signup'])) {
$fname = strip_tags($_POST['fname']);
$lname = strip_tags($_POST['lname']);
$bTag = strip_tags($_POST['bTag']);
$email = strip_tags($_POST['email']);
$password = strip_tags($_POST['password']);
$fname = $aquaglz->real_escape_string($fname);
$lname = $aquaglz->real_escape_string($lname);
$bTag = $aquaglz->real_escape_string($bTag);
$email = $aquaglz->real_escape_string($email);
$password = $aquaglz->real_escape_string($password);
$hpassword = md5($password);
$check_email = $aquaglz->query("SELECT email FROM users WHERE email='$email'");
$count=$check_email->num_rows;
if ($count==0) {
$query = "INSERT INTO users (email, bTag, password, firstname, lastname, rank, avatar, g_points, creep_points, saint_points, signup_date)VALUES('$email', '$bTag', '$hpassword', '$fname', '$lname', '0', 'profile.gif', '1', '0', '0', NOW())";
if ($aquaglz->query($query)) {
$msg = "<div class='alert alert-success'>
<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Successfully registered!
<meta http-equiv='refresh'content='1; url=success.php'>
</div>";
}else {
$msg = "<div class='alert alert-danger'>
<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while registering!
</div>";
}
}else{
$msg = "<div class='alert alert-danger'>
<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Sorry email already taken!
</div>";
}
$aquaglz->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('webkit/meta'); ?>
<!-- ===== FAVICON =====-->
<link rel="shortcut icon" href="admin/img/favicon.png">
<!-- ===== CSS =====-->
<!-- General-->
<link rel="stylesheet" href="admin/css/basic.css">
<link rel="stylesheet" href="admin/css/general.css">
<link rel="stylesheet" href="admin/css/theme.css" class="style-theme">
<link rel="stylesheet" href="admin/css/background.css">
</head>
<body class="login-bg">
<?php include("settings/googletracking.php") ?>
<video loop muted autoplay poster="assets/images/frame.png" id="bgvid">
<source src="assets/images/wod.webm" type="video/webm">
<source src="assets/images/wod.mp4" type="video/mp4">
</video>
<!--[if lt IE 9]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--SECTION-->
<section class="l-main-container">
<!--Main Content-->
<div class="login-wrapper register-wrapper">
<div class="login-container">
<!--Logo-->
<h1 class="login-logo"><img src="admin/img/logo.png"></h1>
<!--Login Form-->
<?php
  if (isset($msg)) {
   echo $msg;
  }
  ?>
<form id="registerForm" role="form" method="post" action="" class="login-form">
<div class="form-group">
<input id="fname" type="text" name="fname" placeholder="First Name" class="form-control">
</div>
<div class="form-group">
<input id="lname" type="text" name="lname" placeholder="Last Name" class="form-control">
</div>
<div class="form-group bTag">
<input id="bTag" type="text" name="bTag" placeholder="BattleTag" class="form-control">
</div>
<div class="form-group">
<input id="email" type="email" name="email" placeholder="Email" class="form-control">
</div>
<div class="form-group">
<input id="registerPassword" type="password" name="password" placeholder="Password" class="form-control">
</div>
<div class="form-group">
<input id="registerPasswordRepeat" type="password" name="registerPasswordRepeat" placeholder="Repeat password" class="form-control">
</div>
<div class="checkbox">
<input id="registerTerms" type="checkbox" name="registerTerms" class="checkradios checkradiosDark-1">By signing up you are accepting our <a href="#">Terms and Conditions</a>
</div>
<button type="submit" name="btn-signup" class="btn btn-dark btn-block btn-login">Sign Up</button>
</form>  
</div>
</div>
</section>
<!-- ===== JS =====-->
<!-- jQuery-->
<script src="admin/js/basic/jquery.min.js"></script>
<script src="admin/js/basic/jquery-migrate.min.js"></script>
<!-- General-->
<script src="admin/js/basic/modernizr.min.js"></script>
<script src="admin/js/basic/bootstrap.min.js"></script>
<script src="admin/js/shared/jquery.asonWidget.js"></script>
<script src="admin/js/plugins/plugins.js"></script>
<script src="admin/js/general.js"></script>
<!-- Semi general-->
<script type="text/javascript">
var paceSemiGeneral = { restartOnPushState: false };
if (typeof paceSpecific != 'undefined'){
	var paceOptions = $.extend( {}, paceSemiGeneral, paceSpecific );
	paceOptions = paceOptions;
}else{
	paceOptions = paceSemiGeneral;
}

</script>
<script src="admin/js/plugins/pageprogressbar/pace.min.js"></script>
<!-- Specific-->
<script src="admin/js/plugins/forms/elements/jquery.checkradios.min.js"></script>
<script src="admin/js/plugins/forms/validation/jquery.validate.min.js"></script>
<script src="admin/js/plugins/forms/validation/jquery.validate.additional.min.js"></script>
<script src="admin/js/calls/page.register.js"></script>
</body>
</html>