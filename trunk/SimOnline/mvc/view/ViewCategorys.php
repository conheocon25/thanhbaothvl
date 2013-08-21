<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();

	$tpl = new PHPTAL( "mvc/templates/ViewCategorys.html");	
	$tpl->User  = @\MVC\Base\SessionRegistry::getCurrentUser();
	$tpl->Permission  = @\MVC\Base\SessionRegistry::getCurrentPermission();	
	$tpl->Categorys = $request->getObject("Categorys");
	$tpl->Title = $request->getProperty("Title");	
	$tpl->isLogin = true;

	echo $tpl->execute();
?>
