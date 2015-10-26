<?php
	session_start();
	if (!isSet($_SESSION['username'])) {
		header("Location:login.php");
		exit();
	}
	$con = mysqli_connect('localhost', 'root', '', 'forumTutorial');
	$threads = '<table><tbody>';
	if (isSet($_GET['username']) && $_GET['username'] != '') {
		$user = $_GET['username'];
		$q = mysqli_query($con, "SELECT * FROM `threads` WHERE `author`='$user'");
		if (mysqli_num_rows($q) > 0) {
			while ($row = mysqli_fetch_array($q)) {
				$threads .= '<tr><td><a href="threadPage.php?tid='.$row["id"].'">'.$row["title"].'</td></tr>';
			}
			$threads .= '</tbody></table>';
		}else
			$dontDisplay = true;
	}
	if (!isSet($dontDisplay) && isSet($_POST['messageSent']) && isSet($_POST['message']) && $_POST['message'] != '') {
		$message = $_POST['message'];
		$from = $_SESSION['username'];
		$to = $_GET['username'];
		$q = mysqli_query($con, "INSERT INTO `messages` VALUES ('', '$from', '$message', '$to')");
		if ($q) {
			echo 'Message sent.';
		}else
			echo 'Failed to send message, contact the site administrator.';
	}
	
	if (!isSet($dontDisplay)) {
	echo "
	<html>
		<head></head>
		<body>
			$threads
			<br/>
			<h1>Contact</h1>
			<form action='userPage.php?username=$user' method='POST'>
				<table>
					<tbody>
						<tr>
							<td>Message:</td><td><input type='text' name='message' /></td>
						</tr>
						<tr>
							<td></td><td><input type='submit' value='Send Message' name='messageSent' /></td>
						</tr>
						</tbody>
					</table>
				</form>
			</body>
		</html>";
	}else
		echo 'That user does not exist!';
?>