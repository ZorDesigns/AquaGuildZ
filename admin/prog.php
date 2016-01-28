<?php
$page_cat = "prog";
include("../check.php");
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
<title>AquaGuildZ | Admin</title>
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
<!-- Specific-->
<link rel="stylesheet" href="css/addons/fonts/artill-clean-icons.css"/>
<link rel="stylesheet" href="css/addons/theme/syntaxhighlighter.css" class="style-theme-addon">
<link rel="stylesheet" href="css/addons/theme/select2.css" class="style-theme-addon">
</head>
<body class="l-dashboard">
<!--HEADER SLIDE-->
<header id="header" class="l-header-slide l-header-slide-3 t-header-slide-3">
<div class="widget-weather-forecast l-row">
<div class="l-span-xl-10 l-span-lg-9 l-span-md-9 l-span-sm-12">
<div id="weatherForecast">&amp;nbsp;
</div>
</div>
<div class="l-span-xl-2 l-span-lg-3 l-span-md-3 hidden-sm hidden-xs">
<div class="weather-forecast-settings">
<h3>Forecast Settings</h3>
<div class="form-group">
<div class="input-group input-group-sm">
<div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
<input type="text" placeholder="Search location" value="Athens, GRC" class="forecast-location form-control"><span class="input-group-btn">
<button type="button" class="btn btn-dark forecast-location-btn"><i class="fa fa-search"></i></button></span>
</div>
</div>
<div class="forecastcheckbo">
<div>
<label class="forecast-unit cb-radio cb-radio-primary-1">
<input type="radio" name="temperature" value="f" checked="checked">Fahrenheit
</label>
</div>
<div>
<label class="forecast-unit cb-radio cb-radio-primary-1">
<input type="radio" name="temperature" value="c">Celsius
</label>
</div>
</div><a href="#" class="forecast-geo-location">Use Your Location</a>
</div>
</div>
</div>
</header>
<!--SECTION-->
<section class="l-main-container">
<!--Left Sidebar Content-->
<aside id="sb-left" class="l-sidebar l-sidebar-1 t-sidebar-1">
<!-- Profile in sidebar-->
<?php include("webkit/profile.php"); ?>
<!-- Logo in Sidebar-->
<div class="l-side-box">
<!--Logo-->
<div class="logo-in-side">
<h1>
<span class="logo-default visible-default-inline-block"><img src="img/logo.png" alt="Proteus"></span>
</h1>
</div>
</div>
<!--Search-->
<div class="l-side-box mt-5 mb-10">
<div class="widget-search search-in-side is-search-left t-search-4">
<div class="search-toggle"><i class="fa fa-search"></i></div>
<div class="search-content">
<form role="form" action="#">
<input type="text" placeholder="Search..." class="form-control">
<button type="submit" class="btn"><i class="fa fa-search"></i></button>
</form>
</div>
</div>
</div>
<!--Main Menu-->
<div class="l-side-box">
<!--MAIN NAVIGATION MENU-->
<?php include("webkit/nav.php"); ?>
</div>
</aside>
<!--Main Content-->
<section class="l-container">
<!--HEADER-->
<header class="l-header l-header-1 t-header-1">
<div class="navbar navbar-ason">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" data-toggle="collapse" data-target="#ason-navbar-collapse" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.html" class="navbar-brand widget-logo"><span class="logo-default-header"><img src="img/logo_dark.png" alt="Proteus"></span></a>
</div>
<div id="ason-navbar-collapse" class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li>
<!-- Progress Widget-->
<?php include ('webkit/progress.php'); ?>
</li>
<?php include ('webkit/msg.php'); ?>
<li>
<!-- Search Widget-->
<div class="widget-search search-in-header is-search-right t-search-1">
<form role="form" action="#">
<input type="text" placeholder="Search..." class="form-control">
<button type="submit" class="btn"><i class="fa fa-search"></i></button>
</form>
</div>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li>
<!-- Slide Header Switcher-->
<a href="#" title="Show Weather Forecast" data-ason-type="header" data-ason-header="l-header-slide-3" data-ason-header-push="l-header-slide-push-3" data-ason-anim-all='["velocity","transition.expandIn","transition.fadeOut"]' data-ason-is-push="true" data-ason-target="#header" class="sidebar-switcher switcher t-switcher-header ason-widget">
<i class="fa fa-cloud"></i>
</a>
</li>
<li class="hidden-sm">
<!-- Full Screen Toggle-->
<a href="#" class="full-screen-page sidebar-switcher switcher t-switcher-header">
<i class="fa fa-expand"></i>
</a>
</li>
<?php include("webkit/profmini.php"); ?>
</ul>
</div>
</div>
</div>
</header>
<!-- Row 1 - Page Summary Info-->
<!-- Page Summary Widget-->
<div class="widget-page-summary">
<div class="l-col-lg-4">
<h2 class="page-title">Welcome to <span>AquaGuildZ</span>.</h2>
<h4 class="page-sub-title">Your <span id="rotating-text">Responsive, Beautiful, Clean, HTML5 and CSS3 based, powered by FlameCMS, Bootstrap based </span> Admin Web App.</h4><a href="#" class="page-summary-info-switcher"><i class="fa fa-bars"></i></a>
</div>
<div class="l-col-lg-8 page-summary-info">
<!-- Page Summary Settings-->
<div class="page-summary-settings">
<ul class="update-status-settings">
<li><a href="#" title="Update charts" class="chart-toggle tt-bottom"><i class="fa fa-refresh"></i></a></li>
<li>
<ul class="time-status-toggle">
<li title="Toggle unit" class="tt-bottom">
<div class="hide switcheryUnits"></div>
<input id="switcheryUnits" type="checkbox">
</li>
<li class="last-status"><a href="#" title="Use your location" class="current-weather-location tt-bottom"><i class="fa fa-compass"></i></a></li>
</ul>
</li>
<li class="last">
<div class="hide switcherySettings"></div>
<input id="switcherySettings" type="checkbox">
</li>
</ul>
</div>
<div class="l-row">
<!-- Page Summary Charts-->
<div class="summary-chart chart-views l-col-md-4">
<div class="l-row">
<div class="l-col-xl-5 l-col-md-6 l-col-sm-5">
<div class="chart-info"><a href="#" title="Update total views" class="update-chart-views tt-top"><i class="fa fa-eye"></i></a><span>0</span>
<p>Total Views</p>
</div>
</div>
</div>
</div>
<div class="summary-chart chart-followers l-col-md-4">
<div class="l-row">
<div class="l-col-sm-5">
<div class="chart-info"><a href="#" title="Update followers" class="update-chart-followers tt-top"><i class="fa fa-users"></i></a><span>0</span>
<p>Followers</p>
</div>
</div>
</div>
</div>
<div class="summary-chart chart-comments l-col-md-4">
<div class="l-row">
<div class="l-col-sm-5">
<div class="chart-info"><a href="#" title="Update comments" class="update-chart-comments tt-top"><i class="fa fa-comments"></i></a><span>0</span>
<p>Comments</p>
</div>
</div>
</div>
</div>
</div>
<div class="l-row">
<!-- Page Summary Clock-->
<div class="summary-time-status clock-wrapper l-col-md-8 l-col-sm-6">
<div id="clock"></div>
</div>
<!-- Page Summary Weather-->
<div class="summary-time-status weather-wrapper l-col-md-4 l-col-sm-6">
<div id="weather">
<div class="l-span-sm-6 l-span-xs-12">
<div class="weather-location">Athens, GRC</div>
<div class="weather-description">Scattered Thunderstorms</div>
</div>
<div class="l-span-sm-3 l-span-xs-9">
<div class="weather-temp"> 12°C</div>
</div>
<div class="l-span-sm-3 l-span-xs-3">
<div class="weather-icon"><i class="ac ac-0"></i></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="doc doc-info doc-border doc-left l-spaced-bottom">
Welcome to <strong>AquaGuildZ</strong> Progress API powered by <strong>FlameCMS</strong>! This is the progress settings. Mostly...<br>
Here you can refresh or update the guilds progress.<br>For more info check out the <strong>documentation</strong>.
</div>
<!-- Row 2 - Tabs Statistic-->
<div class="l-spaced-vertical group">
<!-- Widget Tabs 2-->
<div class="l-box l-col-md-6 l-spaced-bottom">
<div class="l-box-header">
<h2 class="l-box-title"><span>Progress</span> Update</h2>
<ul class="l-box-options">
<li><a href="#"><i class="fa fa-cogs"></i></a></li>
<li><a href="#" data-ason-type="refresh" data-ason-target=".l-box" data-ason-duration="1000" class="ason-widget"><i class="fa fa-rotate-right"></i></a></li>
<li><a href="#" data-ason-type="toggle" data-ason-find=".l-box" data-ason-target=".l-box-body" data-ason-content="true" data-ason-duration="200" class="ason-widget"><i class="fa fa-chevron-down"></i></a></li>
</ul>
</div>
<div class="l-box-body l-spaced">
<form role="form" action="../progress.php?Update=true" class="form-horizontal">
<div class="form-group">
<label for="inputEmail3" class="col-md-3 control-label"></label>
<div class="col-md-9">
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-md-3 control-label"></label>
<div class="col-md-9">
<p class="help-block">Here you can update the progress of the guild. Either manually or automatically.</p>
<p class="help-block">(Auto is selected by default)</p>
</div>
</div>
<div class="form-group">
<div class="col-md-offset-3 col-md-9">
<div class="checkbox">
<div class="checkradios-checkbox checkradios checked checked"><input type="checkbox" class="checkradios"></div>Auto-Update
</div>
</div>
</div>
<div class="form-group">
<div class="col-md-offset-3 col-md-9">
<button type="submit" class="btn btn-default">Update</button>
</div>
</div>
</form>
</div>
</div>
<div class="l-box l-col-md-6 l-spaced-bottom">
<div class="l-box-header">
<h2 class="l-box-title"><span>Progress</span> Refresh</h2>
<ul class="l-box-options">
<li><a href="#"><i class="fa fa-cogs"></i></a></li>
<li><a href="#" data-ason-type="refresh" data-ason-target=".l-box" data-ason-duration="1000" class="ason-widget"><i class="fa fa-rotate-right"></i></a></li>
<li><a href="#" data-ason-type="toggle" data-ason-find=".l-box" data-ason-target=".l-box-body" data-ason-content="true" data-ason-duration="200" class="ason-widget"><i class="fa fa-chevron-down"></i></a></li>
</ul>
</div>
<div class="l-box-body l-spaced">
<form role="form" action="../progress.php?Refresh=true" class="form-horizontal">
<div class="form-group">
<label for="inputEmail3" class="col-md-3 control-label"></label>
<div class="col-md-9">
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-md-3 control-label"></label>
<div class="col-md-9">
<p class="help-block">Here you can refresh the progress of the guild. Either manually or automatically.</p>
<p class="help-block">(Auto is selected by default)</p>
</div>
</div>
<div class="form-group">
<div class="col-md-offset-3 col-md-9">
<div class="checkbox">
<div class="checkradios-checkbox checkradios checked checked"><input type="checkbox" class="checkradios"></div>Auto-Update
</div>
</div>
</div>
<div class="form-group">
<div class="col-md-offset-3 col-md-9">
<button type="submit" class="btn btn-default">Refresh</button>
</div>
</div>
</form>
</div>
</div>
</div>

<!--FOOTER-->
<footer class="l-footer l-footer-1 t-footer-1">
<div class="group pt-10 pb-10 ph">
<div class="copyright pull-left">
© Copyright 2015
<a href="#">AquaGuildZ.</a>
Powered by
<a href="#">ZorDesigns</a>
All rights reserved.
</div>
<div class="version pull-right">v 1.0</div>
</div>
</footer>
</section>
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
<script src="js/shared/jquery.cookie.min.js"></script>
<script src="js/shared/jquery.easing.1.3.js"></script>
<script src="js/shared/perfect-scrollbar.min.js"></script>
<script src="js/plugins/accordions/jquery.collapsible.min.js"></script>
<script src="js/plugins/charts/c3/c3.min.js"></script>
<script src="js/plugins/charts/c3/d3.v3.min.js"></script>
<script src="js/plugins/charts/other/jquery.easypiechart.min.js"></script>
<script src="js/plugins/charts/rickshaw/rickshaw.min.js"></script>
<script src="js/plugins/datetime/jqClock.min.js"></script>
<script src="js/plugins/forms/elements/jquery.bootstrap-touchspin.min.js"></script>
<script src="js/plugins/forms/elements/jquery.checkBo.min.js"></script>
<script src="js/plugins/forms/elements/jquery.switchery.min.js"></script>
<script src="js/plugins/table/footable.all.min.js"></script>
<script src="js/plugins/tabs/jquery.easyResponsiveTabs.js"></script>
<script src="js/plugins/textrotator/jquery.simple-text-rotator.min.js"></script>
<script src="js/plugins/tooltip/jquery.tooltipster.min.js"></script>
<script src="js/plugins/weather/jquery.simpleWeather.min.js"></script>
<script src="js/calls/dashboard.1.js"></script>
<script src="js/calls/part.header.1.js"></script>
<script src="js/calls/part.sidebar.2.js"></script>
<script src="js/calls/part.theme.setting.js"></script>
<script src="js/calls/shared.tooltipster.js"></script>
</body>
</html>