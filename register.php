<?php
$page_tit = "reg";
session_start();
include __DIR__ . '/configs.php';
$msg = "";
if(isset($_POST["submit"]))
{
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$bTag = $_POST["bTag"];
$email = $_POST["email"];
$password = $_POST["password"];
$fname = mysqli_real_escape_string($aquaglz, $fname);
$lname = mysqli_real_escape_string($aquaglz, $lname);
$bTag = mysqli_real_escape_string($aquaglz, $bTag);
$email = mysqli_real_escape_string($aquaglz, $email);
$password = mysqli_real_escape_string($aquaglz, $password);
$password = md5($password);
$sql="SELECT email FROM users WHERE email='$email'";
$result=mysqli_query($aquaglz,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if(mysqli_num_rows($result) == 1)
{
echo" <meta http-equiv='refresh'content='0; url=failed.php'>";
}
else
{
$query = mysqli_query($aquaglz, "INSERT INTO users (uid, email, bTag, password, firstname, lastname, rank, avatar, g_points, creep_points, saint_points, signup_date)VALUES ('', '$email', '$bTag', '$password', '$fname', '$lname', '0', 'profile.gif', '1', '0', '0', NOW())");
if($query)
{
echo" <meta http-equiv='refresh'content='0; url=success.php'>";
}
}
}
?>
<?php
$user_check=@$_SESSION['email'];
$ses_sql = mysqli_query($aquaglz,"SELECT email FROM users WHERE email='$user_check' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_user=$row['email'];
if ((isset($_SESSION['email']) != '')) 
	{
		header('Location: logged.php');
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
<div class="next form-group bTag">
<input id="" type="text" name="" placeholder="#0000" class="form-control" disabled>
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
<button type="submit" name="submit" class="btn btn-dark btn-block btn-login">Sign Up</button>
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