<?php
namespace MVC\Domain;
if ( ! isset( $EG_DISABLE_INCLUDES ) ) {
	require_once( "mvc/mapper/App.php" );
	require_once( "mvc/mapper/User.php" );
	require_once( "mvc/mapper/Category.php" );
	require_once( "mvc/mapper/SalaryDaily.php" );
	require_once( "mvc/mapper/Positions.php" );	
	require_once( "mvc/mapper/News.php" );
	require_once( "mvc/mapper/Config.php" );
	require_once( "mvc/mapper/Guest.php" );
	
}

class HelperFactory {
    static function getFinder( $type ) {
        $type = preg_replace( "/^.*_/", "", $type );
        $mapper = "\\MVC\\Mapper\\{$type}";
        if ( class_exists( $mapper ) ) {
            return new $mapper();
        }
        throw new \MVC\Base\AppException( "Không biết: $mapper" );
    }

    static function getCollection( $type ) {
        $type = preg_replace( "/^.*_/", "", $type );
        $collection = "\\MVC\\Mapper\\{$type}Collection";
        if ( class_exists( $collection ) ) {
            return new $collection();
        }
        throw new \MVC\Base\AppException( "Không biết: $collection" );
    }
}
?>