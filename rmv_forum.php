<?php
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
if (isset($_GET['tid']) && is_numeric($_GET['tid']))
{
// GET the Variable "ID" from the URL
$tid = $_GET['tid'];
// Remove the User from the DB
if ($stmt = $aquaglz->prepare("DELETE FROM threads WHERE id = $tid LIMIT 1"))
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