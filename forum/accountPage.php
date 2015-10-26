<?php
	session_start();
	if (!isSet($_SESSION['username'])) {
		header("Location:login.php");
		exit();
		echo 'You must be logged in to access this page, redirecting...';
	}
	$con = mysqli_connect('localhost', 'root', '', 'forumTutorial');
	$threads = '<table><tbody>';
	$messages = '<table><tbody>';
	$user = $_SESSION['username'];
	$q = mysqli_query($con, "SELECT * FROM `messages` WHERE `to`='$user'");
	$q2 = mysqli_query($con, "SELECT * FROM `threads` WHERE `author`='$user'");
	if (mysqli_num_rows($q) > 0) {
		while ($row = mysqli_fetch_array($q)) {
			$messages .= '<tr><td>'.$row["message"].'</td><td>From: </td><td>'.$row["from"].'</td></tr>';
		}
	}
	if (mysqli_num_rows($q2) > 0) {
		while ($row = mysqli_fetch_array($q2)) {
			$threads .= '<tr><td><a href="threadPage.php?tid='.$row["id"].'">'.$row["title"].'</td></tr>';
		}
	}
	$messages .= '</tbody></table>';
	$threads .= '</tbody></table>';
	if (isSet($_POST['changePass']) && isSet($_POST['newPass']) && isSet($_POST['newPass2']) && isSet($_POST['curPass']) && $_POST['curPass'] != '' && $_POST['newPass'] != '' && $_POST['newPass2'] != '') {
		$new = $_POST['newPass'];
		$new2 = $_POST['newPass2'];
		if ($new == $new2) {
			$new = md5($new);
			$cur = $_POST['curPass'];
			$cur = md5($cur);
			$user = $_SESSION['username'];
			$q = mysqli_query($con, "SELECT * FROM `users` WHERE `username`='$user'");
			if (mysqli_num_rows($q) > 0) {
				$info = mysqli_fetch_array($q);
				echo $info['password'].' : '.$cur;
				if ($info['password'] == $cur) {
					$qq = mysqli_query($con, "UPDATE `users` SET `password`='$new' WHERE `username`='$user'") or die(mysql_error());
					if ($qq) {
						echo 'Updated password!';
					}else
						echo 'Failed to update your password.';
				}else
					echo 'Your entered current password was not correct. Please try again.';
			}else
				echo 'Your username was not found in our users database!';
		}else
			echo 'The two new passwords did not match. Please ensure they match and that the current password field is correct then try again.';
		
	}
?>
<html>
	<head></head>
	<body>
		<h1>My Threads:</h1>
		<?php echo $threads; ?>
		<br/>
		<h1>My Messages:</h1>
		<?php echo $messages; ?>
		<br/>
		<h1>Change Password:</h1>
		<form action='accountPage.php' method='POST'>
			<table>
				<tbody>
					<tr>
						<td>Current Password: </td><td><input type='text' name='curPass' /></td>
					</tr>
					<tr>
						<td>New Password: </td><td><input type='text' name='newPass' /></td>
					</tr>
					<tr>
						<td>New Password (confirm): </td><td><input type='text' name='newPass2' /></td>
					</tr>
					<tr>
						<td></td><td><input type='submit' value='Change Password' name='changePass' /></td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>