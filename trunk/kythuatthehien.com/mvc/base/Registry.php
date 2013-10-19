<?php	
	namespace MVC\Base;	
	require_once( "mvc/base/controller/AppController.php");
	
	date_default_timezone_set('Asia/Ho_Chi_Minh');		
	/*--------------------------------------------------------------------------------*/	
	abstract class Registry { 
		abstract protected function get( $key );
		abstract protected function set( $key, $val );
	} 
	
	/*--------------------------------------------------------------------------------*/
	class SessionRegistry extends Registry { 
		private static $instance; 
		
		private function __construct() { 
			session_start(); 
		}
		
 		static function instance() { 
			if ( ! isset(self::$instance) ) { self::$instance = new self(); } 
				return self::$instance;          
		} 
 
		protected function get( $key ) { 
			if ( isset( $_SESSION[__CLASS__][$key] ) ) { 
				return $_SESSION[__CLASS__][$key]; 
			} 
			return null; 
		}  
		protected function set( $key, $val ) { 
			$_SESSION[__CLASS__][$key] = $val; 
		} 
		//Quản lí Page
		function setCurrentPage( $value ) { 
			self::instance()->set('ktth_CurrentPage', $value); 
		}
		function getCurrentPage( ) { 
			return self::instance()->get('ktth_CurrentPage');
		}
				
		//Quản lí IdDomain
		function setCurrentDomain( $value ) { 
			self::instance()->set('ktth_IdDomain', $value); 
		}
		function getCurrentDomain( ) { 
			return self::instance()->get('ktth_IdDomain');
		}
				
		//Quản lí ngày tháng lọc thông tin
		function setCurrentDate( $value ) { 
			self::instance()->set('ktth_CurrentDate', $value ); 
		}
		function getCurrentDate( ) { 
			return self::instance()->get('ktth_CurrentDate');
		}
		function setCurrentMonth( $value ) { 
			self::instance()->set('ktth_CurrentMonth', $value ); 
		}
		function getCurrentMonth( ) { 
			return self::instance()->get('ktth_CurrentMonth');
		}
		
		function setCurrentYear( $value ) { 
			self::instance()->set('ktth_CurrentYear', $value ); 
		}
		function getCurrentYear( ) { 
			return self::instance()->get('ktth_CurrentYear');
		}
		
		//Quản lí User
		function setCurrentUser( $user ) {
			return self::instance()->set('ktth_CurrentUser', $user);
		}
		function getCurrentUser() {
			return self::instance()->get('ktth_CurrentUser');
		}
		
		function setCurrentIdUser( $user ) {
			return self::instance()->set('ktth_CurrentIdUser', $user);
		}
		function getCurrentIdUser() {
			return self::instance()->get('ktth_CurrentIdUser');
		}
		
		function setCurrentPermission( $permission ) {
			return self::instance()->set('ktth_CurrentPermission', $permission);
		}
		function getCurrentPermission() {
			return self::instance()->get('ktth_CurrentPermission');
		}
		
		function setCurrentCaptchaCode( $CaptchaCode ) {
			return self::instance()->set('ktth_CurrentCaptchaCode', $CaptchaCode);
		}
		function getCurrentCaptchaCode() {
			return self::instance()->get('ktth_CurrentCaptchaCode');
		}
	}
	/*--------------------------------------------------------------------------------*/
	class RequestRegistry extends Registry { 
		private $values = array(); 
		private static $instance; 
 
		private function __construct() {} 
		static function instance() { 
			if ( ! isset(self::$instance) ) { self::$instance = new self(); } 
				return self::$instance; 
		} 
 
		protected function get( $key ) { 
			if ( isset( $this->values[$key] ) ) { 
				return $this->values[$key]; 
			} 
			return null; 
		} 
 
		protected function set( $key, $val ) { 
			$this->values[$key] = $val; 
		} 
 
		static function getRequest() { 
			return self::instance()->get('request'); 
		} 
 
		static function setRequest( \MVC\Controller\Request $request ) { 
			return self::instance()->set('request', $request ); 
		}
	}
	
	/*--------------------------------------------------------------------------------*/
	class ApplicationRegistry extends Registry {
		private static $instance;
		private $freezedir = "data";
		private $values = array();
		private $mtimes = array();

		private function __construct() { }

		static function instance() {
			if ( ! isset(self::$instance) ) { self::$instance = new self(); }
			return self::$instance;
		}

		protected function get( $key ) {
			$path = $this->freezedir . DIRECTORY_SEPARATOR . $key;
			if ( file_exists( $path ) ) {
				clearstatcache();
				$mtime=filemtime( $path );
				if ( ! isset($this->mtimes[$key] ) ) { $this->mtimes[$key]=0; }
				if ( $mtime > $this->mtimes[$key] ) {
					$data = file_get_contents( $path );
					$this->mtimes[$key]=$mtime;
					return ($this->values[$key]=unserialize( $data ));
				}
			}
			if ( isset( $this->values[$key] ) ) {
				return $this->values[$key];
			}
			return null;
		}

		protected function set( $key, $val ) {
			$this->values[$key] = $val;
			$path = $this->freezedir . DIRECTORY_SEPARATOR . $key;
			file_put_contents( $path, serialize( $val ) );
			$this->mtimes[$key]=time();
		}
		
		static function setInfo( $info ) {
			return self::instance()->set('info', $info);
		}
		static function getInfo() {
			return self::instance()->get('info');
		}
			
		static function getDSN() {
			return self::instance()->get('dsn');
		}
		static function setDSN( $dsn ) {
			return self::instance()->set('dsn', $dsn);
		}
		/*
		static function setUser( \MVC\Domain\User $user ) {
			return self::instance()->set('user', $user);
		}
		static function getUser() {
			return self::instance()->get('user');
		}
		*/
		static function setControllerMap( \MVC\Controller\ControllerMap $map  ) {
			self::instance()->set( 'cmap', $map );
		}

		static function getControllerMap() {
			return self::instance()->get( 'cmap' );
		}

		static function appController() {
						
			$obj = self::instance();
			if ( ! isset( $obj->appController ) ) {
				$cmap = $obj->getControllerMap();
				$obj->appController = new \MVC\Controller\AppController( $cmap );
			}
			return $obj->appController;
		}
	}
	
	/*--------------------------------------------------------------------------------*/
	class MemApplicationRegistry extends Registry {
		private static $instance;
		private $values=array();
		private $id;
		const DSN=1;

		private function __construct() {
			$this->id = @shm_attach(55, 10000, 0600);
			if ( ! $this->id ) {
				throw new Exception("could not access shared memory");
			}
		}

		static function instance() {
			if ( ! isset(self::$instance) ) { self::$instance = new self(); }
			return self::$instance;
		}

		protected function get( $key ) {
			return shm_get_var( $this->id, $key );
		}

		protected function set( $key, $val ) {
			return shm_put_var( $this->id, $key, $val );
		}

		static function getDSN() {
			return self::instance()->get(self::DSN);
		}

		static function setDSN( $dsn ) {
			return self::instance()->set(self::DSN, $dsn);
		}

	}	
?>
