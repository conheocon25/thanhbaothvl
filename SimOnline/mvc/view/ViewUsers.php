<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();

	$tpl = new PHPTAL( "mvc/templates/ViewUsers.html");	
	$tpl->User  = @\MVC\Base\SessionRegistry::getCurrentUser();
	$tpl->Permission  = @\MVC\Base\SessionRegistry::getCurrentPermission();
	$tpl->Domains = $request->getObject("Domains");	
	$tpl->Users = $request->getObject("Users");
	$tpl->Title = $request->getProperty("Title");
	$tpl->isLogin = true;

	echo $tpl->execute();
?>
