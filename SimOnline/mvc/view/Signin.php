<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();
	
	$tpl = new PHPTAL( "mvc/templates/Signin.html");
	$tpl->App = $request->getObject('App');
	$tpl->Alert = $request->getProperty('Alert');

	$tpl->isLogin = false;

	echo $tpl->execute();

?>
