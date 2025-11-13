<?php
session_start();
$_SESSION["sesNama"] = $_GET["txtNama"];
$_SESSION["sesEmail"] = $_GET["txtEmail"];
$_SESSION["sesPesan"] = $_GET["txtPesan"];
header("location: get.php");

?>