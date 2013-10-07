<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();

	$tpl = new PHPTAL( "mvc/templates/InsertPageNumber1.html");
	$tpl->User  = @\MVC\Base\SessionRegistry::getCurrentUser();
	$tpl->Permission  = @\MVC\Base\SessionRegistry::getCurrentPermission();
	$tpl->Title = $request->getProperty("Title");
	$tpl->CurrentNetwork = $request->getProperty("CurrentNetwork");
	$tpl->Networks = $request->getObject("Networks");
	$tpl->ParentsLinked = $request->getProperty("ParentsLinked");
	$tpl->isLogin = true;

	echo $tpl->execute();
?>
