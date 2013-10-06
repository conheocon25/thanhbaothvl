<?php
	session_start();	
	require_once 'PDOConnection.php';
	ini_set(‘session.gc_maxlifetime’,60);
	$UID = $_POST['user_'];	
	$UPW = $_POST['name_'];	
	
	$mPDO = new PDOConnection();	
	$result = $mPDO->checkUser($UID, $UPW);	
	if( $result != 0)	
	{
		$_SESSION["UID"]=$UID;					
		//HTTP::redirect("../index.php");
		$PHP_SELF = "viewhotnumber.php";
		header("Location: $PHP_SELF");
	}
	else
	{			
		$PHP_SELF = "index.php";
		header("Location: $PHP_SELF");
	}

?>