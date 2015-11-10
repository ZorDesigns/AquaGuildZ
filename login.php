<?php
$page_tit = "login";
session_start();
include __DIR__ . '/configs.php'; //Establishing connection with our database
$error = ""; //Variable for storing our errors.
if(isset($_POST["submit"]))
{
if(empty($_POST["email"]) || empty($_POST["password"]))
{
$error = "Both fields are required.";
}else
{
// Define $email and $password
$email=$_POST['email'];
$password=$_POST['password'];
// To protect from MySQL injection
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($aquaglz,$email);
$password = mysqli_real_escape_string($aquaglz,$password);
$password = md5($password);
//Check email and password from database
$sql="SELECT uid FROM users WHERE email='$email' and password='$password'";
$result=mysqli_query($aquaglz,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
//If email and password exist in our database then create a session.
//Otherwise echo error.
if(mysqli_num_rows($result) == 1)
{
$_SESSION['email'] = $email; // Initializing Session
header("location: logsucc.php"); // Redirecting To Other Page
}else
{
$error = "Incorrect email or password.";
}
}
}
?>
<?php
if ((isset($_SESSION['email']) != '')) 
{
header('Location: logsucc.php');
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
<div class="fullscreen-bg">
<video loop="" muted="" autoplay="" poster="assets/images/frame.png" class="fullscreen-bg__video">
<source src="http://media.blizzard.com/wow/legion-6a153ad2/videos/demon-hunters.webm" type="video/webm">
<source src="http://media.blizzard.com/wow/legion-6a153ad2/videos/demon-hunters.mp4" type="video/mp4">
</video>
</div>
<!--SECTION-->
<section class="l-main-container">
<!--Main Content-->
<div class="login-wrapper">
<div class="login-container">
<!--Logo-->
<h1 class="login-logo"><img src="admin/img/logo.png"></h1>
<!--Login Form-->
<form id="loginForm" role="form" method="post" action="" class="login-form">
<div class="error"><?php echo $error;?></div>
<div class="form-group">
<input id="loginEmail" type="text" name="email" placeholder="Email" class="form-control">
</div>
<div class="form-group">
<input id="loginPassword" type="password" name="password" placeholder="Password" class="form-control">
</div>
<button type="submit" name="submit" class="btn btn-dark btn-block btn-login">Sign In</button>
<div class="login-social">
<div class="l-span-md-12">
<div class="or"><span>- OR -</span></div>
</div>
<div class="l-col-sm-6"><a href="#" class="btn btn-facebook btn-block"><i class="fa fa-facebook"></i>Sign with Facebook - Disabled</a></div>
<div class="l-col-sm-6"><a class="btn btn-bnet btn-block"><img src="admin/img/plugins/battlenet.png">  Sign with Battle.Net - Disabled</a></div>
</div>
<div class="login-options"><a href="page-forgot-password.html" class="fl">FORGOT PASSWORD ?</a><a href="register.php" class="fr">REGISTER AN ACCOUNT</a></div>
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
<script src="admin/js/plugins/forms/validation/jquery.validate.min.js"></script>
<script src="admin/js/plugins/forms/validation/jquery.validate.additional.min.js"></script>
<script src="admin/js/calls/page.login.js"></script>
</body>
</html>