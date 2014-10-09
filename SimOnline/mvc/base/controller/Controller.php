<?php
	namespace MVC\Controller;
	
	require_once("mvc/base/controller/ApplicationHelper.php");
	require_once("mvc/base/controller/Request.php");		
	class Controller { 
		private $applicationHelper; 
		private function __construct() {} 
 
		static function run() { 
			$instance = new Controller(); 
			$instance->init(); 
			$instance->handleRequest(); 
		}
		
		function init() { 			
			$applicationHelper = ApplicationHelper::instance(); 
			$applicationHelper->init(); 
		} 
 				
		function handleRequest() {
			$request = new Request();
			$app_c = \MVC\Base\ApplicationRegistry::appController();
						
			@$User = \MVC\Base\SessionRegistry::getCurrentUser();
			
			while( $cmd = $app_c->getCommand( $request ) ) {
					$cmd->execute( $request );					
				}
			/*
			if (isset($User) && $User != ""){								
				
			}else{
				$request->setProperty('cmd','Signin');
				while( $cmd = $app_c->getCommand( $request ) ) {
					$cmd->execute( $request );
				}
			}
			*/
			$this->invokeView( $app_c->getView( $request ) );
		}
		function invokeView( $target ) {
			require( "mvc/view/$target.php" );
			exit;
		}
	}	
	/*------------------------------------------------------------------------------------*/
	
?>
