<?php		
	namespace MVC\Command;
	require_once("mvc/base/Command.php");
	class Main extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
						
			$mUser = new \MVC\Mapper\User();
			$User = $mUser->find(1);
			$ses = \MVC\Base\SessionRegistry::instance();			
			$ses->setCurrentUser($User);			
			$request->setObject('User', $User);
			//
			//$mDomain = new \MVC\Mapper\Domain();
			//$Domains = $mDomain->findAll();
			//$request->setObject('Domains', $Domains);

			return self::statuses('CMD_DEFAULT');
		}
	}
?>
