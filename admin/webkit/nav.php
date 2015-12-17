<?php if(isset($page_cat)){?>
<nav class="navigation">
<ul data-ason-type="menu" class="ason-widget">
<li class="<?php if($page_cat=='home') echo'active';?>"><a href="index.php"><i class="icon fa fa-dashboard"></i><span class="title">Dashboard</span></a>
</li>
<li class="<?php if($page_cat=='users') echo'active';?><?php if($page_cat=='rusers') echo'active';?><?php if($page_cat=='edituser') echo'active';?>">
<a href="#"><i class="icon fa fa-users"></i><span class="title">Users</span>
<span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">3</span></a>
<ul>
<li class="<?php if($page_cat=='users') echo'active';?>"><a href="users.php"><i class="icon fa fa-user"></i><span class="title">List Users</span></a></li>
<li class="<?php if($page_cat=='rusers') echo'active';?>"><a href="users.php"><i class="icon fa fa-user-times"></i><span class="title">Delete User</span></a></li>
<li class="<?php if($page_cat=='edituser') echo'active';?>"><a href="users.php"><i class="icon fa fa-user-plus"></i><span class="title">Edit User</span></a></li>
</li>
</ul>
<li class="<?php if($page_cat=='news') echo'active';?><?php if($page_cat=='lnews') echo'active';?><?php if($page_cat=='rnews') echo'active';?><?php if($page_cat=='enews') echo'active';?>">
<a href="#"><i class="icon fa fa-newspaper-o"></i><span class="title">News</span>
<span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">4</span></a>
<ul>
<li class="<?php if($page_cat=='news') echo'active';?>"><a href="news.php"><i class="icon fa fa-list"></i><span class="title">List Articles</span></a></li>
<li class="<?php if($page_cat=='lnews') echo'active';?>"><a href="edit-news.php"><i class="icon fa fa-plus-circle"></i><span class="title">Create Article</span></a></li>
<li class="<?php if($page_cat=='enews') echo'active';?>"><a href="news.php"><i class="icon fa fa-edit"></i><span class="title">Edit Article</span></a></li>
<li class="<?php if($page_cat=='rnews') echo'active';?>"><a href="news.php"><i class="icon fa fa-remove"></i><span class="title">Remove Article</span></a></li>
</li>
</ul>
<!--<li class="<?php if($page_cat=='forums') echo'active';?>">
<a href="#"><i class="icon fa fa-newspaper-o"></i><span class="title">Forums</span>
<span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">1</span></a>
<ul>
<li class="<?php if($page_cat=='forums') echo'active';?>"><a href="forum.php"><i class="icon fa fa-list"></i><span class="title">List Forums</span></a></li>
</li>
</ul>-->
<li class="<?php if($page_cat=='char') echo'active';?><?php if($page_cat=='prog') echo'active';?>">
<a href="#"><i class="icon fa fa-cogs"></i><span class="title">Functions</span>
<span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">2</span></a>
<ul>
<li class="<?php if($page_cat=='char') echo'active';?>"><a href="char.php"><i class="icon fa fa-user-secret"></i><span class="title">Add Character</span></a></li>
<li class="<?php if($page_cat=='prog') echo'active';?>"><a href="prog.php"><i class="icon fa fa-plus-square"></i><span class="title">Progress API</span></a></li>
</li>
</ul>
</ul>
</nav>
<?php } ?>