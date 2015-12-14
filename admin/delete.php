<?php
include("../check.php");
if($login_rank <= 2)
{
die('
<meta http-equiv="refresh" content="2;url=wrong.php"/>
');
}

include('../configs.php');
// Confirm that the Variable "ID" is SET!
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
// GET the Variable "ID" from the URL
$id = $_GET['id'];
// Remove the User from the DB
if ($stmt = $aquaglz->prepare("DELETE FROM users WHERE uid = $id LIMIT 1"))
{
$stmt->bind_param("i",$id);
$stmt->execute();
$stmt->close();
}
else
{
echo "ERROR: could not prepare SQL statement.";
}
$aquaglz->close();
// Redirect to Users if successfull
header("Location: users.php");
}
else
// If ID is not set redirect again to Users
{
header("Location: users.php");
}
?>