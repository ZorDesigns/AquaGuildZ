<!DOCTYPE html>
<html lang="en">
<head>
<title>AquaGuildZ | Error</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<!-- ===== FAVICON =====-->
<link rel="shortcut icon" href="admin/img/favicon.png">
<!-- ===== CSS =====-->
<!-- General-->
<link rel="stylesheet" href="admin/css/basic.css">
<link rel="stylesheet" href="admin/css/general.css">
<link rel="stylesheet" href="admin/css/theme.css" class="style-theme">
</head>
<body>
<?php include("settings/googletracking.php") ?>
<!--Main Content-->
<section id="error-bg" class="error-container">
<div id="error-particle" class="hide"></div>
<div class="error-403">
<div class="center-outer">
<div class="center-inner">
<div class="center-content error-403-content">
<h2 class="font-bold">Error <span>403</span></h2>
<h3 class="font-light">
Access forbidden!
</h3>
<div class="info">
<p>You don't have permission to access this page you silly!</p>
<p>You could also leave as fast as you can before we report you to the administrator!</p>
</div>
<div class="input-group">
<meta http-equiv="refresh" content="5;url=index.php"/>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- ===== JS =====-->
<!-- jQuery-->
<script src="admin/js/basic/jquery.min.js"></script>
<script src="admin/js/basic/jquery-migrate.min.js"></script>
<!-- General-->
<script src="admin/js/basic/modernizr.min.js"></script>
<script src="admin/js/basic/bootstrap.min.js"></script>
<script src="admin/js/shared/jquery.asonWidget.js"></script>
<script src="admin/js/plugins/plugins.js"></script>
<script src="admin/js/general.js"></script>
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
<script src="admin/js/plugins/pageprogressbar/pace.min.js"></script>
<!-- Specific-->
<script src="admin/js/plugins/errors/jquery.particleground.min.js"></script>
<script src="admin/js/calls/page.error.js"></script>
</body>
</html>