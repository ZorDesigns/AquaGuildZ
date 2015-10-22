<?php
include ('configs.php');

// Check connection
if ($aquaglz->connect_error) {
    die("Connection failed: " . $aquaglz->connect_error);
} 

$sql = "SELECT name, class, race, level, thumbnail, talent FROM chars";
$result = $aquaglz->query($sql);
?>
<?php
$page_cat = "roster";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>         <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>           <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>           <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
<head>
        <meta charset="utf-8">
        <title>AquaFlameCMS Frontpage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A wow private server made with AquaFlameCMS">
        <meta name="author" content="AquaFlameCMS">
		<link rel="shortcut icon" href="admin/img/favicon.png">
        <!-- Le styles -->
        <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/main.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/forum.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/status.css" rel="stylesheet" type="text/css">
		<link href="assets/stylesheets/roster.css" rel="stylesheet" type="text/css">
        <!-- Le javascripts -->
        <script src="assets/javascript/jquery.min.js"></script>
        <script src="assets/javascript/jquery.flexslider.min.js"></script>
        <script src="assets/javascript/bootstrap.min.js"></script>
        <script src="assets/javascript/global.js"></script>
		<script src="assets/javascript/common_orig.js"></script>
</head>
<body>
<?php include("webkit/servicebar") ?>
<div id="wrapper">
<header id="main_header" class="clearfix">
<a href="index.php"><div id="logo"></div></a>
<div id="searchbar">
<form>
<input placeholder="Search characters, items, forums and more..." type="text">
</form>
</div>
</header>
<div id="content" class="clearfix">
<div id="main">
<?php include("webkit/menu"); ?>
<!-- Main Content Add here -->
<div id="main_content">
<div class="container_3" align="center">
<div class="players">
<a id="main-content"></a>
<div class="sub_header_h1">
<h1>Guild Roster</h1>
</div>
<div class="region region-content">
<div id="block-system-main" class="block block-system">
<div class="content">
<div class="view view-players view-id-players view-display-id-page_1 view-dom-id-89414b9b52314f613ee7b35d83babee2 clearfix">
<hr>
<div class="wrapper clearfix">
<?php
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo '
<div class="roster-bg-dark">
<div class="groster-row">
<img src="http://eu.battle.net/static-render/eu/'.$row["thumbnail"].'" width="90" height="90">
<div class="grinfo">
<p><a href="http://eu.battle.net/wow/en/character/silvermoon/'.$row["name"].'/advanced">'.$row["name"].'</a></p>
<p class="wow-class-'.$row["class"].'">'.$row["class"].'</p>
<p class="wow-class-'.$row["class"].'">'.$row["talent"].'</p>
</div>
<div class="clear"></div>
</div>
</div>';
}
} else {
echo '
<div class="roster-bg-dark">
<div class="groster-row">
<div class="grinfo">
<br><p>No Characters on the Database</p>
</div>
<div class="clear"></div>
</div>
</div>';
}
$aquaglz->close();
?>
</div>
</div> </div>
</div>
</div>
</div>
</div>
<?php include("webkit/progressrostg"); ?>
</div>
</div>
<?php include("webkit/sidebar"); ?>
</div>
<?php include("webkit/footer"); ?>
</body>
</html>