<?php 
namespace MVC\Mapper;
 require_once( "mvc/base/Mapper.php" );
 class Number extends Mapper implements \MVC\Domain\NumberFinder {
    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select id,
									number,
									formatnumber,
									price,
									state,
									idcategory
							 from sim24h_number"
							 );
		$this->selectStmt = self::$PDO->prepare( 
                            "select id,
									number,
									formatnumber,
									price,
									state,
									idcategory
							 from sim24h_number
							 where id=?
							 ");
		$this->findByPageStmt = self::$PDO->prepare( 
                            "select id,
									number,
									formatnumber,
									price,
									state,
									idcategory
							 from sim24h_number
							 LIMIT :start,:max
							 ");
        
		$this->findByPage1Stmt = self::$PDO->prepare( 
                            "select id,
									number,
									formatnumber,
									price,
									state,
									idcategory
							 from sim24h_number
							 where id=:content
							 LIMIT :start,:max
							 ");
        $this->updateStmt = self::$PDO->prepare( 
                            "update sim24h_number set number=?, formatnumber=?, price=?, state=?, idcategory=? where id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "insert into sim24h_number (number, formatnumber, price, state, idcategory ) 
							values( ?, ?, ?, ?, ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from sim24h_number where id=?");
		$this->findByStmt = self::$PDO->prepare( 
                            "
							SELECT N.formatnumber, N.price, N.id, N.number,
							(select picture from sim24h_network where id = H.idnetwork) as network,
							N.state, N.idcategory
							FROM sim24h_number N inner join sim24h_headnumber H ON H.name = left(number, length(number)-7) 
							WHERE H.idnetwork =? 
							");
		$this->findByCategoryStmt = self::$PDO->prepare( 
                            "
							SELECT formatnumber, price, id, number, (select picture from sim24h_network where id = (select idnetwork from sim24h_headnumber where name = left(number, length(number)-7))) as network, state, idcategory 
							FROM sim24h_number  
							WHERE sim24h_number.idcategory=? 
							");
		$this->findByCategoryPageStmt = self::$PDO->prepare( 
                            "
							SELECT formatnumber, price, id, number, (select picture from sim24h_network where id = (select idnetwork from sim24h_headnumber where name = left(number, length(number)-7))) as network, state, idcategory 
							FROM sim24h_number  
							WHERE sim24h_number.idcategory=:content 
							limit :start,:max
							");
		$this->findByNetworkPageStmt = self::$PDO->prepare( 
                            "
							SELECT N.formatnumber, N.price, N.id, N.number,
							(select picture from sim24h_network where id = H.idnetwork) as network,
							N.state, N.idcategory
							FROM sim24h_number N inner join sim24h_headnumber H ON H.name = left(number, length(number)-7) 
							WHERE H.idnetwork =:content 
							limit :start,:max
							");
		$this->findNumber1Stmt = self::$PDO->prepare( 
                            "
							SELECT formatnumber, price, id, number, (select picture from sim24h_network where id = (select idnetwork from sim24h_headnumber where name = left(number, length(number)-7))) as network, state,idcategory 
							FROM sim24h_number WHERE number like concat('%',:content,'%') 			
							");
		$this->findNumberByPrice1Stmt = self::$PDO->prepare( 
                            "
							SELECT formatnumber, price, id, number, (select picture from sim24h_network where id = (select idnetwork from sim24h_headnumber where name = left(number, length(number)-7))) as network, state, idcategory
							FROM sim24h_number WHERE price between :price and :price1 
							");
		$this->findNumberByPriceStmt = self::$PDO->prepare( 
                            "
							SELECT formatnumber, price, id, number, (select picture from sim24h_network where id = (select idnetwork from sim24h_headnumber where name = left(number, length(number)-7))) as network, state, idcategory
							FROM sim24h_number WHERE price between :price and :price1 
							limit :start,:max
							");
		$this->findNumberStmt = self::$PDO->prepare( 
                            "
							SELECT formatnumber, price, id, number, (select picture from sim24h_network where id = (select idnetwork from sim24h_headnumber where name = left(number, length(number)-7))) as network, state,idcategory 
							FROM sim24h_number WHERE number like concat('%',:content,'%') 
							LIMIT :start,:max
							");
		$this->findHotNumberStmt = self::$PDO->prepare( 
                            "
							SELECT n.number, n.state, n.id, n.formatnumber,(select picture from sim24h_network where id = (select idnetwork from sim24h_headnumber where name = left(number, length(number)-7))) as network, n.price 
							FROM sim24h_number as n INNER JOIN sim24h_hotnumber as hn ON n.id=hn.idnumber 
							
							");
    } 
    function getCollection( array $raw ) {
        return new NumberCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Number( 
			$array['id'],  
			$array['number'], 
			$array['formatnumber'],	
			$array['price'],	
			$array['state'],	
			$array['idcategory'] );
        return $obj;
    }
	
    protected function targetClass() {        
		return "Number";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getNumber(), 
			$object->getFormatNumber(),	
			$object->getPrice(),	
			$object->getState(),
			$object->getIdCategory()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getNumber(), 
			$object->getFormatNumber(),	
			$object->getPrice(),	
			$object->getState(),
			$object->getIdCategory(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
	function findNull() {		        
        return new NumberCollection( null, $this );
    }
	function findBy($values) {
        $this->findByStmt->execute(array($values));
        return new NumberCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findByCategory($values) {
        $this->findByCategoryStmt->execute(array($values));
        return new NumberCollection( $this->findByCategoryStmt->fetchAll(), $this );
    }
	function findHotNumber() {
        $this->findHotNumberStmt->execute();
        return new NumberCollection( $this->findHotNumberStmt->fetchAll(), $this );
    }
	function findByNetworkPage( $values ) {
		//print_r($values);
		$this->findByNetworkPageStmt->bindValue(':content', (int)($values[0]), \PDO::PARAM_STR);
		$this->findByNetworkPageStmt->bindValue(':start', (int)($values[1])*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByNetworkPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);
		$this->findByNetworkPageStmt->execute();
        return new NumberCollection( $this->findByNetworkPageStmt->fetchAll(), $this );
		
    }
	function findByCategoryPage( $values ) {
		//print_r($values);
		$this->findByCategoryPageStmt->bindValue(':content', (int)($values[0]), \PDO::PARAM_STR);
		$this->findByCategoryPageStmt->bindValue(':start', (int)($values[1])*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByCategoryPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);
		$this->findByCategoryPageStmt->execute();
        return new NumberCollection( $this->findByCategoryPageStmt->fetchAll(), $this );
		
    }
	function findNumber1($values) {		
		$this->findNumber1Stmt->bindValue(':content', (int)($values[0]), \PDO::PARAM_STR);
        $this->findNumber1Stmt->execute();
        //print_r($this->findNumber1Stmt->execute(array($values)));
		return new NumberCollection( $this->findNumber1Stmt->fetchAll(), $this );
    }
	function findNumber( $values ) {
		//print_r($values);
		$this->findNumberStmt->bindValue(':content', (int)($values[0]), \PDO::PARAM_STR);
		$this->findNumberStmt->bindValue(':start', (int)($values[1])*(int)($values[2]), \PDO::PARAM_INT);
		$this->findNumberStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);
		$this->findNumberStmt->execute();
        return new NumberCollection( $this->findNumberStmt->fetchAll(), $this );
		
    }	
	function findNumberByPrice1($values) {		
		$this->findNumberByPrice1Stmt->bindValue(':price', (int)($values[0]), \PDO::PARAM_STR);
		$this->findNumberByPrice1Stmt->bindValue(':price1', (int)($values[1]), \PDO::PARAM_STR);
        $this->findNumberByPrice1Stmt->execute();
		return new NumberCollection( $this->findNumberByPrice1Stmt->fetchAll(), $this );
    }
	function findNumberByPrice( $values ) {
		$this->findNumberByPriceStmt->bindValue(':price', (int)($values[0]), \PDO::PARAM_STR);
		$this->findNumberByPriceStmt->bindValue(':price1', (int)($values[1]), \PDO::PARAM_STR);
		$this->findNumberByPriceStmt->bindValue(':start', (int)($values[2])*(int)($values[3]), \PDO::PARAM_INT);
		$this->findNumberByPriceStmt->bindValue(':max', (int)($values[3]), \PDO::PARAM_INT);
		$this->findNumberByPriceStmt->execute();
        return new NumberCollection( $this->findNumberByPriceStmt->fetchAll(), $this );
		
    }	
	function findByPage( $values ) {
	
		$this->findByPageStmt->bindValue(':start', (int)($values[0])*(int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->execute();
        return new NumberCollection( $this->findByPageStmt->fetchAll(), $this );
    }
	function findByPage1( $values ) {
		$this->findByPage1Stmt->bindValue(':content', (int)($values[0]), \PDO::PARAM_INT);
		$this->findByPage1Stmt->bindValue(':start', (int)($values[1])*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByPage1Stmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);
		$this->findByPage1Stmt->execute();
        return new NumberCollection( $this->findByPage1Stmt->fetchAll(), $this );
    }
    function selectStmt() {
        return $this->selectStmt;
    }	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
}
?>