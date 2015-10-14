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
<div class="widget-profile-2 profile-2-in-side-2 t-profile-2-3">
<div class="profile-2-wrapper" style="display: block;">
<div class="profile-2-details">
<div class="profile-2-img"><a href="#"><img src="img/profile/profile.gif"></a></div>
<ul class="profile-2-info">
<li>
<h3>USERNAME</h3>
</li>
<li>DEVELOPER</li>
<li>
<div class="btn-group btn-group-sm btn-group-justified">
<a role="button" title="Social Stats" class="toggle-stats btn btn-dark tt-top"><i class="fa fa-rss"></i></a>
<a role="button" title="Visitor Stats" class="toggle-visitors btn btn-dark tt-top"><i class="fa fa-area-chart"></i></a>
<a href="page-profile.html" title="Edit Profile" class="btn btn-dark tt-top"><i class="fa fa-cogs"></i></a></div>
</li>
</ul>
</div>
<div class="profile-2-social-stats">
<div class="l-span-xs-4">
<div class="profile-2-status-nr text-danger">0</div>Likes
</div>
<div class="l-span-xs-4">
<div class="profile-2-status-nr text-info">0</div>Comments
</div>
<div class="l-span-xs-4">
<div class="profile-2-status-nr text-success">0</div>Messages
</div>
</div>
<div class="profile-2-chart">
<div class="hide rickshaw-visitors"></div>
<div id="rickshawVisitors"></div>
<div id="rickshawVisitorsLegend" class="visitors_rickshaw_legend"></div>
</div>
</div>
</div>
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
<nav class="navigation">
<ul data-ason-type="menu" class="ason-widget">
<li><a href="#"><i class="icon fa fa-dashboard"></i><span class="title">Dashboard</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">DISABLED</span></a>
<ul>
<li><a href="index.php"><span class="title">Dashboard 1</span></a></li>
</li>
</ul>
<li class="active"><a href="#"><i class="icon fa fa-cogs"></i><span class="title">Functions</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">1</span></a>
<ul>
<li class="active"><a href="char.php"><span class="title">Add Character</span></a></li>
</li>
</ul>
</ul>
</nav>
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
<!-- Task Widget-->
<div class="widget-task task-in-header dropdown dropdown-in-header"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-tasks"></i><span class="label label-danger">4</span></a>
<ul role="menu" class="dropdown-menu">
<li class="dropdown-menu-header">Tasks<span class="label label-danger">4</span></li>
<li>
<div class="l-row">
<div class="l-col-sm-8">Project Overview</div>
<div class="l-col-sm-4 tar">22%</div>
</div>
<div class="progress progress-no-border progress-mini">
<div style="width: 10%" class="progress-bar progress-bar-info"><span class="sr-only">10% Complete (success)</span></div>
<div style="width: 12%" class="progress-bar progress-bar-success"><span class="sr-only">12% Complete (success)</span></div>
<div style="width: 13%" class="progress-bar progress-bar-danger"><span class="sr-only">13% Complete (warning)</span></div>
<div style="width: 14%" class="progress-bar progress-bar-warning"><span class="sr-only">14% Complete (danger)</span></div>
</div>
</li>
<li class="divider"></li>
<li>
<div class="l-row">
<div class="l-col-sm-8">Page Design</div>
<div class="l-col-sm-4 tar">89%</div>
</div>
<div class="progress progress-no-border progress-mini">
<div role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;" class="progress-bar progress-bar-striped active progress-bar-info"><span class="sr-only">89% Complete</span></div>
</div>
</li>
<li>
<div class="l-row">
<div class="l-col-sm-8">Front-End development</div>
<div class="l-col-sm-4 tar">15%</div>
</div>
<div class="progress progress-no-border progress-mini">
<div role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;" class="progress-bar progress-bar-striped active progress-bar-success"><span class="sr-only">15% Complete</span></div>
</div>
</li>
<li>
<div class="l-row">
<div class="l-col-sm-8">Back-End development</div>
<div class="l-col-sm-4 tar">5%</div>
</div>
<div class="progress progress-no-border progress-mini">
<div role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;" class="progress-bar progress-bar-striped active progress-bar-danger"><span class="sr-only">5% Complete</span></div>
</div>
</li>
<li>
<div class="l-row">
<div class="l-col-sm-8">Database design</div>
<div class="l-col-sm-4 tar">10%</div>
</div>
<div class="progress progress-no-border progress-mini">
<div role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar progress-bar-striped active progress-bar-warning"><span class="sr-only">10% Complete</span></div>
</div>
</li>
</ul>
</div>
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
<li>
<!-- Profile Widget-->
<div class="widget-profile profile-in-header">
<button type="button" data-toggle="dropdown" class="btn dropdown-toggle"><span class="name">USERNAME</span><img src="img/profile/profile.gif"></button>
<ul role="menu" class="dropdown-menu">
<li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
<li class="lock"><a href="lock.php"><i class="fa fa-lock"></i>Log Out</a></li>
<li class="power"><a href="logout.php"><i class="fa fa-power-off"></i>Sign Out</a></li>
</ul>
</div>
</li>
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
This page shows you the character <strong>data</strong> and the <strong>SQL Code</strong> to use to the database to implement the character that you have selected.<br>
This gives you greater flexibility to add new Characters that joined the Guild recently.<br>For more info theck out the <strong>documentation</strong>.
</div>
<div class="syntax-wrapper">
<div class="table-responsive">
<div class="l-box l-spaced-bottom">
<div class="l-box-header">
<div class="syntax-info">
<h3>JSON Dump Table</h3>
</div>
<ul class="l-box-options">
<li><a href="#"><i class="fa fa-cogs"></i></a></li>
<li><a href="#" data-ason-type="refresh" data-ason-target=".l-box" data-ason-duration="1000" class="ason-widget"><i class="fa fa-rotate-right"></i></a></li>
<li><a href="#" data-ason-type="toggle" data-ason-find=".l-box" data-ason-target=".l-box-body" data-ason-content="true" data-ason-duration="200" class="ason-widget"><i class="fa fa-chevron-down"></i></a></li>
</ul>
</div>
<div class="l-box-body l-spaced">
<div class="form-horizontal">
<div class="form-group">
<label for="counterTextarea" class="col-sm-3 control-label">Preview:</label>
<div class="col-sm-9">
<?php
$PlayerName = $_GET["characterText"];
require_once('../configs.php');
//-- GENERAL INFORMATION --//
// Link for the character images: http://eu.battle.net/static-render/eu/ADD-THE-EXPORTED-DATA
//-- Player --//
$json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?locale='.$LocaleName.'&apikey='.$APIkey.'');
//------------//
//-- Output --//
//------------//
?>
<textarea id="counterTextarea" rows="3" placeholder="" class="form-control" style="overflow: hidden; height: 200px;">
<?php
$my_arr = json_decode($json_wow_api_url, true);
foreach($my_arr as $key => $value){
$sql[] = "`$key` = '" . ($value) . "'";
}
$sqlclause = implode(",",$sql);
var_dump(json_decode($json_wow_api_url, true));

$aquaglz ->query("SELECT name WHERE $PlayerName");
if (!$aquaglz) {
    die('Invalid query: ' . mysql_error());
}
else
	?>
</textarea>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php 
{
echo "<div class='doc doc-warning doc-border doc-left l-spaced-bottom'>";
echo "<strong>";echo $PlayerName; echo"</strong> does <strong>not</strong> exist in the Database.";
echo "</div>";
}
?>
<div class="syntax-wrapper">
<div class="table-responsive">
<div class="l-box l-spaced-bottom">
<div class="l-box-header">
<div class="syntax-info">
<h3>SQL Code</h3>
</div>
<ul class="l-box-options">
<li><a href="#"><i class="fa fa-cogs"></i></a></li>
<li><a href="#" data-ason-type="refresh" data-ason-target=".l-box" data-ason-duration="1000" class="ason-widget"><i class="fa fa-rotate-right"></i></a></li>
<li><a href="#" data-ason-type="toggle" data-ason-find=".l-box" data-ason-target=".l-box-body" data-ason-content="true" data-ason-duration="200" class="ason-widget"><i class="fa fa-chevron-down"></i></a></li>
</ul>
</div>
<div class="l-box-body l-spaced">
<div class="form-horizontal">
<div class="form-group">
<label for="autogrowTextarea" class="col-sm-3 control-label">Copy the Following:</label>
<div class="col-sm-9">
<textarea id="autogrowTextarea" rows="3" placeholder="" class="form-control" style="overflow: hidden; resize: none; height: 81px;">
<?php echo "INSERT INTO `chars` SET $sqlclause"; ?>
</textarea>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Row 2 - Tabs Statistic-->
<div class="l-spaced-vertical group">
<!-- Widget Tabs 2-->
<div class="widget-tabs-2">
<div class="hide tab-chart-track-color"></div>
<ul>
<li class="l-span-lg-3 l-span-sm-6">
<div class="l-span-xs-7">
<div class="tab-2-title">Death Knights</div>
<div class="tab-2-stat">9<span class="text-success">+1</span></div>
<div class="tab-2-info">Closed</div>
</div>
<div class="l-span-xs-5 tab-chart-wrapper">
<div title="Update" class="tabChartUpdate1 tab-chart-update tt-top"><i class="fa fa-refresh"></i></div><span data-percent="75" class="tabChart1 tab-chart"><span class="percent"></span><i class="tab-chart-1-color fa fa-area-chart"></i></span>
</div>
</li>
<li class="l-span-lg-3 l-span-sm-6">
<div class="l-span-xs-7">
<div class="tab-2-title">Hunters</div>
<div class="tab-2-stat">22<span class="text-danger">+2</span></div>
<div class="tab-2-info">Closed</div>
</div>
<div class="l-span-xs-5 tab-chart-wrapper">
<div title="Update" class="tabChartUpdate2 tab-chart-update tt-top"><i class="fa fa-refresh"></i></div><span data-percent="32" class="tabChart2 tab-chart"><span class="percent"></span><i class="tab-chart-2-color fa fa-line-chart"></i></span>
</div>
</li>
<li class="l-span-lg-3 l-span-sm-6">
<div class="l-span-xs-7">
<div class="tab-2-title">Druids</div>
<div class="tab-2-stat">17<span class="text-warning">-1</span></div>
<div class="tab-2-info">Closed</div>
</div>
<div class="l-span-xs-5 tab-chart-wrapper">
<div title="Update" class="tabChartUpdate3 tab-chart-update tt-top"><i class="fa fa-refresh"></i></div><span data-percent="54" class="tabChart3 tab-chart"><span class="percent"></span><i class="tab-chart-3-color fa fa-rss"></i></span>
</div>
</li>
<li class="l-span-lg-3 l-span-sm-6">
<div class="l-span-xs-7">
<div class="tab-2-title">Mages</div>
<div class="tab-2-stat">14<span class="text-success">+5</span></div>
<div class="tab-2-info">Closed</div>
</div>
<div class="l-span-xs-5 tab-chart-wrapper">
<div title="Update" class="tabChartUpdate4 tab-chart-update tt-top"><i class="fa fa-refresh"></i></div><span data-percent="45" class="tabChart4 tab-chart"><span class="percent"></span><i class="tab-chart-4-color fa fa-facebook"></i></span>
</div>
</li>
</ul>
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