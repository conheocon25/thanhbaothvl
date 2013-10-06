<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
	
	// create a new template object	
	
	
	$connetionPDO = new PDOConnection();
	
	if ($_SESSION["UID"] != "")
	{		
		$UserName = $_SESSION["UID"];
	}
	
	if (!isset($_GET['id']))
	{
		$_GET['id'] = null;
	}
	if (($_GET['id'] != "") && ($_SESSION["UID"] != ""))
	{	
		$result = $connetionPDO->InsertPhoneHotNumber($_GET['id']);
		if($result == true)
		{
			$PHP_SELF = "../Command/viewhotnumber.php";
			header("Location: $PHP_SELF");
		}		
	}
	else
	{	
		$PHP_SELF = "../index.php";
		header("Location: $PHP_SELF");
	}
?>