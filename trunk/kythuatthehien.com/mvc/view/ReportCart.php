<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();

	$tpl = new PHPTAL( "mvc/templates/ReportCart.html");
	$tpl->User  = @\MVC\Base\SessionRegistry::getCurrentUser();
	$tpl->Permission  = @\MVC\Base\SessionRegistry::getCurrentPermission();
	$tpl->isLogin = true;
	$tpl->Msg = $request->getProperty("Msg");
	$tpl->Orders = $request->getObject("Orders");
	$tpl->HotNumbers = $request->getObject("HotNumbers");
	$tpl->Networks = $request->getObject("Networks");
	$tpl->Categorys = $request->getObject("Categorys");
	$tpl->Title_Network = $request->getProperty("Title_Network");	
	$tpl->Title_Category = $request->getProperty("Title_Category");
	$tpl->ListNumber = $request->getObject("ListNumber");	
	$tpl->Title = $request->getProperty("Title");
	$tpl->ParentsLinked = $request->getProperty("ParentsLinked");	

	echo $tpl->execute();
?>
