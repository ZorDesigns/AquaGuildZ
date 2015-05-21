<!DOCTYPE html>
<!--[if lt IE 7]>         <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>           <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>           <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
<head>
        <meta charset="utf-8">
        <title>AquaGuildZ - UVT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A Guild System Manager made with AquaGuildZ Core">
        <meta name="author" content="AquaGuildZ - UVT">
   
        <!-- Le styles -->
        <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/main.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/forum.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/status.css" rel="stylesheet" type="text/css">
   
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
   
        <!-- Le javascripts -->
        <script src="assets/javascript/jquery.min.js"></script>
        <script src="assets/javascript/jquery.flexslider.min.js"></script>
        <script src="assets/javascript/bootstrap.min.js"></script>
        <script src="assets/javascript/global.js"></script>
		<script src="assets/javascript/common_orig.js"></script>
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
<a href="login.php">Log in</a> or <a href="register.php">Create an Account</a>
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
                        <li><a class="home" href="index.php/"><span>Home</span></a></li>
                        <li><a class="media" href="index.php/media"><span>Media</span></a></li>
                        <li><a class="community" href="index.php/community"><span>Community</span></a></li>
                        <li><a class="status" href="index.php/status"><span>Status</span></a></li>
                        <li><a class="forums" href="index.php/forum"><span>Forums</span></a></li>
                        <li><a class="services" href="index.php/service"><span>Services</span></a></li>
                    </ul>
                </nav>
            </div>
            <div id="slider_wrapper">
    <div id="slider">
        <div id="slider_trickery">
            <div id="slider_mask">
                <!-- -->
            </div>
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="assets/images/test/featured1.png" alt=""></li>
                    <li><img src="assets/images/test/featured2.png" alt=""></li>
                    <li><img src="assets/images/test/featured3.png" alt=""></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="news_thumbs" class="clearfix">
   	    <ul>
            <li>
                    <a href="index.php/index/viewarticle/1">
                        <img src="" alt="" style="background-image: url(assets/uploads/images/newsarticle1.png);">
                        <span>Test Title</span>
                    </a>
                  </li><li>
                    <a href="index.php/index/viewarticle/2">
                        <img src="" alt="" style="background-image: url(assets/uploads/images/newsarticle2.png);">
                        <span>hdrd</span>
                    </a>
                  </li>        </ul>
    </div>
</div>
<div id="main_content">
    <article>
                	<header>
                    	<h1><a href="">Test Title</a></h1>
                        <p class="meta">by <a href="">FailZorD</a> 2 years, 6 months, 3 weeks ago <a href="">0</a> <img src="assets/images/content-comments.png" alt="Comments"></p>
                    </header>
                    <div class="content">
                    	<div class="thumb">
                        	<a href=""><img src="assets/uploads/images/newsarticle1.png" alt=""></a>
                        </div>
                    	<p>gdss</p>
						<div align="right"><a href="" class="login-btn">Read More</a></div>
                    </div>
                    <footer><!-- --></footer>
                </article><article>
                	<header>
                    	<h1><a href="">hdrd</a></h1>
                        <p class="meta">by <a href="">FailZorD</a> 2 years, 6 months, 3 weeks ago <a href="">0</a> <img src="assets/images/content-comments.png" alt="Comments"></p>
                    </header>
                    <div class="content">
                    	<div class="thumb">
                        	<a href=""><img src="assets/uploads/images/newsarticle2.png" alt=""></a>
                        </div>
                    	<p>hhdrh</p>
						<div align="right"><a href="" class="login-btn">Read More</a></div>
                    </div>
                    <footer><!-- --></footer>
                </article></div>
        </div>
        <div id="sidebar">
            <div id="user_control">
                <a data-toggle="modal" href="login.php">
                                <div id="user_control_deco"><!-- --></div>
                                <p><span>Log in now</span> to enhance and<br>personalize your experience!</p></a>            </div>
                <div id="sidebar_content" class="clearfix">
        <section class="advertisement">
            <img src="assets/images/test/advertisement.png" alt="" width="0" height="0" style="display: none !important; visibility: hidden !important; opacity: 0 !important; background-position: 0px 0px;">
        </section>
        <section class="votingpanel">
            <header>
                <!-- -->
            </header>
        <div class="content">
            <ul>
                <li><a href="">XtremeTop100</a></li>
                <li><a href="">MGTop100</a></li>
                <li><a href="">MotaFking100</a></li>
            </ul>
            <!-- <p><a href="">Login</a> to vote for our awesome sauce site!</p> -->
        </div>
        <footer>
            <a href=""><span>198 Vote Points Earned</span></a>
        </footer>
        </section>
        <section class="ssotd">
            <header>
                <h3><a href="">Screenshot of the day</a></h3>
            </header>
            <div class="content">
                <div class="ssotd-thumb">
                    <img src="" alt="" style="background-image: url(assets/images/test/screenshot.png);">
                    <div class="options">
                        <a href="">Submit Screenshot</a>
                        <a class="pull-right" href="">All Screenshots</a>
                    </div>
                </div>
            </div>
            <footer>
                <!-- -->
            </footer>
        </section>
        <section class="forumlatest">
            <header>
                <h3><a href="">Popular Topics</a></h3>
            </header>
            <div class="content">
                <ul>
                    <li><a href="">All YOUR WOOLS BELONG TO US!</a>General Discussion - 6/6/12 8:08 PM</li>
                    <li><a href="">Before the Internet, what did you do?</a>General Discussion - 6/6/12 8:08 PM</li>
                    <li><a href="">70s thread of Mario &gt; Luigi</a>General Discussion - 6/6/12 8:08 PM</li>
                    <li><a href="">A fond farewell.</a>General Discussion - 6/6/12 8:08 PM</li>
                    <li><a href="">They finally found out I'm a guy In RL</a>General Discussion - 6/6/12 8:08 PM</li>
                    <li><a href="">Prove you played WoW before Wotlk.</a>General Discussion - 6/6/12 8:08 PM</li>
                    <li><a href="">Why can't Forsaken Procreate??</a>General Discussion - 6/6/12 8:08 PM</li>
                </ul>
            </div>
            <footer>
                <!-- -->
            </footer>
        </section>
    </div>        </div>
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
        <a href="http://aquaflame.org/"><span>AquaGuildZ - UVT</span></a>
        <a class="id820" href=""><span>ID820</span></a>
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