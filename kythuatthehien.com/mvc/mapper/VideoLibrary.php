<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class VideoLibrary extends Mapper implements \MVC\Domain\VideoLibraryFinder {

    function __construct() {
        parent::__construct();
				
		$tblVideoLibrary = "ktth_video_library";
		$tblVideo = "ktth_video";
				
		$selectAllStmt = sprintf("select * from %s", $tblVideoLibrary);
		$selectStmt = sprintf("select *  from %s where id=?", $tblVideoLibrary);
		$updateStmt = sprintf("update %s set id_video=?, id_category=? where id=?", $tblVideoLibrary);
		$insertStmt = sprintf("insert into %s ( id_video, id_category)  values(?, ?)", $tblVideoLibrary);
		$deleteStmt = sprintf("delete from %s where id=?", $tblVideoLibrary);
		$deleteByCategoryStmt = sprintf("delete from %s where id_category=?", $tblVideoLibrary);
		
		$findByStmt = sprintf("select *  from %s VM where id_category=? order by (select time from %s V where V.id=VM.id_video ) DESC", $tblVideoLibrary, $tblVideo);
		$findByLimitStmt = sprintf("select *  from %s VM where id_category=? order by (select time from %s V where V.id=VM.id_video ) DESC LIMIT 12", $tblVideoLibrary, $tblVideo);
		$findByTopStmt = sprintf("select *  from %s VM where id_category=? order by (select time from %s V where V.id=VM.id_video ) DESC limit 1", $tblVideoLibrary, $tblVideo);
		$findByUpdateTopStmt = sprintf("select *  from %s VM order by (select time from %s V where V.id=VM.id_video ) DESC limit 24", $tblVideoLibrary, $tblVideo);
		$findByTopLocalStmt = sprintf("select * from %s VM WHERE VM.id_category=1 order by (select time from %s V where V.id=VM.id_video ) DESC limit 24", $tblVideoLibrary, $tblVideo);
		$findByPageStmt = sprintf("
			SELECT *  
			FROM %s VM
			WHERE id_category=:id_category
			ORDER BY (select time FROM %s V WHERE V.id=VM.id_video ) DESC 
			LIMIT :start,:max", $tblVideoLibrary, $tblVideo
		);
		
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->deleteByCategoryStmt = self::$PDO->prepare($deleteByCategoryStmt);
		
		$this->findByStmt = self::$PDO->prepare($findByStmt);
		$this->findByLimitStmt = self::$PDO->prepare($findByLimitStmt);
		$this->findByUpdateTopStmt = self::$PDO->prepare($findByUpdateTopStmt);
		$this->findByTopLocalStmt = self::$PDO->prepare($findByTopLocalStmt);
		$this->findByTopStmt = self::$PDO->prepare($findByTopStmt);
		$this->findByPageStmt = self::$PDO->prepare($findByPageStmt);
    } 
    function getCollection( array $raw ) {
        return new VideoLibraryCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\VideoLibrary(
			$array['id'],			
			$array['id_video'],
			$array['id_category']			
		);
        return $obj;
    }

    protected function targetClass() {        
		return "VideoLibrary";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getIdVideo(),
			$object->getIdCategory()
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getIdVideo(),
			$object->getIdCategory(),			
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }

    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt(){return $this->selectAllStmt;}
	
	function deleteByCategory(array $values) {
        return $this->deleteByCategoryStmt->execute( $values );
    }
	
	function findBy( $values ){
        $this->findByStmt->execute( $values );
        return new VideoLibraryCollection( $this->findByStmt->fetchAll(), $this);
    }
	
	function findByLimit( $values ){
        $this->findByLimitStmt->execute( $values );
        return new VideoLibraryCollection( $this->findByLimitStmt->fetchAll(), $this);
    }
	
	function findByTop( $values ){
        $this->findByTopStmt->execute( $values );
        return new VideoLibraryCollection( $this->findByTopStmt->fetchAll(), $this);
    }
	
	function findByUpdateTop( $values ){
        $this->findByUpdateTopStmt->execute( $values );
        return new VideoLibraryCollection( $this->findByUpdateTopStmt->fetchAll(), $this);
    }
	
	function findByTopLocal( $values ){
        $this->findByTopLocalStmt->execute( $values );
        return new VideoLibraryCollection( $this->findByTopLocalStmt->fetchAll(), $this);
    }
	
	function findByPage( $values ) {
		$this->findByPageStmt->bindValue(':id_category', $values[0], \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':start', ((int)($values[1])-1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->execute();
        return new VideoLibraryCollection( $this->findByPageStmt->fetchAll(), $this );
    }
}
?>