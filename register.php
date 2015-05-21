
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" class="en-us">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>FlameCMS Login</title>
<link rel="shortcut icon" href="ENTER FAVICON LINK HERE" />
<link rel="stylesheet" type="text/css" media="all" href="assets/css/toolkit/wow-web.min05b1.css?v=58-1" />
<link rel="stylesheet" type="text/css" media="all" href="assets/css/login/global.min05b1.css?v=58-1" />
<script type="text/javascript" src="assets/js/toolkit/third-party/jquery/jquery-1.11.0.min05b1.js?v=58-1"></script>
<script type="text/javascript" src="assets/js/core.min05b1.js?v=58-1"></script>
<meta name="viewport" content="width=device-width" />
</head>
<body class="en-us login-template web wow" data-embedded-state="STATE_LOGIN">
<script type="text/javascript">
//<![CDATA[
(function() {
var body = document.getElementsByTagName("body")[0];
body.className = body.className + " js-enabled preload";
})();
$(function(){
$('body').removeClass('preload');
});
//]]>
</script>
<div class="grid-container wrapper" >
<h1 class="logo">FlameCMS Account Login</h1>
<div class="hide" id="info-wrapper">
<h2><strong class="info-title"></strong></h2>
<p class="info-body"></p>
<button class="btn btn-block hide visible-phone" id="info-phone-close">Close</button>
</div>
<div class="input-container" id="login-wrapper">
<form action="#" method="post" id="password-form" class=" username-required input-focus">
<div class="alert alert-error" style="*display: none;*">
<ul class="unstyled">
<li>
The username or password is incorrect. Please try again.
</li>
</ul>
</div>
<div class="alert alert-success" style="*display: none;*">
<ul class="unstyled">
<li>
You have successfully completed the Registration. Please wait while we redirect you at <a href="#">Home</a>.
</li>
</ul>
</div>
<div class="control-group">
<label id="accountName-label" class="control-label" for="accountName">Account Name</label>
<div class="controls">
<input aria-labelledby="accountName-label" id="accountName" name="accountName" title="Account Name" maxlength="320" type="text" tabindex="1" class="input-block input-large" placeholder="Account Name" autocorrect="off" spellcheck="false"/>
</div>
</div>
<div class="control-group">
<label id="firstName-label" class="control-label" for="firstName">First Name</label>
<div class="controls">
<input aria-labelledby="firstName-label" id="firstName" name="firstName" title="First Name" maxlength="320" type="text" tabindex="1" class="input-block input-large" placeholder="First Name" autocorrect="off" spellcheck="false"/>
</div>
</div>
<div class="control-group">
<label id="lastName-label" class="control-label" for="lastName">Last Name</label>
<div class="controls">
<input aria-labelledby="lastName-label" id="lastName" name="lastName" title="Last Name" maxlength="320" type="text" tabindex="1" class="input-block input-large" placeholder="Last Name" autocorrect="off" spellcheck="false"/>
</div>
</div>
<div class="control-group">
<label id="emailForm-label" class="control-label" for="accountName">Email Address</label>
<div class="controls">
<input aria-labelledby="emailForm-label" id="emailForm" name="emailForm" title="Email Address" maxlength="320" type="text" tabindex="1" class="input-block input-large" placeholder="Email Address" autocorrect="off" spellcheck="false"/>
</div>
</div>
<div class="control-group">
<label id="password-label" class="control-label" for="password">Password</label>
<div class="controls">
<input aria-labelledby="password-label" id="password" name="password" title="Password" maxlength="16" type="password" tabindex="1" class="input-block input-large" autocomplete="off" placeholder="Password" autocorrect="off" spellcheck="false"/>
</div>
</div>
<div class="control-group">
<label id="repassword-label" class="control-label" for="password">Repeat Password</label>
<div class="controls">
<input aria-labelledby="password-label" id="repassword" name="repassword" title="Repeat Password" maxlength="16" type="password" tabindex="1" class="input-block input-large" autocomplete="off" placeholder="Repeat Password" autocorrect="off" spellcheck="false"/>
</div>
</div>
<div class="control-group">
<label id="monthForm-label" class="control-label" for="password">Birthday</label>
<div class="row">
<input type="text" name="birthday[year]" placeholder="Year" tabindex="7">
<input type="text" name="birthday[day]" placeholder="Day" tabindex="6">
<input type="text" name="birthday[month]" placeholder="Month" tabindex="7">
</div>
</div>
<div class="control-group">
<div class="row">
<select name="secretQuestion" style="display: none;" styled="true" id="select-style-1">
<option disabled="disabled">Select Question</option>
<option value="1" style="">Your city of birth?</option>
<option value="2">Mother&#8217;s city of birth? </option>
<option value="3">Father&#8217;s city of birth?</option>
<option value="4">Model of your first car?</option>
<option value="5">Best friend in high school?</option>
<option value="6">First elementary school I attended?</option>
<option value="7">What was your first WoW character name?</option>
<option value="8">Name of your first pet?</option>
</select>
</div>
<div id="select-style-1" class="js-select" style="display: none;">
<div class="js-select-list-top-controller" id="js-list-top-controller" align="center"><p></p></div>
<div class="js-select-list-scroller" id="js-list-scroller"><div class="js-select-list-scrollable" id="js-list">
<ul id="0" class="js-select-list-option js-select-list-option-disabled">Select Question</ul>
<ul id="1" class="js-select-list-option js-select-list-option-selected">Your city of birth?</ul>
<ul id="2" class="js-select-list-option">Mother&#8217;s city of birth? </ul>
<ul id="3" class="js-select-list-option">Father&#8217;s city of birth?</ul>
<ul id="4" class="js-select-list-option">Model of your first car?</ul>
<ul id="5" class="js-select-list-option">Best friend in high school?</ul>
<ul id="6" class="js-select-list-option">First elementary school I attended?</ul>
<ul id="7" class="js-select-list-option">What was your first WoW character name?</ul>
<ul id="8" class="js-select-list-option">Name of your first pet?</ul>
</div></div>
<div class="js-select-list-bottom-controller" id="js-list-bottom-controller" align="center"><p></p>
</div>
</div>
</div>
<div class="control-group">
<label id="secretans-label" class="control-label" for="secretans">Secret Answer</label>
<div class="controls">
<input aria-labelledby="secretans-label" id="secretans" name="secretans" title="Secret Answer" maxlength="16" type="text" tabindex="1" class="input-block input-large" autocomplete="off" placeholder="Secret Answer" autocorrect="off" spellcheck="false"/>
</div>
</div>
<div class="persistWrapper">
<label id="persistLogin-label" class="checkbox-label css-label " for="persistLogin">
<input aria-labelledby="persistLogin-label" id="persistLogin" name="persistLogin" type="checkbox" tabindex="1"/>
<span class="input-checkbox"></span>I agree on the <a href="#">Terms of Use</a>
</label>
</div>
<div class="control-group submit ">
<button type="submit" id="submit" class="btn btn-primary btn-large btn-block " data-loading-text="" tabindex="1">Register Now<i class="spinner-battlenet"></i></button>
</div>
<ul id="help-links">
<li>
<a class="btn btn-block btn-large" rel="external" href="#" tabindex="1">Can't register?<i class="icon-external-link"></i></a>
</li>
</ul>
</form>
</div>
<footer class="footer footer-eu">
<div class="lower-footer-wrapper">
<div class="lower-footer">
<div id="copyright">
All rights reserved to © 2015 Blizzard Entertainment, Inc. Powered by FlameNET.
</div>
<div id="legal">
<span class="clear"><!-- --></span>
</div>
</div>
</div>
</footer>
</div>
<script src="assets/js/embedded-javascript/embed-0.1.5.min05b1.js?v=58-1"></script>
<script src="assets/js/toolkit/toolkit.min05b1.js?v=58-1"></script>
<script type="text/javascript" src="assets/js/login/global.min05b1.js?v=58-1"></script>
<script type="text/javascript" src="assets/js/login/login.min05b1.js?v=58-1"></script>
</body>
</html>