<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', 'password', 'gcms') or die(mysql_error());
	if (isSet($_POST['createThread'])) {
		if (isSet($_POST['title']) && $_POST['title'] != '' && isSet($_POST['description']) && $_POST['description'] != '' && isSet($_SESSION['email']) && $_SESSION['email'] != '' && isSet($_POST['tags']) && $_POST['tags'] != '') {
			$title = $_POST['title'];
			$description = $_POST['description'];
			$tags = $_POST['tags'];
			$tags = strtolower($tags);
			$user = $_SESSION['email'];
			$q = mysqli_query($con, "INSERT INTO `threads` VALUES ('', '$title', '$description', '$user', '0', '0', '$tags')") or die(mysql_error());
			if ($q) {
				echo 'Thread created.';
			}else
				echo 'Failed to create thread.';
		}
	}
	$news = '';
	$nq = mysqli_query($con, "SELECT * FROM (SELECT * FROM `threads` ORDER BY `id` DESC LIMIT 3) t ORDER BY `id` ASC");
	if (mysqli_num_rows($nq) > 0) {
		while ($row = mysqli_fetch_array($nq)) {
			$news .= '<tr><td><a href="threadPage.php?tid='.$row["id"].'">'.$row["title"].'</td><td>'.$row["content"].'</td></tr>';
		}
	}
?>