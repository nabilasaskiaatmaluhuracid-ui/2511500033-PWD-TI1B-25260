<?php
session_start();
$_SESSION["sesNama"] = $_POST["txtNama"];
$_SESSION["sesEmail"] = $_POST["txtEmail"];
$_SESSION["sesPesan"] = $_POST["txtPesan"];
header("location: post.php");

?>