<?php

session_start();
if(!isset($_SESSION["user_id"])){
	// header("location:index.php");
}
$user_id_session=$_SESSION["user_id"];



?>

