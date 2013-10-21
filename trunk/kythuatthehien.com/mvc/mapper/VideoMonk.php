<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class VideoMonk extends Mapper implements \MVC\Domain\VideoMonkFinder {

    function __construct() {
        parent::__construct();
				
		$tblVideoMonk = "chuakhaituong_video_monk";
		$tblVideo = "chuakhaituong_video";
		$tblMonk = "chuakhaituong_monk";
		
		$selectAllStmt = sprintf("select * from %s", $tblVideoMonk);
		$selectStmt = sprintf("select *  from %s where id=?", $tblVideoMonk);
		$updateStmt = sprintf("update %s set id_video=?, id_monk=? where id=?", $tblVideoMonk);
		$insertStmt = sprintf("insert into %s ( id_video, id_monk)  values(?, ?)", $tblVideoMonk);
		$deleteStmt = sprintf("delete from %s where id=?", $tblVideoMonk);
		$deleteByMonkStmt = sprintf("delete from %s where id_monk=?", $tblVideoMonk);
		$findByStmt = sprintf("select *  from %s VM where id_monk=? order by (select time from %s V where V.id=VM.id_video ) DESC", $tblVideoMonk, $tblVideo);
		$findByLimitStmt = sprintf("select *  from %s VM where id_monk=? order by (select time from %s V where V.id=VM.id_video ) DESC limit 12", $tblVideoMonk, $tblVideo);
				
		$findByTopLocalStmt = sprintf("select *  from %s VM limit 8", $tblVideoMonk, $tblVideo);
		$findByTop10Stmt = sprintf("select *  from %s limit 10", $tblVideoMonk);
		
		$findByPageStmt = sprintf("
			SELECT *  
			FROM %s VM
			WHERE id_monk=:id_monk
			ORDER BY (select time FROM %s V WHERE V.id=VM.id_video ) DESC 
			LIMIT :start,:max", $tblVideoMonk, $tblVideo
		);
		
		$findByUpdateTopStmt = sprintf("
			select 
				*  
			from 
				%s VM
			where
				id_monk in (select id from %s where btype = ? )
			order by (select time from %s V where V.id=VM.id_video ) 
			DESC limit 24
		", $tblVideoMonk, $tblMonk, $tblVideo);
		
		$findByUpdateTop1Stmt = sprintf("
			select 
				*  
			from 
				%s VM			
			order by (select time from %s V where V.id=VM.id_video ) 
			DESC limit 24
		", $tblVideoMonk, $tblVideo);
		
		$findByViewTopStmt = sprintf("
			select 
				*  
			from 
				%s VM
			where
				id_monk in (select id from %s where btype = ? )
			order by (select count from %s V where V.id=VM.id_video ) 
			DESC limit 24
		", $tblVideoMonk, $tblMonk, $tblVideo);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->deleteByMonkStmt = self::$PDO->prepare($deleteByMonkStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);
		$this->findByLimitStmt = self::$PDO->prepare($findByLimitStmt);
				
		$this->findByTopLocalStmt = self::$PDO->prepare($findByTopLocalStmt);		
		$this->findByTop10Stmt = self::$PDO->prepare($findByTop10Stmt);
		
		$this->findByPageStmt = self::$PDO->prepare($findByPageStmt);
		
		$this->findByUpdateTopStmt = self::$PDO->prepare($findByUpdateTopStmt);
		$this->findByUpdateTop1Stmt = self::$PDO->prepare($findByUpdateTop1Stmt);
		$this->findByViewTopStmt = self::$PDO->prepare($findByViewTopStmt);
    } 
    function getCollection( array $raw ) {
        return new VideoMonkCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\VideoMonk(
			$array['id'],			
			$array['id_video'],
			$array['id_monk']			
		);
        return $obj;
    }

    protected function targetClass() {        
		return "VideoMonk";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getIdVideo(),
			$object->getIdMonk()
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getIdVideo(),
			$object->getIdMonk(),			
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }
	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}
		
    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt(){return $this->selectAllStmt;}
	
	function deleteByMonk(array $values) {return $this->deleteByMonkStmt->execute( $values );}
	function findBy( $values ){
        $this->findByStmt->execute( $values );
        return new VideoMonkCollection( $this->findByStmt->fetchAll(), $this);
    }
			
	function findByTopLocal( $values ){
        $this->findByTopLocalStmt->execute( $values );
        return new VideoMonkCollection( $this->findByTopLocalStmt->fetchAll(), $this);
    }
		
	function findByTop10( $values ){
        $this->findByTop10Stmt->execute( $values );
        return new VideoMonkCollection( $this->findByTop10Stmt->fetchAll(), $this);
    }
	function findByUpdateTop( $values ){
        $this->findByUpdateTopStmt->execute( $values );
        return new VideoMonkCollection( $this->findByUpdateTopStmt->fetchAll(), $this);
    }
	function findByUpdateTop1( $values ){
        $this->findByUpdateTop1Stmt->execute( $values );
        return new VideoMonkCollection( $this->findByUpdateTop1Stmt->fetchAll(), $this);
    }
	
	function findByViewTop( $values ){
        $this->findByViewTopStmt->execute( $values );
        return new VideoMonkCollection( $this->findByViewTopStmt->fetchAll(), $this);
    }
	
	function findByLimit( $values ){
        $this->findByLimitStmt->execute( $values );
        return new VideoMonkCollection( $this->findByLimitStmt->fetchAll(), $this);
    }
	
	function findByPage( $values ){
		$this->findByPageStmt->bindValue(':id_monk', $values[0], \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':start', ((int)($values[1])-1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->execute();
        return new VideoMonkCollection( $this->findByPageStmt->fetchAll(), $this);
    }	
}
?>