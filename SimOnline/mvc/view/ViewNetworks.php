<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();

	$tpl = new PHPTAL( "mvc/templates/ViewNetworks.html");	
	$tpl->User  = @\MVC\Base\SessionRegistry::getCurrentUser();
	$tpl->Permission  = @\MVC\Base\SessionRegistry::getCurrentPermission();	
	$tpl->Networks = $request->getObject("Networks");
	$tpl->Categorys = $request->getObject("Categorys");
	$tpl->Title_Network = $request->getProperty("Title_Network");	
	$tpl->Title_Category = $request->getProperty("Title_Category");	
	$tpl->isLogin = true;

	echo $tpl->execute();
?>
