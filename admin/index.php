<?php
$page_cat = "home";
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
<?php
/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
if ($newsrslt = $aquaglz->query("SELECT * FROM news ORDER BY id")) {
/* determine number of rows result set */
$news_cnt = $newsrslt->num_rows;
?>
<div class="l-row">
<!-- Page Summary Charts-->
<div class="summary-chart chart-views l-col-md-4">
<div class="l-row">
<div class="l-col-xl-5 l-col-md-6 l-col-sm-5">
<div class="chart-info"><a href="#" title="Update total views" class="update-chart-views tt-top"><i class="fa fa-eye"></i></a><span>
<?php
echo $news_cnt;
/* close result set */
$newsrslt->close();
}
?>
</span>
<p>News</p>
</div>
</div>
</div>
</div>
<?php
/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
if ($result = $aquaglz->query("SELECT * FROM users ORDER BY uid")) {
/* determine number of rows result set */
$row_cnt = $result->num_rows;
?>
<div class="summary-chart chart-followers l-col-md-4">
<div class="l-row">
<div class="l-col-sm-5">
<div class="chart-info"><a href="#" title="Update followers" class="update-chart-followers tt-top"><i class="fa fa-users"></i></a><span>
<?php
echo $row_cnt;
/* close result set */
$result->close();
}
?>
</span>
<p>Users</p>
</div>
</div>
</div>
</div>
<?php
/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
if ($forumrslt = $aquaglz->query("SELECT * FROM threads ORDER BY id")) {
/* determine number of rows result set */
$frm_cnt = $forumrslt->num_rows;
?>
<div class="summary-chart chart-comments l-col-md-4">
<div class="l-row">
<div class="l-col-sm-5">
<div class="chart-info"><a href="#" title="Update comments" class="update-chart-comments tt-top"><i class="fa fa-comments"></i></a><span>
<?php
echo $frm_cnt;
/* close result set */
$forumrslt->close();
}
?></span>
<p>Topics</p>
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
<div id="weather"></div>
</div>
</div>
</div>
</div>
<div class="doc doc-info doc-border doc-left l-spaced-bottom">
Welcome to <strong>AquaGuildZ</strong> Content Management System powered by <strong>FlameCMS</strong>! You have accessed the administrators panel.<br>
Here you can customize your CMS as much as you want and also configure it to your needs.<br>For more info check out the <strong>documentation</strong>.
</div>
<!-- Row 1 - Info Widgets-->
<div class="l-row l-spaced-horizontal l-spaced-top">
<!-- User Widget Info-->
<div class="l-col-md-3 l-col-sm-6 l-spaced-bottom">
<div data-ason-type="draggable" class="widget-info-wrapper ason-widget">
<div class="widget-info-refresh-helper">
<div class="widget-info t-info-1 ui-drag-item">
<ul class="widget-options is-options-right">
<li class="option-main-item"><a href="#" class="ui-drag-handle"><i class="fa fa-arrows"></i></a></li>
<li class="option-main-item"><a href="#" data-ason-type="refresh" data-ason-target=".widget-info-refresh-helper" data-ason-content="true" data-ason-duration="1100" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="toggle" data-ason-parent="false" data-ason-target="#user-info" data-ason-content="true" data-ason-duration="200" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="delete" data-ason-target=".widget-info-wrapper" data-ason-content="true" data-ason-animation="fadeOut" class="ason-widget"></a></li>
<li>
<ul>
<li class="option-sub-item"><a href="#" class="details-btn"><i class="fa fa-file"></i></a></li>
<li class="option-sub-item"><a href="#" class="chart-btn"><i class="fa fa-line-chart"></i></a></li>
</ul>
</li>
</ul>
<div id="user-info" class="widget-info-details">
<div class="info-data open">
<h4><?php echo $row_cnt; ?></h4>
<hr>
<p><span>Total</span> Users
</p>
<div class="progress progress-no-border progress-mini">
<div role="progressbar" aria-valuenow="<?php echo $row_cnt; ?>" aria-valuemin="0" aria-valuemax="1000" style="width: <?php echo $row_cnt; ?>%;" class="progress-bar"><span class="sr-only"><?php echo $row_cnt; ?>% Complete</span></div>
</div>
</div>
<div class="info-chart">
<div class="hide info-t-1-spark-1-c"></div>
<div id="customerChart"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Orders Widget Info-->
<div class="l-col-md-3 l-col-sm-6 l-spaced-bottom l-clear-sm">
<div data-ason-type="draggable" class="widget-info-wrapper ason-widget">
<div class="widget-info-refresh-helper">
<div class="widget-info t-info-2 ui-drag-item">
<ul class="widget-options is-options-right">
<li class="option-main-item"><a href="#" class="ui-drag-handle"><i class="fa fa-arrows"></i></a></li>
<li class="option-main-item"><a href="#" data-ason-type="refresh" data-ason-target=".widget-info-refresh-helper" data-ason-content="true" data-ason-duration="1100" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="toggle" data-ason-parent="false" data-ason-target="#order-info" data-ason-content="true" data-ason-duration="200" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="delete" data-ason-target=".widget-info-wrapper" data-ason-content="true" data-ason-animation="fadeOut" class="ason-widget"></a></li>
<li>
<ul>

<li class="option-sub-item"><a href="#" class="details-btn"><i class="fa fa-file"></i></a></li>
<li class="option-sub-item"><a href="#" class="chart-btn"><i class="fa fa-line-chart"></i></a></li>
</ul>
</li>
</ul>
<div id="order-info" class="widget-info-details">
<div class="info-data open">
<h4><?php echo $news_cnt; ?></h4>
<hr>
<p><span>Total</span> News Posts
</p>
<div class="progress progress-no-border progress-mini">
<div role="progressbar" aria-valuenow="<?php echo $news_cnt; ?>" aria-valuemin="0" aria-valuemax="1000" style="width: <?php echo $news_cnt; ?>%;" class="progress-bar"><span class="sr-only"><?php echo $news_cnt; ?>% Complete</span></div>
</div>
</div>
<div class="info-chart">
<div class="hide info-t-2-spark-1-c"></div>
<div class="hide info-t-2-spark-2-c"></div>
<div class="hide info-t-2-spark-3-c"></div>
<div id="ordersChart"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Reports Widget Info-->
<div class="l-col-md-3 l-col-sm-6 l-spaced-bottom">
<div data-ason-type="draggable" class="widget-info-wrapper ason-widget">
<div class="widget-info-refresh-helper">
<div class="widget-info t-info-3 ui-drag-item">
<ul class="widget-options is-options-right">
<li class="option-main-item"><a href="#" class="ui-drag-handle"><i class="fa fa-arrows"></i></a></li>
<li class="option-main-item"><a href="#" data-ason-type="refresh" data-ason-target=".widget-info-refresh-helper" data-ason-content="true" data-ason-duration="1100" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="toggle" data-ason-parent="false" data-ason-target="#report-info" data-ason-content="true" data-ason-duration="200" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="delete" data-ason-target=".widget-info-wrapper" data-ason-content="true" data-ason-animation="fadeOut" class="ason-widget"></a></li>
<li>
<ul>

<li class="option-sub-item"><a href="#" class="details-btn"><i class="fa fa-file"></i></a></li>
<li class="option-sub-item"><a href="#" class="chart-btn"><i class="fa fa-line-chart"></i></a></li>
</ul>
</li>
</ul>
<div id="report-info" class="widget-info-details">
<div class="info-data open">
<h4><?php echo $frm_cnt; ?></h4>
<hr>
<p><span>Total</span> Forum Posts
</p>
<div class="progress progress-no-border progress-mini">
<div role="progressbar" aria-valuenow="<?php echo $frm_cnt; ?>" aria-valuemin="0" aria-valuemax="1000" style="width: <?php echo $frm_cnt; ?>%;" class="progress-bar"><span class="sr-only"><?php echo $frm_cnt; ?>% Complete</span></div>
</div>
</div>
<div class="info-chart">
<div class="pt-10">
<div class="hide info-t-3-spark-1-c"></div>
<div id="reportsChart"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Payout Widget Info-->
<div class="l-col-md-3 l-col-sm-6 l-spaced-bottom">
<div data-ason-type="draggable" class="widget-info-wrapper ason-widget">
<div class="widget-info-refresh-helper">
<div class="widget-info t-info-4 ui-drag-item">
<ul class="widget-options is-options-right">
<li class="option-main-item"><a href="#" class="ui-drag-handle"><i class="fa fa-arrows"></i></a></li>
<li class="option-main-item"><a href="#" data-ason-type="refresh" data-ason-target=".widget-info-refresh-helper" data-ason-content="true" data-ason-duration="1100" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="toggle" data-ason-parent="false" data-ason-target="#payout-info" data-ason-content="true" data-ason-duration="200" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="delete" data-ason-target=".widget-info-wrapper" data-ason-content="true" data-ason-animation="fadeOut" class="ason-widget"></a></li>
<li>
<ul>

<li class="option-sub-item"><a href="#" class="details-btn"><i class="fa fa-file"></i></a></li>
<li class="option-sub-item"><a href="#" class="chart-btn"><i class="fa fa-line-chart"></i></a></li>
</ul>
</li>
</ul>
<div id="payout-info" class="widget-info-details">
<div class="info-data open">
<h4>0 &#8364;</h4>
<hr>
<p><span>Total</span> Maintenance Taxes
</p>
<div class="progress progress-no-border progress-mini">
<div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" class="progress-bar"><span class="sr-only">0% Complete</span></div>
</div>
</div>
<div class="info-chart">
<div class="hide info-t-4-spark-1-c"></div>
<div id="paymentChart"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Row 2 - Stats, Orders, Social-->
<div class="l-row l-spaced-horizontal">
<!-- Stats Widget-->
<div class="l-col-lg-3 l-col-md-4 l-spaced-bottom">
<div class="widget-stats t-stats-1">
<ul class="widget-options is-options-right">
<li class="option-main-item"><a href="#" data-ason-type="refresh" data-ason-target=".widget-stats" data-ason-content="true" data-ason-duration="1100" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="toggle" data-ason-parent="false" data-ason-target=".widget-stats-info" data-ason-content="true" data-ason-duration="200" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="delete" data-ason-target=".widget-stats" data-ason-content="true" data-ason-animation="fadeOut" class="ason-widget"></a></li>
</ul>
<?php
$num_amount = $row_cnt;
$num_total = 1000;

function percent($num_amount, $num_total) {
$count1 = $num_amount / $num_total;
$count2 = $count1 * 100;
$count = number_format($count2, 0);
?>
<div class="widget-stats-info">
<h4 class="widget-header">Stats</h4>
<div class="l-row">
<div class="l-col-xs-8 stats-data"><span><?php echo $num_amount; ?></span>
<div>users</div>
</div>
<div class="l-col-xs-4 stats-change"><span class="text-success">
<?php echo $count;
}
percent($num_amount, $num_total); ?>%</span>
<div>increased</div>
</div>
</div>
<?php
$news_amount = $news_cnt;
$news_total = 1000;

function percent_news($news_amount, $news_total) {
$ncount1 = $news_amount / $news_total;
$ncount2 = $ncount1 * 100;
$ncount = number_format($ncount2, 0);
?>
<div class="l-row">
<div class="l-col-xs-8 stats-data"><span><?php echo $news_amount; ?></span>
<div>news / posts</div>
</div>
<div class="l-col-xs-4 stats-change"><span class="text-success">
<?php echo $ncount;
}
percent_news($news_amount, $news_total); ?>%</span>
<div>increased</div>
</div>
</div>
<?php
/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
if ($replyrslt = $aquaglz->query("SELECT * FROM replies ORDER BY id")) {
/* determine number of rows result set */
$reply_cnt = $replyrslt->num_rows;
/* close result set */
$replyrslt->close();
}
$repl_amount = $reply_cnt;
$repl_total = 1000;

function percent_replies($repl_amount, $repl_total) {
$rcount1 = $repl_amount / $repl_total;
$rcount2 = $rcount1 * 100;
$rcount = number_format($rcount2, 0);
?>
<div class="l-row">
<div class="l-col-xs-8 stats-data"><span><?php echo $repl_amount; ?></span>
<div>comments / replies</div>
</div>
<div class="l-col-xs-4 stats-change"><span class="text-success">
<?php echo $rcount;
}
percent_replies($repl_amount, $repl_total); ?>%</span>
<div>increased</div>
</div>
</div>
<?php
$forum_amount = $frm_cnt;
$forum_total = 1000;

function percent_forums($forum_amount, $forum_total) {
$fcount1 = $forum_amount / $forum_total;
$fcount2 = $fcount1 * 100;
$fcount = number_format($fcount2, 0);
?>
<div class="l-row">
<div class="l-col-xs-8 stats-data"><span><?php echo $forum_amount; ?></span>
<div>forum topics</div>
</div>
<div class="l-col-xs-4 stats-change"><span class="text-success">
<?php echo $fcount;
}
percent_forums($forum_amount, $forum_total); ?>%</span>
<div>increased</div>
</div>
</div>
</div>
</div>
</div>
<!-- News Widget-->
<div class="l-col-lg-6 l-col-md-8 l-clear-md l-spaced-bottom">
<div class="widget-latest-orders t-latest-orders-1">
<ul class="widget-options is-options-left">
<li class="option-main-item"><a href="#" data-ason-type="refresh" data-ason-target=".widget-latest-orders" data-ason-content="true" data-ason-duration="1100" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="toggle" data-ason-parent="false" data-ason-target=".widget-latest-orders-info" data-ason-content="true" data-ason-duration="200" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="delete" data-ason-target=".widget-latest-orders" data-ason-content="true" data-ason-animation="fadeOut" class="ason-widget"></a></li>
</ul>
<div class="widget-latest-orders-info">
<h4 class="widget-header">Latest News
<?php
$news_amount = $news_cnt;
$news_total = 1000;

function percent_news2($news_amount, $news_total) {
$ncount1 = $news_amount / $news_total;
$ncount2 = $ncount1 * 100;
$ncount = number_format($ncount2, 0);
?>
<div class="weekly"><span class="text-success"><?php echo $ncount;
}
percent_news2($news_amount, $news_total); ?>%</span> increased
</div>
</h4>
<table class="table table-hover table-order-header">
<thead>
<tr>
<th class="tb-col-1">#</th>
<th class="tb-col-2">Title</th>
<th class="tb-col-3">Author</th>
<th class="tb-col-4">Details</th>
<th class="tb-col-5">Image Code</th>
</tr>
</thead>
</table>
<div class="table-order-body">
<div data-ason-type="scrollbar" data-ason-max-height="200" class="ason-widget">
<table class="table table-hover">
<tbody>
<?php
$news = "SELECT * FROM news ORDER BY id ASC";
$result = $aquaglz->query($news);
if ($result->num_rows > 0) {
// output data of each row
while($news = $result->fetch_assoc()) {
if($news['content'] == "")
{
$news['content'] = substr(strip_tags($news['content'],'<p><a><br><li><ol><ul>'),0,20);
if (substr($news['content'], -1) == '<') 
{$news['content'] = substr($news['content'], 0, -1);}
$content = $news['content'];
}else{
$content = substr(strip_tags($news['content']),0,20);}
echo '
<tr>
<td class="tb-col-1">'.$news["id"].'</td>
<td class="tb-col-2">'.$news["title"].'</td>
<td class="tb-col-3">'.$news["author"].'</td>
<td class="tb-col-4">'.$content.'...</td>
<td class="tb-col-5">'.$news["image"].'</td>
</tr>
';
}
} else {
echo '
<tr>
<td class="tb-col-1">0</td>
<td class="tb-col-2">No News</td>
<td class="tb-col-3">YET</td>
<td class="tb-col-4">GO Make</td>
<td class="tb-col-5">NOW!</td>
</tr>';
}
?>
</tbody>
</table>
</div>
</div>
<div class="l-row">
<div class="l-col-xs-6"><a class="view-all"><i class="fa fa-angle-double-down"></i> Scroll for more</a></div>
<div class="l-col-xs-6">
<div class="total">Total:<span></span><?php echo $news_cnt; ?> Posts</div>
</div>
</div>
</div>
</div>
</div>
<!-- Maintenance Widget-->
<div class="l-col-lg-3 l-col-md-4 l-spaced-bottom">
<div class="widget-stats t-stats-1">
<ul class="widget-options is-options-right">
<li class="option-main-item"><a href="#" data-ason-type="refresh" data-ason-target=".widget-stats" data-ason-content="true" data-ason-duration="1100" class="ason-widget"><i class="fa fa-refresh"></i></a></li>
<li class="option-main-item"><a href="#" data-ason-type="toggle" data-ason-parent="false" data-ason-target=".widget-stats-info" data-ason-content="true" data-ason-duration="200" class="ason-widget"><i class="fa fa-chevron-down"></i></a></li>
<li class="option-main-item"><a href="#" data-ason-type="delete" data-ason-target=".widget-stats" data-ason-content="true" data-ason-animation="fadeOut" class="ason-widget"><i class="fa fa-times"></i></a></li>
</ul>
<div class="widget-stats-info">
<h4 class="widget-header">Maintenance</h4>
<div class="l-row">
<div class="l-col-xs-8 stats-data"><span>1</span>
<div>Restarts</div>
</div>
<div class="l-col-xs-4 stats-change"><span class="text-success">
1</span>
<div>this week</div>
</div>
</div>
<div class="l-row">
<div class="l-col-xs-8 stats-data"><span>5</span>
<div>Updates</div>
</div>
<div class="l-col-xs-4 stats-change"><span class="text-success">
5</span>
<div>this week</div>
</div>
</div>
<div class="l-row">
<div class="l-col-xs-8 stats-data"><span>5</span>
<div>DB updates</div>
</div>
<div class="l-col-xs-4 stats-change"><span class="text-success">
5</span>
<div>this week</div>
</div>
</div>
<div class="l-row">
<div class="l-col-xs-8 stats-data"><span>0</span>
<div>Expenses</div>
</div>
<div class="l-col-xs-4 stats-change"><span class="text-success">
0 &#8364;</span>
<div>this week</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Row 4 - Todo and Maps-->
<div class="l-row l-spaced-horizontal">
<div class="l-col-xl-3 l-col-lg-4 l-col-md-5 l-spaced-bottom">
<!-- Todo Widget-->
 <div class="widget-todo">
<ul class="widget-options is-options-right">
<li class="option-main-item"><a href="#" data-ason-type="refresh" data-ason-target=".widget-todo" data-ason-content="true" data-ason-duration="1100" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="toggle" data-ason-parent="false" data-ason-target=".widget-todo-info" data-ason-content="true" data-ason-duration="200" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="delete" data-ason-target=".widget-todo" data-ason-content="true" data-ason-animation="fadeOut" class="ason-widget"></a></li>
</ul>
<div class="widget-todo-info">
<h4 class="widget-header">Version List</h4>
<ul data-ason-type="draggable" class="todo-list todocheckbo ason-widget">
<?php $vrsn2 = "SELECT * FROM version ORDER BY id DESC";
$resultv2 = $aquaglz->query($vrsn2);
if ($resultv2->num_rows > 0) {
// output data of each row
while($vrsn2 = $resultv2->fetch_assoc()) {
echo '
<li class="todo-item ui-drag-item"><a><i class="fa fa-bars"></i></a>
<label class="cb-checkbox cb-checkbox-danger-2">
<input type="checkbox" value=""><span class="todo-text">['.$vrsn2["id"].'] '.$vrsn2["text"].'</span>
</label>
<a href="https://github.com/ZorDesigns/AquaGuildZ/commits/master" data-ason-target=".todo-item" class=" ason-widget pull-right"><i class="fa fa-bolt"></i></a>
</li>';}
}else{
echo '
<li class="todo-item ui-drag-item"><a href="#" class="ui-drag-handle"><i class="fa fa-bars"></i></a>
<label class="cb-checkbox cb-checkbox-danger-2">
<input type="checkbox" value=""><span class="todo-text">Not any versions?! You broke it!</span>
</label><a href="#" data-ason-type="delete" data-ason-target=".todo-item" data-ason-content="true" data-ason-animation="fadeOut" class="delete-todo ason-widget pull-right"></a>
</li>';
}
?>
</ul>
<div class="todo-input">
<div class="input-group">
<input id="addTaskInput" type="text" placeholder="Add task..." class="form-control"><span class="input-group-btn">
<button type="button" id="addTaskButton" class="btn btn-dark"><i class="fa fa-plus"></i></button></span>
</div>
</div>
</div>
</div>
</div>
<div class="l-col-lg-6 l-col-md-8 l-clear-md l-spaced-bottom">
<div class="widget-latest-orders t-latest-orders-1">
<ul class="widget-options is-options-left">
<li class="option-main-item"><a href="#" data-ason-type="refresh" data-ason-target=".widget-latest-orders" data-ason-content="true" data-ason-duration="1100" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="toggle" data-ason-parent="false" data-ason-target=".widget-latest-orders-info" data-ason-content="true" data-ason-duration="200" class="ason-widget"></a></li>
<li class="option-main-item"><a href="#" data-ason-type="delete" data-ason-target=".widget-latest-orders" data-ason-content="true" data-ason-animation="fadeOut" class="ason-widget"></a></li>
</ul>
<div class="widget-latest-orders-info">
<?php
$num_amount = $row_cnt;
$num_total = 1000;

function percent_usr($num_amount, $num_total) {
$count1 = $num_amount / $num_total;
$count2 = $count1 * 100;
$count = number_format($count2, 0);
?>
<h4 class="widget-header">Users<div class="weekly"><span class="text-success"><?php echo $count;
}
percent_usr($num_amount, $num_total); ?>%</span> increased
</div>
</h4>
<table class="table table-hover table-order-header">
<thead>
<tr>
<th class="tb-col-1">#</th>
<th class="tb-col-2">Name</th>
<th class="tb-col-3">E-Mail</th>
<th class="tb-col-4">BattleTag / Nickname</th>
<th class="tb-col-5">Actions</th>
</tr>
</thead>
</table>
<div class="table-order-body">
<div data-ason-type="scrollbar" data-ason-max-height="200" class="ason-widget">
<table class="table table-hover">
<tbody>
<?php $uservi = "SELECT * FROM users ORDER BY uid ASC";
$userrslt = $aquaglz->query($uservi);
if ($userrslt->num_rows > 0) {
// output data of each row
while($uservi = $userrslt->fetch_assoc()) {
echo '
<tr>
<td class="tb-col-1">'.$uservi["uid"].'</td>
<td class="tb-col-2">'.$uservi["firstname"].' '.$uservi["lastname"].'</td>
<td class="tb-col-3">'.$uservi["email"].'</td>
<td class="tb-col-4">
<div class="label label-info"><img src="img/plugins/battlenet.png"> '.$uservi["bTag"].'</div>
</td>
<td class="tb-col-5"><a href="#" class="btn btn-dark">Edit</a> <a href="#" class="btn btn-dark">Promote</a></td>
</tr>
';}
}else{
echo 'No Users Yet...';
}
?>
</tbody>
</table>
</div>
</div>
<div class="l-row">
<div class="l-col-xs-6"><a class="view-all"><i class="fa fa-angle-double-down"></i> Scroll for more</a></div>
<div class="l-col-xs-6">
<div class="total">Total:<span></span><?php echo $row_cnt; ?> Registered Users</div>
</div>
</div>
</div>
</div>
</div>

<div class="l-col-lg-3 l-col-md-4 l-spaced-bottom">
<div class="l-box-body">
<div class="l-row t-pt-row-1">
<ul class="plans plans-1 centered">
<li style="width: 100%;" class="plan best l-col-md-3 l-col-sm-6 mb">
<ul>
<li class="title">
<h2>HOSTING PLAN</h2>
</li>
<li class="price">
<p>&#8364; 0<span> / MONTH</span></p>
</li>
<li class="options">
<ul>
<li><span>(D/U) Host Speed</span>500mbps</li>
<li><span>Domain</span>used</li>
<li><span>Unlimited</span>uptime</li>
<li><span>Unlimited</span>uploads</li>
<li><span>10x</span>Databases</li>
</ul>
</li>
<li class="btn-cont"><a class="btn btn-default btn-block disabled">Currently Purchased</a></li>
</ul>
</li>
</ul>
</div>
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
<?php
$vrsn = "SELECT * FROM version ORDER BY id DESC LIMIT 1";
$resultv = $aquaglz->query($vrsn);
if ($resultv->num_rows > 0) {
// output data of each row
while($vrsn = $resultv->fetch_assoc()) {
?>
<div class="version pull-right">v<?php echo $vrsn["text"]; }}?></div>
</div>
</footer>
</section>
</section>
<?php 
/* close connection */
$aquaglz->close();
?>
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
<script src="js/plugins/charts/flot/jquery.flot.min.js"></script>
<script src="js/plugins/charts/flot/jquery.flot.resize.min.js"></script>
<script src="js/plugins/charts/flot/jquery.flot.pie.min.js"></script>
<script src="js/plugins/charts/flot/jquery.flot.stack.min.js"></script>
<script src="js/plugins/charts/flot/jquery.flot.symbol.min.js"></script>
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
<script src="js/shared/classie.js"></script>
<script src="js/calls/chart.flot.js"></script>
</body>
</html>