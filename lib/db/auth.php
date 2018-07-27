

<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: ../examples/sign-in.php");
exit(); }

$id_taska=$_SESSION['id_taska'];
?>
