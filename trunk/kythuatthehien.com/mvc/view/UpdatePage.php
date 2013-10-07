<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();

	$tpl = new PHPTAL( "mvc/templates/UpdatePage.html");
	$tpl->User  = @\MVC\Base\SessionRegistry::getCurrentUser();
	$tpl->Permission  = @\MVC\Base\SessionRegistry::getCurrentPermission();
	$tpl->Title = $request->getProperty("Title");
	$tpl->Page = $request->getObject("Page");
	$tpl->ParentsLinked = $request->getProperty("ParentsLinked");
	$tpl->isLogin = true;

	echo $tpl->execute();
?>
