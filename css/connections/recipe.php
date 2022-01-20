<?php 

include_once("css/connections/connections.php");
$con = connection();

$rec = "SELECT * FROM `recipe`";
$user = $con->query($rec) or die ($con->error);
$recipe = $user->fetch_assoc();
?>