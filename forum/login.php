<?php
	session_start();
	if (isSet($_SESSION['email'])) {
		header("Location:forumTutorial.php");
		exit();
		echo "You are already logged in, redirecting to thread list/index page...";
	}
	$con = mysqli_connect('localhost', 'root', 'password', 'gcms');
	if (isSet($_POST['login']) && isSet($_POST['email']) && isSet($_POST['pass']) && $_POST['email'] != '' && $_POST['pass'] != '') {
		$pass = $_POST['pass'];
		$passMD5 = md5($pass);
		$email = $_POST['email'];
		$q = mysqli_query($con, "SELECT * FROM `email` WHERE `email`='$email'");
		if (mysqli_num_rows($q) > 0) {
			$info = mysqli_fetch_array($q);
			$storedPassword = $info['password'];
			if ($storedPassword == $passMD5) {
				$_SESSION['email'] = $email;
				header("Location:forumTutorial.php");
				exit();
				echo 'Logged in!';
			}else
				echo 'Password was incorrect. Please try again.';
		}else
			echo 'That email was not found. Please try again.';
	}
?>
<html>
	<head></head>
	<body>
		<form action='login.php' method='POST'>
			<table>
				<tbody>
					<tr>
						<td>email: </td><td><input type='email' name='email' /></td>
					</tr>
					<tr>
						<td>Password: </td><td><input type='password' name='pass' /></td>
					</tr>
					<tr>
						<td></td><td><input type='submit' value='Log in' name='login' /></td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>
