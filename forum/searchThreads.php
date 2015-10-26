<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'forumTutorial') or die(mysql_error());
	$returns = '<table><tbody>';
	$foundUsers = '<table><tbody>';
	if (isSet($_POST['searchSent']) && isSet($_POST['searchQuery']) && $_POST['searchQuery'] != '') {
		$s = $_POST['searchQuery'];
		$s = strtolower($s);
		$ss = explode(' ', $s);
		$q = mysqli_query($con, "SELECT * FROM `threads`");
		if (mysqli_num_rows($q) > 0) {
			while ($row = mysqli_fetch_array($q)) {
				$hasTag = false;
				if ($row['tags'] != '') {
					$tags = strtolower($row['tags']);
					for ($i=0;$i<count($ss);$i++) {
						if (strpos($tags, $ss[$i]) !== false) {
							$hasTag = true;
						}
					}
				}
				if ($hasTag) {
					$returns .= '<tr><td><a href="threadPage.php?tid='.$row["id"].'">'.$row["title"].'</a></td></tr>';
				}
			}
		}
		$sQ = $_POST['searchQuery'];
		$uQ = mysqli_query($con, "SELECT * FROM `users` WHERE `username`='$sQ'");
		if (mysqli_num_rows($uQ) > 0) {
			while ($row = mysqli_fetch_array($uQ)) {
				$user = $row['username'];
				$foundUsers .= '<tr><td><a href="userPage.php?username='.$user.'">'.$user.'</a></td></tr>';
			}
		}
	}
	$foundUsers .= '</tbody></table>';
	$returns .= '</tbody></table>';
?>
<html>
	<head></head>
	<body>
		<h1>Threads:</h1>
		<?php echo $returns; ?>
		<br/>
		<h1>Users:</h1>
		<?php echo $foundUsers; ?>
	</body>
</html>