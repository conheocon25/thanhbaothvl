<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();

	$tpl = new PHPTAL( "mvc/templates/SearchByPrice.html");	
	$tpl->User  = @\MVC\Base\SessionRegistry::getCurrentUser();
	$tpl->Permission  = @\MVC\Base\SessionRegistry::getCurrentPermission();	
	$tpl->Numbers = $request->getObject("Numbers");
	$tpl->Orders = $request->getObject("Orders");
	$tpl->HotNumbers = $request->getObject("HotNumbers");
	$tpl->Networks = $request->getObject("Networks");
	$tpl->Categorys = $request->getObject("Categorys");
	$tpl->Title_Network = $request->getProperty("Title_Network");	
	$tpl->Title_Category = $request->getProperty("Title_Category");
	$tpl->Number1s = $request->getObject("Number1s");
	//print_r($request->getObject("Numbers"));
	$tpl->Pages = $request->getObject("Pages");
	$tpl->Title = $request->getProperty("Title");	
	$tpl->isLogin = true;

	echo $tpl->execute();
?>
