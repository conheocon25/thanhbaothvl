<?php
	session_start();
	if(isset($_SESSION["UID"]))
	{
		unset($_SESSION["UID"]);
		session_destroy();
		$PHP_SELF = "../index.php";
		header("Location: $PHP_SELF");
	}	
?>

