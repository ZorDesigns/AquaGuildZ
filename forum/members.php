<?php
	session_start();
	if (!isSet($_SESSION['username'])) {
		header("Location:login.php");
		exit();
	}
	$con = mysqli_connect('localhost', 'root', '', 'forumTutorial') or die(mysql_error());
	$q = mysqli_query($con, "SELECT * FROM `users`");
	if (mysqli_num_rows($q) > 0) {
		$list = '<table><tbody>';
		while ($row = mysqli_fetch_array($q)) {
			$list .= '<tr><td><a href="userPage.php?username='.$row["username"].'">'.$row["username"].'</a></td></tr>';
		}
		$list .= '</tbody></table>';
	}
?>
<html>
	<head></head>
	<body>
		<?php if (isSet($list)){ echo $list; } ?>
	</body>
</html>