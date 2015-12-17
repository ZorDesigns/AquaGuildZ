<?php
$page_cat = "users";
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
<title>AquaGuildZ | Users</title>
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
<div class="l-page-header">
<h2 class="l-page-title"><span>Registered</span> Users</h2>
<!--BREADCRUMB-->
<ul class="breadcrumb t-breadcrumb-page">
<li><a href="index.php">Home</a></li>
<li>Functions</li>
<li class="active">Users</li>
</ul>
</div>
<div class="l-spaced">
<div id="tables" class="resp-tabs-skin-1" style="display: block; width: 100%; margin: 0px;">
<ul class="resp-tabs-list">
<li id="responsiveTable" class="resp-tab-item resp-tab-active" aria-controls="tab_item-4" role="tab">Users</li>
</ul>
<div class="resp-tabs-container">
<!-- Users Table-->
<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-4"><span class="resp-arrow"></span>Users</h2><div class="resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-4" style="display:block">
<div class="l-row l-spaced-bottom">
<div class="l-box">
<div class="l-box-header">
<h2 class="l-box-title"><span>Data</span> Table - Users</h2>
</div>
<div class="l-box-body">
<div id="dataTableIdResponsive_wrapper" class="dataTables_wrapper no-footer">
<?php
// DB Connection file
include('../configs.php');
// The name says it all
$per_page = 10;
// Numerize the results from the DB
if ($result = $aquaglz->query("SELECT * FROM users ORDER BY uid"))
{
if ($result->num_rows != 0)
{
$total_results = $result->num_rows;
$total_pages = ceil($total_results / $per_page);
if (isset($_GET['page']) && is_numeric($_GET['page']))
{
$show_page = $_GET['page'];
if ($show_page > 0 && $show_page <= $total_pages)
{
$start = ($show_page -1) * $per_page;
$end = $start + $per_page;
}
else
{
// If error show first results
$start = 0;
$end = $per_page;
}
}
else
{
$start = 0;
$end = $per_page;
}
// The Base Table
echo '
<table id="dataTableIdResponsive" cellspacing="0" width="100%" class="display dt-responsive nowrap no-footer dtr-inline dataTable" role="grid" aria-describedby="dataTableIdResponsive_info" style="width: 100%;">
<thead>
<tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="dataTableIdResponsive" rowspan="1" colspan="1" aria-label="ID: activate to sort column descending" style="width: 8px;" aria-sort="ascending">ID</th>
<th class="sorting" tabindex="0" aria-controls="dataTableIdResponsive" rowspan="1" colspan="1" aria-label="First name: activate to sort column ascending" style="width: 106px;">First name</th>
<th class="sorting" tabindex="0" aria-controls="dataTableIdResponsive" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending" style="width: 106px;">Last Name</th>
<th class="sorting" tabindex="0" aria-controls="dataTableIdResponsive" rowspan="1" colspan="1" aria-label="BattleTag: activate to sort column ascending" style="width: 106px;">BattleTag</th>
<th class="sorting" tabindex="0" aria-controls="dataTableIdResponsive" rowspan="1" colspan="1" aria-label="Eamil: activate to sort column ascending" style="width: 259px;">Email</th>
<th class="sorting" tabindex="0" aria-controls="dataTableIdResponsive" rowspan="1" colspan="1" aria-label="Rank: activate to sort column ascending" style="width: 48px;">Rank</th>
<th class="sorting" tabindex="0" aria-controls="dataTableIdResponsive" rowspan="1" colspan="1" aria-label="Avatar: activate to sort column ascending" style="width: 68px;">Avatar</th>
<th class="sorting" tabindex="0" aria-controls="dataTableIdResponsive" rowspan="1" colspan="1" aria-label="Functions: activate to sort column ascending" style="width: 68px;">Functions</th>
</tr>
</thead>
';
// Loop the DB for results
for ($i = $start; $i < $end; $i++)
{
// Make sure that it's NOT gonna display inexistent objects
if ($i == $total_results) { break; }
// Find the Specific Rows
$result->data_seek($i);
$row = $result->fetch_row();
// Displaying the Objects from the Database
echo '
<tbody>
<tr role="row" class="odd">
<td class="sorting_1">' . $row[0] . '</td>
<td>' . $row[4] . '</td>
<td>' . $row[5] . '</td>
<td>' . $row[2] . '</td>
<td>' . $row[1] . '</td>
<td>' . $row[6] . '</td>
<td>' . $row[7] . '</td>
<td><a href="edit-user.php?id=' . $row[0] . '" type="button" class="btn btn-primary btn-sm">Edit</a> 
<a href="remove-user.php?id=' . $row[0] . '" type="button" class="btn btn-primary btn-danger">Remove</a></td>
</tr>                      
</tbody>';
}
// Closing the Table
echo "</table>";
}
else
{
echo "No results to display!";
}
}
// Query Error
else
{
echo "Error: " . $aquaglz->error;
}
// Pagination
echo '
<div class="dataTables_info" id="dataTableIdResponsive_info" role="status" aria-live="polite">Showing '.$per_page.' of '.$total_results.' entries</div>
<div class="dataTables_paginate paging_simple_numbers" id="dataTableIdResponsive_paginate">
<span>Pages: 
';
for ($i = 1; $i <= $total_pages; $i++)
{
if (isset($_GET['page']) && $_GET['page'] == $i)
{
echo '<a class="paginate_button " aria-controls="dataTableIdResponsive" data-dt-idx="'.$i.'" tabindex="0">'.$i.'</a>';
}
else
{
echo '<a href="users.php?page='.$i.'" class="paginate_button" aria-controls="dataTableIdResponsive" data-dt-idx="'.$i.'" tabindex="0">'.$i.'</a> ';
}
}
echo "</span></div>";
?>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--FOOTER-->
<footer class="l-footer l-footer-1 t-footer-1">
<div class="group pt-10 pb-10 ph">
<div class="copyright pull-left">
&#169; Copyright 2015
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
<script src="js/shared/classie.js"></script>
<script src="js/shared/jquery.cookie.min.js"></script>
<script src="js/shared/jasny-bootstrap.min.js"></script>
<script src="js/shared/perfect-scrollbar.min.js"></script>
<script src="js/shared/jquery.shuffle.min.js"></script>
<script src="js/plugins/accordions/jquery.collapsible.min.js"></script>
<script src="js/plugins/forms/elements/jquery.bootstrap-touchspin.min.js"></script>
<script src="js/plugins/forms/elements/jquery.checkBo.min.js"></script>
<script src="js/plugins/forms/elements/jquery.checkradios.min.js"></script>
<script src="js/plugins/forms/elements/jquery.switchery.min.js"></script>
<script src="js/plugins/profile/toucheffects.js"></script>
<script src="js/plugins/tabs/jquery.easyResponsiveTabs.js"></script>
<script src="js/plugins/tooltip/jquery.tooltipster.min.js"></script>
<script src="js/calls/page.profile.js"></script>
<script src="js/calls/part.header.1.js"></script>
<script src="js/calls/part.sidebar.2.js"></script>
<script src="js/calls/part.theme.setting.js"></script>
</body>
</html>