<?php
	/*require_once("encrypted.php" );
	$Encrypted = new ModelEncrypted("D:\\php.php");	
	$Encrypted->writeToFile();	
	$tt = $Encrypted->readFromFile($Encrypted->SizeFileConfig());
	print_r($tt);
	echo $Encrypted->decryptData($tt[0]);
	echo $Encrypted->decryptData($tt[1]);
	echo $Encrypted->decryptData($tt[2]);
	echo $Encrypted->decryptData($tt[3]);*/
	$key = '123appspncompanynumberone';
	
	//$dsn = "cafecom";			
	//$user = "spnmysql";
	//$pass = "123app321spncompany2012";
	
	$dsn = "mysql:host=localhost;dbname=a23app_customer";			
	$user = "a23app_userdb";
	$pass = "admin123456";
			
	$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $dsn, MCRYPT_MODE_CBC, md5(md5($key))));
	$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
	echo 'DNS Encrypted:' . "\n";
	var_dump($encrypted); 
	echo "\n";
	echo 'DNS Decrypted:' . "\n";
	var_dump($decrypted);
	echo "\n";
	$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $user, MCRYPT_MODE_CBC, md5(md5($key))));
	$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
	echo 'User Encrypted:' . "\n";
	var_dump($encrypted); 
	echo "\n";
	echo 'User Decrypted:' . "\n";
	echo "\n";
	var_dump($decrypted);
	$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $pass, MCRYPT_MODE_CBC, md5(md5($key))));
	$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
	echo "\n";
	echo 'Pass Encrypted:' . "\n";
	var_dump($encrypted); 
	echo "\n";
	echo 'Pass Decrypted:' . "\n";
	var_dump($decrypted);




?>
