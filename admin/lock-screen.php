<?php	
include("../check.php");
if($login_rank <= 2)
{
die('
<meta http-equiv="refresh" content="2;url=wrong.php"/>
');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>AquaGuildZ | Lock Screen</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<!-- ===== FAVICON =====-->
<link rel="shortcut icon" href="img/favicon.png">
<!-- ===== CSS =====-->
<!-- General-->
<link rel="stylesheet" href="css/basic.css">
<link rel="stylesheet" href="css/general.css">
<link rel="stylesheet" href="css/theme.css" class="style-theme">
<link rel="stylesheet" href="css/background.css">
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
<h1 class="login-logo"><img src="img/logo.png"></h1>
<div class="lock-screen-image"><img src="img/profile/profile.gif" alt="Profile"></div>
<p class="tac"> Please enter your password to unlock the screen!</p>
<!--Form-->
<form id="lockScreenForm" role="form" action="#" class="login-form">
<div class="form-group">
<input id="lockScreenPassword" type="password" name="lockScreenPassword" placeholder="Password" class="form-control">
</div>
<button type="submit" class="btn btn-dark btn-block btn-login">Log In</button>
</form>
<div class="login-options"></div>
</div>
</div>
</section>
<!-- ===== JS =====-->
<!-- jQuery-->
<script src="js/basic/jquery.min.js"></script>
<script src="js/basic/jquery-migrate.min.js"></script>
<!-- General-->
<script src="js/basic/modernizr.min.js"></script>
<script src="js/basic/bootstrap.min.js"></script>
<script src="js/shared/jquery.asonWidget.js"></script>
<script src="js/plugins/plugins.js"></script>
<script src="js/general.js"></script>
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
<script src="js/plugins/pageprogressbar/pace.min.js"></script>
<!-- Specific-->
<script src="js/plugins/forms/validation/jquery.validate.min.js"></script>
<script src="js/plugins/forms/validation/jquery.validate.additional.min.js"></script>
<script src="js/calls/page.lockscreen.js"></script>
</body>
</html>