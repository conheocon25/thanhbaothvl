<?php
	require_once("Encrypted.php" );
	//require_once("smtp.php" );
	$Encrypted = new Encrypted();	
	$Encrypted->writeToFile();	
	$tt = $Encrypted->readFromFile($Encrypted->SizeFileConfig());
	print_r($tt);
	echo $Encrypted->decryptData($tt[0]);
	echo $Encrypted->decryptData($tt[1]);
	echo $Encrypted->decryptData($tt[2]);
	echo $Encrypted->decryptData($tt[3]);
	
	//SendMail("admin@123app.net","thanhbao2007vl@gmail.com","Test Thu nghiem","Chúng ta thanh cong");
?>
