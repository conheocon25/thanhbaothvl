<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();

	$tpl = new PHPTAL( "mvc/templates/Home.html");
	$tpl->User  = @\MVC\Base\SessionRegistry::getCurrentUser();
	$tpl->Permission  = @\MVC\Base\SessionRegistry::getCurrentPermission();	
	
	$tpl->Pages = "Pages";
	$tpl->Title = "Title";
	$tpl->ParentsLinked = "";
	$tpl->isLogin = true;

	echo $tpl->execute();
?>
