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
        <!-- Le styles -->
        <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/main.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/forum.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/status.css" rel="stylesheet" type="text/css">
        <link href="assets/css/form/reg.css" rel="stylesheet" type="text/css">
        <!-- Le javascripts -->
        <script src="assets/javascript/jquery.min.js"></script>
        <script src="assets/javascript/jquery.flexslider.min.js"></script>
        <script src="assets/javascript/bootstrap.min.js"></script>
        <script src="assets/javascript/global.js"></script>
		<script src="assets/javascript/common_orig.js"></script>
		<script src="assets/css/form/reg.js"></script>
		<script src="assets/css/form/reg1.js"></script>
</head>
<body>
<div id="wrapper">
<header id="main_header" class="clearfix">
<div id="service">
<ul class="service-bar">
<li class="service-cell service-home">
<a href="#" tabindex="50" accessKey="1" title="AquaGuildZ Home" data-action="AquaGuildZ Home"> </a>
</li>
<li class="service-cell service-welcome">
<a href="login.html">Log in</a> or <a href="register.html">Create an Account</a>
</li>
<li class="service-cell service-shop">
<a href="#" class="service-link" data-action="Shop">Shop</a>
</li>
<li class="service-cell service-account">
<a href="#" class="service-link" tabindex="50" accesskey="3" data-action="Account">Account</a>
</li>
<li class="service-cell service-support service-support-enhanced">
<a href="#support" class="service-link service-link-dropdown" tabindex="50" accesskey="4" id="support-link" style="cursor: pointer;" rel="javascript" data-action="Support - Support">Support<span class="no-support-tickets" id="support-ticket-count"></span></a>
<div class="support-menu" id="support-menu" style="display:none;">
<div class="support-primary">
<ul class="support-nav">
<li>
<a href="#" tabindex="55" class="support-category" id="support-nav-kb" data-action="Support - Knowledge Center">
<strong class="support-caption">Knowledge Center</strong>
Browse our support articles
</a>
</li>
<li>
<a href="#" tabindex="55" class="support-category" id="support-nav-tickets" data-action="Support - Your Support Tickets">
<strong class="support-caption">Your Support Tickets</strong>
View your active tickets (login required).
</a>
</li>
</ul>
<span class="clear"><!-- --></span>
</div>
<div class="support-secondary"></div>
</div>
</li>
<li class="service-cell service-explore">
<a href="#explore" tabindex="50" accesskey="5" class="dropdown" id="explore-link" style="cursor: pointer;" rel="javascript" data-action="Explore - Explore">Explore</a>
<div class="explore-menu" id="explore-menu" style="display:none;">
<div class="explore-primary">
<ul class="explore-nav">
<li>
<a href="#" tabindex="55" data-action="Explore - AquaGuildZ Home">
<strong class="explore-caption">AquaGuildZ Home</strong>
</a>
</li>
<li>
<a href="h#" tabindex="55" data-action="Explore - Shop">
<strong class="explore-caption">Shop</strong>
</a>
</li>
<li>
<a href="#" tabindex="55" data-action="Explore - Account">
<strong class="explore-caption">Account</strong>
</a>
</li>
<li>
<a href="#" tabindex="55" data-action="Explore - Support">
<strong class="explore-caption">Support</strong>
</a>
</li>
</ul>
<div class="explore-links">
<h2 class="explore-caption">More</h2>
<ul>
<li><a href="#" tabindex="55" data-action="Explore - What is AquaGuildZ?">What is AquaGuildZ?</a></li>
<li><a href="#" tabindex="55" data-action="Explore - What is Real ID?">What is Real ID?</a></li>
<li><a href="#" tabindex="55" data-action="Explore - Parental Controls">Parental Controls</a></li>
<li><a href="#" tabindex="55" data-action="Explore - Account Security">Account Security</a></li>
<li><a href="#" tabindex="55" data-action="Explore - Work For Us">Work At Blizzard</a></li>
<li><a href="#" tabindex="55" data-action="Explore - Classic Games">Classic Games</a></li>
<li><a href="#" tabindex="55" data-action="Explore - Account Support">Account Support</a></li>
</ul>
</div>
<a class="explore-get-app" href="#">
<div class="app-preview"></div>
<div class="app-tagline">Download our app now for free</div>
</a>
<span class="clear"><!-- --></span>
</div>
</div>
</li>
</ul>
<script type="text/javascript">
		//<![CDATA[
			$(function() {
				var category = Core.project + ' - GNB';
				Core.bindTrackEvent('#service .service-home a', category);
				Core.bindTrackEvent('#service .service-account a', category);
				Core.bindTrackEvent('#service .service-shop a', category);
				Core.bindTrackEvent('#support-link', category);
				Core.bindTrackEvent('#support-nav-kb', category);
				Core.bindTrackEvent('#support-nav-tickets', category);
				Core.bindTrackEvent('#ticket-summary', category);
				Core.bindTrackEvent('#explore-link', category);
				Core.bindTrackEvent('.explore-nav li a', category);
			});
		//]]>
		</script>
	</div>
    <div id="logo">
    </div>
    <div id="searchbar">
        <form>
            <input placeholder="Search characters, items, forums and more..." type="text">
        </form>
    </div>
    </header>
    <div id="content" class="clearfix">
        <div id="main">
            <div id="main_navigation">
                <nav>
                    <ul>
                        <li><a class="home" href="#"><span>Home</span></a></li>
                        <li><a class="media" href="#"><span>Media</span></a></li>
                        <li><a class="community" href="#"><span>Community</span></a></li>
                        <li><a class="status" href="#"><span>Status</span></a></li>
                        <li><a class="forums" href="#"><span>Forums</span></a></li>
                        <li><a class="services-active" href="#"><span>Services</span></a></li>
                    </ul>
                </nav>
            </div>
<!-- Main Content Add here -->
<div class="container_2" align="center">
<div class="sub-page-title" align="center">
<div id="title"><h1>Recruitment Form</h1></div>
</div>
<div class="cont-image">
</br></br></br></br></br></br></br></br>
<!-- Errors -->
<!-- Main Account info -->
<div class="container_3" align="center">
<!-- FORMS -->
<form action="execute.php?take=register654" method="post" name="registrationForm">
 <div class="row">
    <label for="form-username">Username</label>
    <input type="text" name="username" id="form-username" tabindex="1">
</div>
<div class="row">
    <label for="form-displayName">Full Name</label>
    <input type="text" name="firstname" id="form-firstName" tabindex="2">
</div>
<div class="row">
    <label for="form-displayName">Character's Name</label>
    <input type="text" name="charname" id="form-charname" tabindex="2">
</div>
<div class="row">
    <label>Birthday</label>
    <input type="text" name="birthday[year]" placeholder="YYYY" tabindex="7">
	<input type="text" name="birthday[day]" placeholder="DD" tabindex="6">
	<input type="text" name="birthday[month]" placeholder="MM" tabindex="7">
</div>
<div class="seperator"></div>
<div class="row">
    <label for="form-armorylink">Armory Link</label>
    <input type="text" name="armorylink" id="form-armorylink" tabindex="3">
</div>
<div class="row">
    <label for="form-specaexp">Spec and Experience</label>
    <input type="text" name="specaexp" id="form-specaexp" tabindex="4">
</div>
<div class="row">
    <label for="form-lifespan">Character Lifespan</label>
    <input type="text" name="lifespan" id="form-lifespan" tabindex="4">
</div>
<div class="row">
    <label for="form-startplay">Started Playing</label>
    <input type="text" name="startplay" id="form-startplay" tabindex="4">
</div>
<div class="seperator"></div>
 <div class="row">
    <label for="form-email">Email Address</label>
    <input type="text" name="email" id="form-email" tabindex="5">
</div>
<div class="seperator"></div>
<div class="row">
    <label for="form-country">Country</label>
    <input type="text" name="country" id="form-email" tabindex="5">
</div>
<div class="seperator"></div>
<div class="row">
<label>Question 1</label>
<select name="Question1" style="display: none;" styled="true" id="select-style-1">
<option value="1">If we would ask you to change Spec, would you?</option>
</select>
</div>
<div id="select-style-1" class="js-select" style="display: none;">
<div class="js-select-list-top-controller" id="js-list-top-controller" align="center"><p></p></div>
<div class="js-select-list-scroller" id="js-list-scroller"><div class="js-select-list-scrollable" id="js-list">
<ul id="1" class="js-select-list-option js-select-list-option-selected">If we would ask you to change Spec, would you?</ul>
</div></div>
<div class="js-select-list-bottom-controller" id="js-list-bottom-controller" align="center"><p></p>
</div>
</div>
<div class="row">
<label for="form-answer1">Answer @ Question 1</label>
<input type="text" name="answer1" id="form-answer1" tabindex="8">
</div>
<div class="row">
<label>Question 2</label>
<select name="Question2" style="display: none;" styled="true" id="select-style-1">
<option value="1">Are you active in most of days? How many hours you play each day?</option>
</select>
</div>
<div id="select-style-1" class="js-select" style="display: none;">
<div class="js-select-list-top-controller" id="js-list-top-controller" align="center"><p></p></div>
<div class="js-select-list-scroller" id="js-list-scroller"><div class="js-select-list-scrollable" id="js-list">
<ul id="1" class="js-select-list-option js-select-list-option-selected">Are you active in most of days? How many hours you play each day?</ul>
</div></div>
<div class="js-select-list-bottom-controller" id="js-list-bottom-controller" align="center"><p></p>
</div>
</div>
<div class="row">
<label for="form-answer2">Answer @ Question 2</label>
<input type="text" name="answer1" id="form-answer1" tabindex="8">
</div>
<div class="row">
<label>Question 3</label>
<select name="Question3" style="display: none;" styled="true" id="select-style-1">
<option value="1">What Other Class have you played?</option>
</select>
</div>
<div id="select-style-1" class="js-select" style="display: none;">
<div class="js-select-list-top-controller" id="js-list-top-controller" align="center"><p></p></div>
<div class="js-select-list-scroller" id="js-list-scroller"><div class="js-select-list-scrollable" id="js-list">
<ul id="1" class="js-select-list-option js-select-list-option-selected">If we would ask you to change Spec, would you?</ul>
</div></div>
<div class="js-select-list-bottom-controller" id="js-list-bottom-controller" align="center"><p></p>
</div>
</div>
<div class="row">
<label>Answer @ Question 3</label>
<select name="Answer3" style="display: none;" styled="true" id="select-style-1">
<option value="1">Warrior</option>
<option value="2">Paladin</option>
<option value="3">Hunter</option>
<option value="4">Rogue</option>
<option value="5">Priest</option>
<option value="6">Death Knight</option>
<option value="7">Shaman</option>
<option value="8">Mage</option>
<option value="9">Warlock</option>
<option value="10">Monk</option>
<option value="11">Druid</option>
</select>
</div>
<div id="select-style-1" class="js-select" style="display: none;">
<div class="js-select-list-top-controller" id="js-list-top-controller" align="center"><p></p></div>
<div class="js-select-list-scroller" id="js-list-scroller"><div class="js-select-list-scrollable" id="js-list">
<ul id="1" class="js-select-list-option js-select-list-option-selected">Warrior</ul>
<ul id="2" class="js-select-list-option js-select-list-option">Paladin</ul>
<ul id="3" class="js-select-list-option js-select-list-option">Hunter</ul>
<ul id="4" class="js-select-list-option js-select-list-option">Rogue</ul>
<ul id="5" class="js-select-list-option js-select-list-option">Priest</ul>
<ul id="6" class="js-select-list-option js-select-list-option">Death Knight</ul>
<ul id="7" class="js-select-list-option js-select-list-option">Shaman</ul>
<ul id="8" class="js-select-list-option js-select-list-option">Mage</ul>
<ul id="9" class="js-select-list-option js-select-list-option">Warlock</ul>
<ul id="10" class="js-select-list-option js-select-list-option">Monk</ul>
<ul id="11" class="js-select-list-option js-select-list-option">Druid</ul>
</div></div>
<div class="js-select-list-bottom-controller" id="js-list-bottom-controller" align="center"><p></p>
</div>
</div>
<div class="row">
<label>Question 4</label>
<select name="Question4" style="display: none;" styled="true" id="select-style-1">
<option value="1">Your raiding information? Provide stable proof (Links, etc).</option>
</select>
</div>
<div id="select-style-1" class="js-select" style="display: none;">
<div class="js-select-list-top-controller" id="js-list-top-controller" align="center"><p></p></div>
<div class="js-select-list-scroller" id="js-list-scroller"><div class="js-select-list-scrollable" id="js-list">
<ul id="1" class="js-select-list-option js-select-list-option-selected">Your raiding information? Provide stable proof (Links, etc).</ul>
</div></div>
<div class="js-select-list-bottom-controller" id="js-list-bottom-controller" align="center"><p></p>
</div>
</div>
<div class="row">
<label for="form-answer4">Answer @ Question 4</label>
<input type="text" name="answer4" id="form-answer4" tabindex="8">
</div>
<div class="row" align="right">
<input type="submit" value="complete" tabindex="10">
</div>
</form>
<!-- FORMS End -->
</div>
</div>
</div>
<br><br>
</div>
<div id="sidebar">
<div id="user_control">
<a data-toggle="modal" href="#loginframe">
<div id="user_control_deco"><!-- --></div>
<p><span>Log in now</span> to enhance and<br>personalize your experience!</p></a> 
</div>
</div>
    </div><footer>
    <div id="lower_nav" class="clearfix">
    <nav>
        <ul>
            <li class="header">AquaFlame Home</li>
            <li><a href="">Whats AquaFlame?</a></li>
            <li><a href="">Donate for us</a></li>
            <li><a href="">Account Panel</a></li>
            <li><a href="">Support</a></li>
            <li><a href="">Make free account</a></li>
        </ul>
    </nav>
    <nav>
        <ul>
            <li class="header">Account</li>
            <li><a href="">Forgot Password?</a></li>
            <li><a href="">Go Premium/Vip</a></li>
            <li><a href="">Forum User CP</a></li>
            <li><a href="">Game User CP</a></li>
            <li><a href="">Report Abuse</a></li>
        </ul>
    </nav>
    <nav>
        <ul>
            <li class="header">Support</li>
            <li><a href="">OMFG I got hacked</a></li>
            <li><a href="">Banned, why?</a></li>
            <li><a href="">Forums</a></li>
            <li><a href="">FAQ</a></li>
            <li><a href="">Rules</a></li>
        </ul>
    </nav>
        <div id="logos">
        <a href="#"><span>AquaFlameCMS</span></a>
        </div>
    </div>
    <div id="credits">
        <nav class="pull-right">
            <ul>
                <li><a href="">Terms of Use</a></li>
                <li><a href="">Legal</a></li>
                <li><a href="">Privacy Policy</a></li>
            </ul>
        </nav>
            &copy; 2012 AquaFlame, INC. All rights reserved
    </div>
    </footer>
</div>
</body>
</html>