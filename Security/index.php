<?php
	require_once("Encrypted.php" );
	
	$Encrypted = new Encrypted( "ktth", "root", "admin123456");	
	$Encrypted->writeDNS();	
	$Encrypted->writeDBUser();	
	$Encrypted->writeDBPass();	
	$Encrypted->writeDBName();	
	
	echo $Encrypted->Encrypted("123456");
	
	echo "please wait ...<br />";
	
	echo $Encrypted->readDNS() . "<br />";
	echo $Encrypted->readDBUser() . "<br />";
	echo $Encrypted->readDBPass() . "<br />";
	echo $Encrypted->readDBName() . "<br />";
	
?>
