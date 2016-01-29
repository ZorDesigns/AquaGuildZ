<?php
include('configs.php');
// Confirm that the Variable "ID" is SET!
if (isset($_GET['rid']) && is_numeric($_GET['rid']))
{
// GET the Variable "ID" from the URL
$rid = $_GET['rid'];
// Remove the User from the DB
if ($stmt = $aquaglz->prepare("DELETE FROM replies WHERE id = $rid LIMIT 1"))
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
// Redirect to Forums if successfull
header("Location: forums.php");
}
else
// If ID is not set redirect again to Forums
{
header("Location: forums.php");
}
?>