<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();

	$tpl = new PHPTAL( "mvc/templates/ViewPages.html");	
	$tpl->User  = @\MVC\Base\SessionRegistry::getCurrentUser();
	$tpl->Permission  = @\MVC\Base\SessionRegistry::getCurrentPermission();	
	$tpl->Pages = $request->getObject("Pages");
	$tpl->Title = $request->getProperty("Title");	
	$tpl->isLogin = true;

	echo $tpl->execute();
?>
