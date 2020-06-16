<?php
	//session缓存11
	session_start();
	$_SESSION['id'] = null;
	header("Location:index.php");

?>