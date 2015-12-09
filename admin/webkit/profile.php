<?php
include("../check.php");
?>
<div class="widget-profile-2 profile-2-in-side-2 t-profile-2-3">
<div class="profile-2-wrapper" style="display: block;">
<div class="profile-2-details">
<div class="profile-2-img"><a href="#"><img src="img/profile/profile.gif"></a></div>
<ul class="profile-2-info">
<li>
<h3><?php echo $row['firstname']; ?></h3>
</li>
<li>Rank: <?php echo $row['rank']; ?></li>
<li>
<div class="btn-group btn-group-sm btn-group-justified">
<a role="button" title="Social Stats" class="toggle-stats btn btn-dark tt-top"><i class="fa fa-rss"></i></a>
<a role="button" title="Visitor Stats" class="toggle-visitors btn btn-dark tt-top"><i class="fa fa-area-chart"></i></a>
<a href="#" title="Edit Profile" class="btn btn-dark tt-top"><i class="fa fa-cogs"></i></a></div>
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