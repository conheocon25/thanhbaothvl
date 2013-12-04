<?php
	require_once("mvc/base/ViewHelper.php");	
	$request = VH::getRequest();
	
	$req = VH::getRequest();
	$User = $req->getObject('User');
	$App = $req->getObject('App');
	$Domains = $req->getObject('Domains');

	$tpl = new PHPTAL( "mvc/templates/main.html");
	
	if (isset($User)){
		$tpl->isLogin = true;
		$tpl->Domains = $Domains;
		$tpl->User  = $User;
	}
	else
		$tpl->isLogin = false;

	$tpl->App = $App;
	
	echo $tpl->execute();
?>
