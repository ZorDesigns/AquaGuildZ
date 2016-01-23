<?php
if ((isset($_SESSION['email']) != '')) 
{
echo"<meta http-equiv='refresh'content='2;url=index.php'>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>AquaGuildZ | Hey!</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
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
<video loop muted autoplay poster="assets/images/frame.png" id="bgvid">
<source src="assets/images/wod.webm" type="video/webm">
<source src="assets/images/wod.mp4" type="video/mp4">
</video>
</div>
<!--SECTION-->
<section class="l-main-container">
<!--Main Content-->
<div class="login-wrapper">
<div class="login-container">
<!--Logo-->
<h1 class="login-logo"><img src="admin/img/logo.png"></h1>
<p class="tac"> Hey! You are already logged and registered!</p>
<br>
<!--Form-->
<form id="lockScreenForm" role="form" action="index.php" class="login-form">
<meta http-equiv='refresh'content='2;url=index.php'>
<button type="submit" class="btn btn-dark btn-block btn-login">Go Home</button>
</form>
<div class="login-options"></div>
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
<script src="admin/js/calls/page.lockscreen.js"></script>
</body>
</html>