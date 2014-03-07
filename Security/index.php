<?php
	require_once("Encrypted.php" );
	
	$Encrypted = new Encrypted( "ktth", "ktth", "adminktth");	
	$Encrypted->writeStrConnection();	
	//$Encrypted->writeDBUser();	
	//$Encrypted->writeDBPass();	
	//$Encrypted->writeDBName();	
	
	//echo $Encrypted->Encrypted("123456");
	
	echo "please wait ...<br />";
	$data = $Encrypted->readStrConnection();
	$res = explode(" ", $data);
	echo $res[0] . "<br />";
	echo $res[1] . "<br />";
	echo $res[2] . "<br />";
	echo $res[3] . "<br />";
	
	
?>
