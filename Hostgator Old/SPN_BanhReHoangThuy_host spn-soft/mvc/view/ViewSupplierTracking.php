<?php	
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();
	$tpl = new PHPTAL( "mvc/templates/ViewSupplierTracking.html");
		
	
		
	$tpl->DateStart = $req->getProperty('DateStart');
	$tpl->DateEnd = $req->getProperty('DateEnd');
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = "?cmd=ViewSuppliers";
	
	$tpl->isLogin = true;
	echo $tpl->execute();		
?>