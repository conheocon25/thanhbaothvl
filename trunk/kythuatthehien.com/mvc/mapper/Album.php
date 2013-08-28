<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Album extends Mapper implements \MVC\Domain\AlbumFinder {

    function __construct() {
        parent::__construct();
				
		$tblAlbum = "chuakhaituong_album";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY time DESC", $tblAlbum);
		$selectStmt = sprintf("select *  from %s where id=?", $tblAlbum);
		$updateStmt = sprintf("update %s set name=?, url=?, note=?, time=? where id=?", $tblAlbum);
		$insertStmt = sprintf("insert into %s ( name, url, note) values(?, ?, ?)", $tblAlbum);
		$deleteStmt = sprintf("delete from %s where id=?", $tblAlbum);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		
    } 
    function getCollection( array $raw ) {
        return new AlbumCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Album(
			$array['id'],
			$array['name'],
			$array['time'],
			$array['url'],
			$array['note'] 
		);
        return $obj;
    }

    protected function targetClass() {        
		return "Album";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),
			$object->getURL(),
			$object->getNote()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),
			$object->getURL(),
			$object->getNote(),
			$object->getTime(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }

    function selectStmt() {
        return $this->selectStmt;
    }
    function selectAllStmt(){
        return $this->selectAllStmt;
    }
	
}
?>