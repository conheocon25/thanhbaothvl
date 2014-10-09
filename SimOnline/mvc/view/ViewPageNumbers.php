<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();

	$tpl = new PHPTAL( "mvc/templates/ViewPageNumbers.html");	
	$tpl->User  = @\MVC\Base\SessionRegistry::getCurrentUser();
	$tpl->Permission  = @\MVC\Base\SessionRegistry::getCurrentPermission();	
	$tpl->Page = $request->getObject("Page");
	$tpl->PNs = $request->getObject("PNs");
	$tpl->Title = $request->getProperty("Title");
	$tpl->InsertLinked = $request->getProperty("InsertLinked");
	$tpl->InsertLinked1 = $request->getProperty("InsertLinked1");
	$tpl->isLogin = true;

	echo $tpl->execute();
?>
