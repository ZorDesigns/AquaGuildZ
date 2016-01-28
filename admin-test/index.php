<?php 
$page_cat = "home";
$page_tit = "home";
include('../check.php');
if($login_rank < 4)
{
die('
<meta http-equiv="refresh" content="2;url=wrong.php"/>
');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<title></title>
<link rel="stylesheet" href="lib/Hover/hover.css">
<link rel="stylesheet" href="lib/fontawesome/css/font-awesome.css">
<link rel="stylesheet" href="lib/weather-icons/css/weather-icons.css">
<link rel="stylesheet" href="lib/ionicons/css/ionicons.css">
<link rel="stylesheet" href="lib/jquery-toggles/toggles-full.css">
<link rel="stylesheet" href="lib/morrisjs/morris.css">
<link rel="stylesheet" href="css/main.css">
<script src="lib/modernizr/modernizr.js"></script>
</head>
<body>
<header>
<div class="headerpanel">
<div class="logopanel">
<img style="height: 58px;margin: -16px 0px 0px -17px;" src="images/logo.png" alt="AquaGuildZ">
</div>
<div class="headerbar">
<a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
<div class="searchpanel">
<div class="input-group">
<input type="text" class="form-control" placeholder="Search disabled...">
<span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
</span>
</div><!-- input-group -->
</div>

<div class="header-right">
<ul class="headermenu">
<li>

<!-- Nav tabs -->
<?php //include("webkit/not-tabs.less"); ?>
<!-- Tab panes -->
<div class="tab-content">
<?php //include("webkit/notifications.less"); ?>
<?php //include("webkit/tab-reminders.less"); ?>
</div>
</li>
<li>
<div class="btn-group">
<button type="button" class="btn btn-logged" data-toggle="dropdown">
<img src="../assets/images/avatar/<?php echo $row['avatar']; ?>" alt="" />
<?php echo $row['firstname']; ?>
<span class="caret"></span>
</button>
<ul class="dropdown-menu pull-right">
<li><a href="#"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
<li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
<li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
<li><a href="#"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
</ul>
</div>
</li>
</ul>
</div><!-- header-right -->
</div><!-- headerbar -->
</div><!-- header-->
</header>
<section>
<div class="leftpanel">
<div class="leftpanelinner">
<?php include("webkit/prof-side.less"); ?>
<?php include("webkit/panels-side.less"); ?>
<div class="tab-content">
<?php include("webkit/navigation.less"); ?>
<?php include("webkit/mail.less"); ?>
<?php include("webkit/rankusers.less"); ?>
<?php include("webkit/settings.less"); ?>
</div>
</div>
</div>
<div class="mainpanel">
<div class="contentpanel">
<div class="row">
<?php include("webkit/left-index.less"); ?>
<?php include("webkit/right-index.less"); ?>
</div>
</div>
</div>
</section>
<script src="lib/jquery/jquery.js"></script>
<script src="lib/jquery-ui/jquery-ui.js"></script>
<script src="lib/bootstrap/js/bootstrap.js"></script>
<script src="lib/jquery-toggles/toggles.js"></script>
<script src="lib/morrisjs/morris.js"></script>
<script src="lib/raphael/raphael.js"></script>
<script src="lib/flot/jquery.flot.js"></script>
<script src="lib/flot/jquery.flot.resize.js"></script>
<script src="lib/flot-spline/jquery.flot.spline.js"></script>
<script src="lib/jquery-knob/jquery.knob.js"></script>
<script src="js/main.js"></script>
<script src="js/dashboard.js"></script>
</body>
</html>