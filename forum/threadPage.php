<?php
	session_start();
	if (!isSet($_SESSION['email'])) {
		header("Location:login.php");
		exit();
	}
	$con = mysqli_connect('localhost', 'root', 'password', 'gcms') or die(mysql_error());
	$username;
	if (isSet($_SESSION['email']))
		$username = $_SESSION['email'];
	if (isSet($_POST['replySent']) && isSet($_POST['cont']) && $_POST['cont'] != '' && isSet($_GET['tid']) && $_GET['tid'] != '') {
		$cont = $_POST['cont'];
		$thread = $_GET['tid'];
		$user = $_SESSION['email'];
		$q = mysqli_query($con, "INSERT INTO `replies` VALUES ('', '$thread', '$cont', '$user')");
		$qu = mysqli_query($con, "SELECT * FROM `subscriptions` WHERE `threadID`='$thread'");
		if (mysqli_num_rows($qu) > 0) {
			$msg = 'A new reply has been submitted to a thread you have subscribed to. '.$user.' had this to say:<br/>'.$cont;
			while ($row = mysqli_fetch_array($qu)) {
				mail($row['email'], 'New Reply', $msg);
			}
		}
		if ($q) {
			echo 'Reply submitted.';
		}else
			echo 'Failed inserting reply.';
	}
	$replies = '';
	$id;
	$related = '<table><tbody><tr>';
	if (isSet($_GET['tid']) && $_GET['tid'] != '') {
		$id = $_GET['tid'];
		$query = mysqli_query($con, "SELECT * FROM `threads` WHERE `id`='$id'");
		if (mysqli_num_rows($query) > 0) {
			$info = mysqli_fetch_array($query);
			//Tags for related threads;
			$tagLine = $info['tags'];
			$tagLineNoSpaces = str_replace(" ", "", $tagLine);
			$tags = explode(",", $tagLineNoSpaces);
			$foundRelatedArticles = 0;
			$relatedArticleIDs = array();
			$relatedArticleTitles = array();
			$tagQ = mysqli_query($con, "SELECT * FROM `threads`");
			$tInfo = mysqli_fetch_array($tagQ);
			for ($t=0;$t<mysqli_num_rows($tagQ);$t++) {
				if ($foundRelatedArticles <= 2) {
					$ttQ = mysqli_query($con, "SELECT * FROM `threads` WHERE `id`='$t'");
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
			$qu = mysqli_query($con, "SELECT * FROM `replies` WHERE `threadID`='$id'");
			if (mysqli_num_rows($qu) > 0) {
				$replies = '<table><tbody>';
				while ($row = mysqli_fetch_array($qu)) {
					$replies .= '<tr><td>'.$row["content"].'</td><td>'.$row["author"].'</td></tr>';
				}
				$replies .= '</tr></tbody></table>';
			}
			$title = $info['title'];
			$content = $info['content'];
			$author = $info['author'];
		}else{
			echo 'fake tid.';
			$dontDisplay = true;
		}
	}else{
		echo 'fail tid.';
			$dontDisplay = true;
	}
	
	if (!isSet($dontDisplay)) {
	echo "
<html>
	<head></head>
	<body>
		<div>
			<h1>Rate Thread:</h1>
			<a href='rateThread.php?tid=$id]&rating=1'><p>1 Star</p></a>
			<a href='rateThread.php?tid=$id&rating=2'><p>2 Stars</p></a>
			<a href='rateThread.php?tid=$id&rating=3'><p>3 Stars</p></a>
			<a href='rateThread.php?tid=$id&rating=4'><p>4 Stars</p></a>
			<a href='rateThread.php?tid=$id&rating=5'><p>5 Stars</p></a>
		</div>
		<h3>";
			$qq = mysqli_query($con, "SELECT * FROM `threads` WHERE `id`='$id'");
			if (mysqli_num_rows($qq) > 0) {
				$info = mysqli_fetch_array($qq);
				$all = $info['rating'];
				$total = $info['totalRatings'];
				if ($all == 0 || $all == null || $total == 0 || $total == null) {
					echo 'No ratings have yet been given for this thread.';
				}else {
					$average = $all / $total;
					echo 'Average Rating: '.$average;
				}
			}
		 echo "</h3>
		<h1>$title</h1>
		<p>$content</p>
		<br/>
		<p>By $author</p>
		<br/>
		";
		echo $related;
		echo "
		<h1>Leave a Reply:</h1>
		<form action="; echo 'threadPage.php?tid='.$_GET['tid']; echo " method='POST'>
			<table>
				<tbody>
					<tr>
						<td>Name: </td><td>$username</td>
					</tr>
					<tr>
						<td>Message: </td><td><input type='text' name='cont' /></td>
					</tr>
					<tr>
						<td></td><td><input type='submit' value='Post Reply' name='replySent' /></td>
					</tr>
				</tbody>
			</table>
		</form>
		<br/>";
				if (isSet($_SESSION['email'])) {
					echo '<form action="subPage.php?tid='.$_GET['tid'].'" method="POST"><h1>Subscribe to Thread:</h1>Email: <input type="text" name="email" /><br/><input type="submit" name="subscribe" value="Subscribe" />';
				}
			echo "
			<br/>
			$replies
		</body>
	</html>
	";
	}
?>