<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', 'password', 'gcms') or die(mysql_error());
	if (isSet($_POST['createThread'])) {
		if (isSet($_POST['title']) && $_POST['title'] != '' && isSet($_POST['description']) && $_POST['description'] != '' && isSet($_SESSION['username']) && $_SESSION['username'] != '' && isSet($_POST['tags']) && $_POST['tags'] != '') {
			$title = $_POST['title'];
			$description = $_POST['description'];
			$tags = $_POST['tags'];
			$tags = strtolower($tags);
			$user = $_SESSION['username'];
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
<html>
	<head></head>
	<body>
		<h1>Search:</h1>
		<form action='searchThreads.php' method='POST'>
			<table border='0'>
				<tbody>
					<tr>
						<td><input type='text' name='searchQuery' /></td>
					</tr>
					<tr>
						<td><input type='submit' value='Search' name='searchSent' /></td>
					</tr>
				</tbody>
			</table>
		</form>
		<h1>Create Thread:</h1>
		<form action='forumTutorial.php' method='POST'>
		<table>
			<tbody>
				<tr>
					<td>Title: </td><td><input type='text' name='title' /></td>
				</tr>
				<tr>
					<td>Description: </td><td><input type='text' name='description' /></td>
				</tr>
				<tr>
					<td>Tags: </td><td><input type='text' name='tags' /></td><td>Tags must be separated by a comma (,)</td>
				</tr>
				<tr>
					<td></td><td><input type='submit' value='Create Thread' name='createThread' /></td>
				</tr>
			</tbody>
		</table>
		</form>
		<br/>
		<h1>Threads:</h1>
		<table>
			<tbody>
				<?php
					$qu = mysqli_query($con, "SELECT * FROM `threads`");
					if (mysqli_num_rows($qu) > 0) {
						while ($row = mysqli_fetch_array($qu)) {
							$content = $row['content'];
							if (strlen($content) > 100) {
								$a = $content;
								$content = '';
								for($i=0;$i<100;$i++) {
									$content .= $a[$i];
								}
							}
							echo '<tr><td><a href="threadPage.php?tid='.$row["id"].'">'.$row["title"].'</td><td>'.$content.'...</td></tr>';
						}
					}else{
						echo '<tr><td>No threads found :(</tr></td>';
					}
				?>
			</tbody>
		</table>
		<br/>
		<table>
			<tbody>
				<?php echo $news; ?>
			</tbody>
		</table>
	</body>
</html>