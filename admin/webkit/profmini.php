<?php
include("../check.php");
?>
<li>
<!-- Profile Widget-->
<div class="widget-profile profile-in-header">
<button type="button" data-toggle="dropdown" class="btn dropdown-toggle"><span class="name"><?php echo $row['name']; ?></span><img src="img/profile/profile.gif"></button>
<ul role="menu" class="dropdown-menu">
<li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
<li class="power"><a href="../index.php"><i class="fa fa-th"></i>Back to site</a></li>
<li class="power"><a href="../logout.php"><i class="fa fa-power-off"></i>Sign Out</a></li>
</ul>
</div>
</li>