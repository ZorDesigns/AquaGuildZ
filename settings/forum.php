<?php
	require('configs.php');
	session_start();
	if (!isSet($_SESSION['email'])) {
		header("Location:login.php");
		exit();
	}
	$email;
	$q = false;
	if (isSet($_SESSION['email']))
	if (isSet($_POST['replySent']) && isSet($_POST['cont']) && $_POST['cont'] != '' && isSet($_GET['tid']) && $_GET['tid'] != '') {
		$aquaglzt = $_POST['cont'];
		$thread = $_GET['tid'];
			$usern = $_SESSION['email'];
			$q = mysqli_query($aquaglz, "INSERT INTO `replies` VALUES ('', '$thread', '', '$aquaglzt', '$usern', NOW())");
		$qu = mysqli_query($aquaglz, "SELECT * FROM `subscriptions` WHERE `threadID`='$thread'");
		if (mysqli_num_rows($qu) > 0) {
			$msg = 'A new reply has been submitted to a thread you have subscribed to. '.$user.' had this to say:<br/>'.$aquaglzt;
			while ($row = mysqli_fetch_array($qu)) {
				mail($row['email'], 'New Reply', $msg);
			}
		}
		if ($q) {
	echo "<script type= 'text/javascript'>alert('Your Reply has been posted! We are redirecting you!');</script>";
	echo '<meta http-equiv="refresh"content="2;url=thread.php?tid='.$_GET['tid'].'">';
		}else
	echo '<meta http-equiv="refresh"content="2;url=ffail.php">';
}
	$replies = '';
	$id;
	$related = '<table><tbody><tr>';
	if (isSet($_GET['tid']) && $_GET['tid'] != '') {
		$id = $_GET['tid'];
		$query = mysqli_query($aquaglz, "SELECT * FROM `threads` WHERE `id`='$id'");
		if (mysqli_num_rows($query) > 0) {
			$info = mysqli_fetch_array($query);
			//Tags for related threads;
			$tagLine = $info['tags'];
			$tagLineNoSpaces = str_replace(" ", "", $tagLine);
			$tags = explode(",", $tagLineNoSpaces);
			$foundRelatedArticles = 0;
			$relatedArticleIDs = array();
			$relatedArticleTitles = array();
			$tagQ = mysqli_query($aquaglz, "SELECT * FROM `threads`");
			$tInfo = mysqli_fetch_array($tagQ);
			for ($t=0;$t<mysqli_num_rows($tagQ);$t++) {
				if ($foundRelatedArticles <= 2) {
					$ttQ = mysqli_query($aquaglz, "SELECT * FROM `threads` WHERE `id`='$t'");
					$ttInfo = mysqli_fetch_array($ttQ);
					$tTagLine = $ttInfo['tags'];
					$tTagLineNoSpaces = str_replace(" ", "", $tTagLine);
					$tTags = explode(",", $tTagLineNoSpaces);
					$hasAdded = false;
					for ($i=0;$i<count($tags);$i++) {
						if (!$hasAdded) {
							for($tt = 0;$tt < count($tTags);$tt++) {
								if ($tags[$i] == $tTags[$tt] && $ttInfo['id'] != $id) {
									$foundRelatedArticles++;
									array_push($relatedArticleIDs, $ttInfo['id']);
									array_push($relatedArticleTitles, $ttInfo['title']);
									$hasAdded = true;
								}
							}
						}
					}
				}
			}
			for($fi=0;$fi<$foundRelatedArticles;$fi++) {
				$related .= '<td><a href="threadPage.php?tid='.$relatedArticleIDs[$fi].'">'.$relatedArticleTitles[$fi].'</a></td>';
			}
			$related .= '</tbody></table>';
			//End tags
			$title = $info['title'];
			$aquaglztent = $info['content'];
			$author = $info['author'];
			$date = $info['last_date'];
		}else{
			echo '';
			$dontDisplay = true;
		}
	}else{
		echo '';
			$dontDisplay = true;
	}
	$news = '';
	$nq = mysqli_query($aquaglz, "SELECT * FROM (SELECT * FROM `threads` ORDER BY `id` DESC LIMIT 3) t ORDER BY `id` ASC");
	if (mysqli_num_rows($nq) > 0) {
		while ($row = mysqli_fetch_array($nq)) {
			$news .= '<tr><td><a href="threadPage.php?tid='.$row["id"].'">'.$row["title"].'</td><td>'.$row["content"].'</td></tr>';
		}
	}
?>