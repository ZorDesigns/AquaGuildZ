<?php
include("../check.php");
if($login_rank < 4)
{
die('
<meta http-equiv="refresh" content="2;url=wrong.php"/>
');
}
include('configs.php');
// Confirm that the Variable "ID" is SET!
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
// GET the Variable "ID" from the URL
$tid = $_GET['id'];
// Remove the User from the DB
if ($stmt = $aquaglz->prepare("UPDATE recruits SET type='Approved', approved='1' WHERE `id`='$tid'"))
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
header("Location: ../form.php");
}
else
// If ID is not set redirect again to Forums
{
header("Location: ../form.php");
}
?>