<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Event extends Mapper implements \MVC\Domain\EventFinder {

    function __construct() {
        parent::__construct();
				
		$tblEvent = "chuakhaituong_event";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY date", $tblEvent);
		$selectStmt = sprintf("select *  from %s where id=?", $tblEvent);
		$updateStmt = sprintf("update %s set date=?, content=?, title=? where id=?", $tblEvent);
		$insertStmt = sprintf("insert into %s ( date, content, title) values(?, ?, ?)", $tblEvent);
		$deleteStmt = sprintf("delete from %s where id=?", $tblEvent);
		$findTopStmt = sprintf("select *  from %s order by date desc limit 1", $tblEvent);
		$findByFinishStmt = sprintf("select *  from %s where date < now() order by date desc", $tblEvent);
		$findByNearStmt = sprintf("select *  from %s where date >= now() order by date", $tblEvent);
				
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findTopStmt = self::$PDO->prepare($findTopStmt);
		$this->findByFinishStmt = self::$PDO->prepare($findByFinishStmt);
		$this->findByNearStmt = self::$PDO->prepare($findByNearStmt);
	}
	
    function getCollection( array $raw ){
        return new EventCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Event( 
			$array['id'],			
			$array['date'],
			$array['content'],
			$array['title']
		);
        return $obj;
    }

    protected function targetClass() {        
		return "Event";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getDate(),
			$object->getContent(),
			$object->getTitle()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getDate(),
			$object->getContent(),
			$object->getTitle(),
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
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
	
	function findTop( $values ){
        $this->findTopStmt->execute( $values );
        return new EventCollection( $this->findTopStmt->fetchAll(), $this);
    }
	function findByNear( $values ){
        $this->findByNearStmt->execute( $values );
        return new EventCollection( $this->findByNearStmt->fetchAll(), $this);
    }
	function findByFinish( $values ){
        $this->findByFinishStmt->execute( $values );
        return new EventCollection( $this->findByFinishStmt->fetchAll(), $this);
    }
}
?>
