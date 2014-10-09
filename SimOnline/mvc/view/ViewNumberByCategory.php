<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();

	$tpl = new PHPTAL( "mvc/templates/ViewNumberByCategory.html");	
	$tpl->User  = @\MVC\Base\SessionRegistry::getCurrentUser();
	$tpl->Permission  = @\MVC\Base\SessionRegistry::getCurrentPermission();	
	$tpl->Networks = $request->getObject("Networks");
	$tpl->Orders = $request->getObject("Orders");
	$tpl->HotNumbers = $request->getObject("HotNumbers");
	$tpl->Pages = $request->getObject("Pages");
	$tpl->Numbers1 = $request->getObject("Numbers1");
	$tpl->Categorys = $request->getObject("Categorys");
	$tpl->Category = $request->getObject("Category");
	$tpl->Title = $request->getProperty("Title");
	$tpl->Title_Network = $request->getProperty("Title_Network");	
	$tpl->Title_Category = $request->getProperty("Title_Category");	
	$tpl->isLogin = true;

	echo $tpl->execute();
?>
