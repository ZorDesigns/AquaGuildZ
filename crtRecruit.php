<?php
$page_cat = "services";
$page_tit = "formrec";
include __DIR__ . '/configs.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>   <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>   <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
<head>
<?php include ('webkit/meta'); ?>
<!-- Le styles -->
<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/main.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/forums.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/form/reg.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/media.css" rel="stylesheet" type="text/css">
<!-- Le javascripts -->
<script src="assets/javascript/jquery.min.js"></script>
<script src="assets/javascript/jquery.flexslider.min.js"></script>
<script src="assets/javascript/bootstrap.min.js"></script>
<script src="assets/javascript/global.js"></script>
<script src="assets/javascript/common_orig.js"></script>
<script src="assets/stylesheets/form/reg.js"></script>
<script src="assets/stylesheets/form/reg1.js"></script>
</head>
<body>
<?php include("settings/googletracking.php") ?>
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
<div class="container_crt" align="center">
<div class="recruit-bg-dark">
<div class="recruit-title">
<h1>Recruitment Post</h1>
<h4>Please answer all the questions correctly with please do not lie to any of the questions because we are gonna check! All the Questions must be answered correctly! Please try to read again and again your post, so everything is in place and written well!</h4>
</div>
</div>
<div class="recruit-bg-personal">
<div class="recruit-personal">
<h1>Personal Information</h1>
<h4>Please answer the Questions on the PERSONAL Tab correctly! We need to know more about you!</h4>
</div>
</div>
<form action='' method='POST' name="post_topic">
<div class="container_form_2" align="left" style="padding:36px">
<div class="row_">
<p><label>What's your name?</label></p>
<input style="width: 832px;" type='text' name='p1' maxlength="150" placeholder="Write your name">
</div>
<br>
<div class="clear"></div>
<div class="row_">
<p><label>What's your occupation?</label></p>
<input style="width: 832px;" type='text' name='p2' maxlength="150" placeholder="Do you study? Do you work? Define your status.">
</div>
<br>
<div class="clear"></div>
<div class="clear"></div>
<div class="row_">
<p><label>What's your age?</label></p>
<input style="width: 832px;" type='text' name='p3' maxlength="150" placeholder="How many years old are you?">
</div>
<div class="clear"></div>
<textarea name="q12" style="display:block; float:none; width:832px; height:55px; margin:20px 0px 15px 1px;" placeholder="Please describe yourself as a player. We need to know your attitude."></textarea>
<div class="clear"></div>
<textarea name="q13" style="display:block; float:none; width:832px; height:55px; margin:20px 0px 15px 1px;" placeholder="Please describe how comfortable you are when playing games."></textarea>
</div>
<div class="recruit-bg-character">
<div class="recruit-character">
<h1>Character Information</h1>
<h4>Please answer the Questions on the Character Tab correctly! We need to know more about your character!</h4>
</div>
</div>
<div class="container_form_2 fix_form_2" align="left" style="padding:36px">
<div class="row_">
<p><label>Character Name:</label></p>
<input style="width: 832px;" type='text' name='character' maxlength="150" placeholder="What's your character name?">
</div>
<div class="clear"></div>
<div class="row_">
<p><label>BattleTag:</label></p>
<input style="width: 832px;" type='text' name='battletag' maxlength="150" placeholder="Please provide your battletag so we can contact you.">
</div>
<div class="clear"></div>
<div class="row_">
<p><label>Class:</label></p>
<select name='class' style="display: none;" styled="true" id="select-style-1" placeholder="Select your Class!">
<option value="Warrior">Warrior</option>
<option value="Paladin">Paladin</option>
<option value="Hunter">Hunter</option>
<option value="Rogue">Rogue</option>
<option value="Priest">Priest</option>
<option value="Death Knight">Death Knight</option>
<option value="Shaman">Shaman</option>
<option value="Mage">Mage</option>
<option value="Warlock">Warlock</option>
<option value="Monk">Monk</option>
<option value="Druid">Druid</option>
<option value="Demon Hunter">Demon Hunter</option>
</select>
</div>
<br>
<div class="clear"></div>
<div class="row_">
<p><label>Spec:</label></p>
<select name='spec' style="display: none;" styled="true" id="select-style-1" placeholder="Select your Role!">
<option value="Tank">Tank</option>
<option value="Healer">Healer</option>
<option value="DPS">DPS</option>
</select>
</div>
<br>
<div class="clear"></div>
<div class="row_">
<p><label>Are you familiar with raiding?</label></p>
<select name='q1' style="display: none;" styled="true" id="select-style-1" placeholder="Select one of the options!">
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>
<br>
<div class="clear"></div>
<div class="row_">
<p><label>Link your Armory Link:</label></p>
<input style="width: 832px;" type='text' name='q2' maxlength="150" placeholder="Please provide your armory link!">
</div>
<br>
<div class="clear"></div>
<div class="row_">
<p><label>RaidUI Image:</label></p>
<input style="width: 832px;" type='text' name='q3' maxlength="150" placeholder="Please upload a picture to imgur and link it here. Do not write anything else in it.">
</div>
<br>
<div class="clear"></div>
<div class="row_">
<p><label>Do you have an Authenticator?</label></p>
<select name='q4' style="display: none;" styled="true" id="select-style-1" placeholder="Select one of the options!">
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>
<input style="width: 832px;" type='text' name='q4_info' maxlength="150" placeholder="Do you wish to get one, if we request it? If yes, Don't leave blank.">
<br>
<div class="clear"></div>
<div class="row_">
<label>What addons do you use? We use some specific Add-ons like WeakAuras, EPGPlootmaster and Exorsus. Do you mind downloading them? </label>
<textarea name="q5" style="display:block; float:none; width:832px; height:55px; margin:5px 0px 15px 1px;" placeholder="Please describe what addons do you prefer and why! Do you mind downloading the addons that we might request you to download?"></textarea>
</select>
</div>
<div class="clear"></div>
<div class="row_">
<label>Are you patient enough to handle Wipes while we Progress? </label>
<textarea name="q16" style="display:block; float:none; width:832px; height:55px; margin:5px 0px 15px 1px;" placeholder="We might wipe on a single boss for days before we progress"></textarea>
</select>
</div>
<div class="clear"></div>
<div class="row_">
<label>We use Loot Council to handle the loot. Can you handle that? </label>
<textarea name="q15" style="display:block; float:none; width:832px; height:55px; margin:5px 0px 15px 1px;" placeholder="Can you?"></textarea>
</select>
</div>
<div class="row_">
<label>What is your Rotation? (Don’t bother Copy/Paste a rotation guide from a site. Just let us know the key parts of your rotation and how you perfect them to max your damage!)</label>
<textarea name="q14" style="display:block; float:none; width:832px; height:55px; margin:5px 0px 15px 1px;" placeholder="Are you that good? Are you friendly? Reflect your gaming experience!"></textarea>
</select>
</div>
<div class="clear"></div>
<div class="row_">
<label>What made you consider applying to Hellenic Horde?</label>
<textarea name="q6" style="display:block; float:none; width:832px; height:55px; margin:5px 0px 15px 1px;" placeholder="Please be specific!"></textarea>
</select>
</div>
<div class="clear"></div>
<div class="row_">
<label>Tell us about your last guild. Why are you choosing us over them? Do you have any references?</label>
<textarea name="q7" style="display:block; float:none; width:832px; height:55px; margin:5px 0px 15px 1px;" placeholder="Please be specific! How many guilds did you join before us? Why? Explain."></textarea>
</select>
</div>
<div class="clear"></div>
<div class="row_">
<label>Tell us about the rest of your raiding history. What content have you cleared in the past? Which guilds did you do it with? Do you have any experience in guild leadership positions or other positions of responsibility?</label>
<textarea name="q8" style="display:block; float:none; width:832px; height:55px; margin:5px 0px 15px 1px;" placeholder="Write specifically your raiding history. What content have you cleared in the past? Any experience in guild leadership; positions or other positions of responsibility?"></textarea>
</select>
</div><div class="clear"></div>
<div class="row_">
<label>Prove that you are as good as we expect. Go into detail about what makes someone a master of your current class/spec, and show us how that is reflected in your own logs.</label>
<textarea name="q9" style="display:block; float:none; width:832px; height:55px; margin:5px 0px 15px 1px;" placeholder="Are you that good? Are you friendly? Reflect your gaming experience!"></textarea>
</select>
</div>
<div class="clear"></div>
<div class="row_">
<label>Do you have a good Computer & Internet Connection? How often do you upgrade?</label>
<textarea name="q10" style="display:block; float:none; width:832px; height:55px; margin:5px 0px 15px 1px;" placeholder="Please provide your Specs of your system (CPU, Graphics Card, RAM, Hard Drive)! Is your internet connection good enough?"></textarea>
</select>
</div>
<div class="clear"></div>
<div class="row_">
<p><label>Do you have friends in the Guild?</label></p>
<select name='q11' style="display: none;" styled="true" id="select-style-1">
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>
<input style="width: 832px;" type='text' name='q11_info' maxlength="150" placeholder="Name one or two of them! Not more.">
<br>
<input name="createRecruit" type="submit" value="Post">
</form>
</div>
<?php
if(isset($_POST["createRecruit"])){
$sql = "INSERT INTO recruits VALUES ('', '0', '".$_POST["character"]."', '".$_POST["battletag"]."', '".$_POST["class"]."', '".$_POST["spec"]."', 'New', '0', '".$_POST["p1"]."', '".$_POST["p2"]."', '".$_POST["p3"]."', '".$_POST["q1"]."', '".$_POST["q2"]."', '".$_POST["q3"]."', '".$_POST["q4"]."', '".$_POST["q4_info"]."', '".$_POST["q5"]."', '".$_POST["q6"]."', '".$_POST["q7"]."', '".$_POST["q8"]."', '".$_POST["q9"]."', '".$_POST["q10"]."', '".$_POST["q11"]."', '".$_POST["q11_info"]."', '".$_POST["q12"]."', '".$_POST["q13"]."', '".$_POST["q14"]."', '".$_POST["q15"]."', '".$_POST["q16"]."', NOW())";
if ($aquaglz->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
echo "<meta http-equiv='refresh'content='2;url=form.php'>";
echo $sql;
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $aquaglz->error."');</script>";
echo "<meta http-equiv='refresh'content='2;url=crtRecruit.php'>";
echo $sql;
}
}
?>
</div>
</div>
<?php include("webkit/sidelogin"); ?>
</div>
</div>
<?php include("webkit/footer"); ?>
<?php 
// Closing the Connection for Injection Measures!
$aquaglz->close();
?>
</body>
</html>