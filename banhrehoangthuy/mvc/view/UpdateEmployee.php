<?php	
	require_once("mvc/base/ViewHelper.php");
	
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/UpdateEmployee.html");
	
	$Factory = $req->getObject('Factory');
	$Employee = $req->getObject('Employee');
	$tpl->Factory = $Factory;
	$tpl->Employee = $Employee;
		
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = "?cmd=ViewFactories";
<<<<<<< .mine
	
	$ses = \MVC\Base\SessionRegistry::instance();	
=======
			
	$ses = \MVC\Base\SessionRegistry::instance();	
>>>>>>> .r394
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;
	
	echo $tpl->execute();
?>