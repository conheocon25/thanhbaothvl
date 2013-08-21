<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();

	$tpl = new PHPTAL( "mvc/templates/ViewOrders.html");
	$tpl->User  = @\MVC\Base\SessionRegistry::getCurrentUser();
	$tpl->Permission  = @\MVC\Base\SessionRegistry::getCurrentPermission();	
	$tpl->Orders = $request->getObject("Orders");
	$tpl->Title = $request->getProperty("Title");
	//$tpl->ParentsLinked = $request->getProperty("ParentsLinked");
	$tpl->isLogin = true;

	echo $tpl->execute();
?>
