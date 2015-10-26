<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'forumTutorial') or die(mysql_error());
	if (isSet($_GET['tid']) && isSet($_GET['rating'])) {
		$id = $_GET['tid'];
		$rating = $_GET['rating'];
		if ($rating > 5)
			$rating = 5;
		if ($rating < 1)
			$rating = 1;
		$qu = mysqli_query($con, "SELECT * FROM `threads` WHERE `id`='$id'") or die(mysql_error());
		if (mysqli_num_rows($qu) > 0) {
			$info = mysqli_fetch_array($qu) or die(mysql_error());
			$newRatings = $info['totalRatings']+1;
			$newTotal = $info['rating']+$rating;
			$q = mysqli_query($con, "UPDATE `threads` SET `rating`='$newTotal', `totalRatings`='$newRatings' WHERE `id`='$id'") or die(mysql_error());
			if ($q) {
				echo 'Updated ratings.';
			}else
				echo 'Failed updating ratings.';
		}
	}else
		echo 'Information not set correctly.';
?>
<html>
	<head></head>
	<body>
		<a href='forumTutorial.php'>Return to thread list.</a>
	</body>
</html>