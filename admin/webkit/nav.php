<?php if(isset($page_cat)){?>
<nav class="navigation">
<ul data-ason-type="menu" class="ason-widget">
<li class="<?php if($page_cat=='home') echo'active';?>"><a href="index.php"><i class="icon fa fa-dashboard"></i><span class="title">Dashboard</span></a>
</li>
<li class="<?php if($page_cat=='char') echo'active';?><?php if($page_cat=='prog') echo'active';?>"><a href="#"><i class="icon fa fa-cogs"></i><span class="title">Functions</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">2</span></a>
<ul>
<li class="<?php if($page_cat=='char') echo'active';?>"><a href="char.php"><span class="title">Add Character</span></a></li>
<li class="<?php if($page_cat=='prog') echo'active';?>"><a href="prog.php"><span class="title">Progress API</span></a></li>
</li>
</ul>
</ul>
</nav>
<?php } ?>