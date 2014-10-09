<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();

	$tpl = new PHPTAL( "mvc/templates/Search.html");	
	$tpl->User  = @\MVC\Base\SessionRegistry::getCurrentUser();
	$tpl->Permission  = @\MVC\Base\SessionRegistry::getCurrentPermission();	
	$tpl->Orders = $request->getObject("Orders");
	$tpl->Numbers = $request->getObject("Numbers");
	$tpl->Number1s = $request->getObject("Number1s");
	$tpl->Networks = $request->getObject("Networks");
	$tpl->Categorys = $request->getObject("Categorys");
	$tpl->HotNumbers = $request->getObject("HotNumbers");
	$tpl->Title_Network = $request->getProperty("Title_Network");	
	$tpl->Title_Category = $request->getProperty("Title_Category");
	//print_r($request->getObject("Numbers"));
	$tpl->Pages = $request->getObject("Pages");
	$tpl->Title = $request->getProperty("Title");	
	$tpl->isLogin = true;

	echo $tpl->execute();
?>
