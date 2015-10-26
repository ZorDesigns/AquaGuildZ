<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'forumTutorial');
	if (isSet($_POST['reg']) && isSet($_POST['user']) && isSet($_POST['pass']) && $_POST['user'] != '' && $_POST['pass'] != '') {
		$pass = $_POST['pass'];
		$passMD5 = md5($pass);
		$user = $_POST['user'];
		$q = mysqli_query($con, "SELECT * FROM `users` WHERE `username`='$user'");
		if (mysqli_num_rows($q) > 0) {
			echo 'That username is already taken.';
		}else{
			$qq = mysqli_query($con, "INSERT INTO `users` VALUES ('', '$user', '$passMD5')");
			if ($qq) {
				echo 'Registered successfully!';
			}else
				echo 'Failed to register.';
		}
	}
?>
<form action='register.php' method='POST'>
	<table>
		<tbody>
			<tr>
				<td>Username: </td><td><input type='text' name='user' /></td>
			</tr>
			<tr>
				<td>Password: </td><td><input type='password' name='pass' /></td>
			</tr>
			<tr>
				<td></td><td><input type='submit' value='Register' name='reg' /></td>
			</tr>
		</tbody>
	</table>
</form>