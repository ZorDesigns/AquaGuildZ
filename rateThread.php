<?php
include __DIR__ . '/configs.php';
session_start();
if (isSet($_GET['tid']) && isSet($_GET['rating'])) {
$id = $_GET['tid'];
$rating = $_GET['rating'];
if ($rating > 5)
$rating = 5;
if ($rating < 1)
$rating = 1;
$qu = mysqli_query($aquaglz, "SELECT * FROM `threads` WHERE `id`='$id'") or die(mysql_error());
if (mysqli_num_rows($qu) > 0) {
$info = mysqli_fetch_array($qu) or die(mysql_error());
$newRatings = $info['totalRatings']+1;
$newTotal = $info['rating']+$rating;
$q = mysqli_query($aquaglz, "UPDATE `threads` SET `rating`='$newTotal', `totalRatings`='$newRatings' WHERE `id`='$id'") or die(mysql_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hellenic Horde | Ratings</title>
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
<link href="assets/stylesheets/forums.css" rel="stylesheet" type="text/css">
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
<div class="lock-screen-image"><img src="admin/img/profile/profile.gif" alt="Profile"></div>
<?php 
if ($q) {
echo '
<p class="tac"><center><a href="#" class="important_succ"><p>Rating has been updated</p></a></center></p>
<p class="tac">Thanks for rating!</p>';
}else
echo '
<p class="tac"><center><a href="#" class="important_warnb"><p>Failed to Rate</p></a></center></p>
<p class="tac">Thanks for trying!</p>';
}
}else
echo '
<p class="tac"><center><a href="#" class="important_notice"><p>Something went wrong</p></a></center></p>
<p class="tac">Please contact the Administrator!</p>';
?>

<!--Form-->
<form id="lockScreenForm" role="form" action="forums.php" class="login-form">
<meta http-equiv='refresh'content='2;url=forums.php'>
<button type="submit" class="btn btn-dark btn-block btn-login">Continue</button>
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