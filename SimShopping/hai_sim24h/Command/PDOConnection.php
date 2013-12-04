<?php
require_once 'tgshai_category.php';
require_once 'tgshai_number.php';
require_once 'tgshai_order.php';
require_once 'tgshai_user.php';
require_once 'tgshai_vieworder.php';
require_once 'tgshai_network.php';
	
class PDOConnection {
    public static $PDO;
    function PDOConnection() { 
        if ( ! isset(self::$PDO) ) 
		{ 
            $dsn = "mysql:host=localhost;dbname=a23app_customer";			
			$user = "a23app_userdb";
			$pass = "admin123456";
			
            if ( is_null( $dsn ) ) {
                echo "Lỗi Host Server";
            }
			try {
					self::$PDO = new PDO($dsn, $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
					self::$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch (PDOException $e) 
			{
				echo 'Lỗi kết nối CSDL: ' . $e->getMessage();
			}
        }
    }
	//=================== Hàm sử lý tgshai_HotNumber ====================================================	
	function insertCurrentNumberHot() 
	{			
		$selectAllStmt = self::$PDO->prepare("INSERT INTO `tgshai_hotnumber` (`id`, `idnumber`, `date`) VALUES (null, (Select id from tgshai_number order by id desc limit 0,1), null)");
        $result = $selectAllStmt->execute(array($number));
        return $result;
    }
	function InsertPhoneHotNumber($number) 
	{			
		$selectAllStmt = self::$PDO->prepare("INSERT INTO `tgshai_hotnumber` (`id`, `idnumber`, `date`) VALUES (null, ?, null)");
        $result = $selectAllStmt->execute(array($number));
        return $result;
    }
	function findPhoneHotNumber() 
	{
		$sql ="SELECT n.number, n.state, n.id, n.formatnumber,(select picture from tgshai_network where id = (select idnetwork from tgshai_headnumber where name = left(number, length(number)-7))) as network, n.price ";
		$sql .="FROM tgshai_number as n INNER JOIN tgshai_hotnumber as hn ON n.id=hn.idnumber order by n.price desc, n.number";		
		$selectAllStmt = self::$PDO->prepare($sql);
        $selectAllStmt->execute();
		$NumberPhone = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_number");		
        return $NumberPhone;
    }
	function findAllPhoneHotNumber() 
	{
		$sql ="SELECT n.formatnumber, n.price, hn.id, n.number, hn.date, (select picture from tgshai_network where id = (select idnetwork from tgshai_headnumber where name = left(number, length(number)-7))) as network, n.state ";
		$sql .="FROM tgshai_number as n INNER JOIN tgshai_hotnumber as hn ON n.id=hn.idnumber order by n.price desc, n.number";
		$selectAllStmt = self::$PDO->prepare($sql);
        $selectAllStmt->execute();
		$NumberPhone = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_number");		
        return $NumberPhone;
    }
	function countPhoneHotNumber($number) 
	{
		$sql ="SELECT count(id) as sum ";
		$sql .="FROM tgshai_hotnumber";				
		$selectAllStmt = self::$PDO->prepare($sql);		
        $selectAllStmt->execute();
		$result = $selectAllStmt->fetchAll();		
        return $result[0]['sum'];
    }
	function deletePhoneHotNumber($id) 
	{		
		$sql ="DELETE FROM tgshai_hotnumber WHERE id = ?";				
		$selectAllStmt = self::$PDO->prepare($sql);		        
		$result = $selectAllStmt->execute(array($id));
        return $result;
    }
	//=================== Hàm sử lý tgshai_eNumber ====================================================
	function InsertPhoneNumber($number, $formatnumber, $price, $idcategory) 
	{			
		$selectAllStmt = self::$PDO->prepare("INSERT INTO `tgshai_number` (`id`, `number`, `formatnumber`, `price`, `state`, `idcategory`) VALUES (null, ?, ?, ?, 0, ?)");
        $result = $selectAllStmt->execute(array($number, $formatnumber, $price, $idcategory));
        return $result;
    }
	function countPhoneNumber() 
	{
		$sql ="SELECT count(id) as sum ";
		$sql .="FROM tgshai_number WHERE state=0";		
		$selectAllStmt = self::$PDO->prepare($sql);
        $selectAllStmt->execute();
		$result = $selectAllStmt->fetchAll();		
        return $result[0]['sum'];
    }
	
	function findPhoneNumber ($from , $to) 
	{
		$sql ="SELECT formatnumber, price, id, number, (select picture from tgshai_network where id = (select idnetwork from tgshai_headnumber where name = left(number, length(number)-7))) as network, state ";
		$sql .="FROM tgshai_number WHERE state=0 Order by price desc, number limit $from, $to";
		$selectAllStmt = self::$PDO->prepare($sql);
        $selectAllStmt->execute();
		$NumberPhone = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_number");		
        return $NumberPhone;
    }
	
	function findPhoneNumberbyID($id) 
	{
		$sql ="SELECT  formatnumber, price , id, number, (select picture from tgshai_network where id = (select idnetwork from tgshai_headnumber where name = left(number, length(number)-7))) as network, state, idcategory ";
		$sql .="FROM tgshai_number WHERE id=? Order by number, price";
		$selectAllStmt = self::$PDO->prepare($sql);		
        $selectAllStmt->execute(array($id));
		$NumberPhone = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_number");		
        return $NumberPhone;
    }
	
	function findNumberKeyDown($num, $from, $to) 
	{
		$sql ="SELECT formatnumber, price, id, number, (select picture from tgshai_network where id = (select idnetwork from tgshai_headnumber where name = left(number, length(number)-7))) as network, state, idcategory ";
		$sql .="FROM tgshai_number Where number like '$num%' Order by price, number limit $from, $to";				
		$selectAllStmt = self::$PDO->prepare($sql);		
        $selectAllStmt->execute();
		$NumberPhone = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_number");		
        return $NumberPhone;
    }
	
	function findPhoneNumberbyIdNumber($idnumber) 
	{
		$sql ="SELECT formatnumber, price, id, number, (select picture from tgshai_network where id = (select idnetwork from tgshai_headnumber where name = left(number, length(number)-7))) as network, state, idcategory ";
		$sql .="FROM tgshai_number WHERE number=? Order by price, number";				
		$selectAllStmt = self::$PDO->prepare($sql);		
        $selectAllStmt->execute(array($idnumber));
		$NumberPhone = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_number");		
        return $NumberPhone;
    }
	
	function countPhoneNumberbyIdCategory($idcategory) 
	{
		$sql ="SELECT count(id) as sum ";
		$sql .="FROM tgshai_number WHERE idcategory=?";				
		$selectAllStmt = self::$PDO->prepare($sql);		
        $selectAllStmt->execute(array($idcategory));
		$result = $selectAllStmt->fetchAll();		
        return $result[0]['sum'];        
    }
	
	function findPhoneNumberbyIdCategory($idcategory, $countfrom, $countto) 
	{
		
		if($idcategory == 13)
		{			
			$sql ="SELECT formatnumber, price, id, number, (select picture from tgshai_network where id = (select idnetwork from tgshai_headnumber where name = left(number, length(number)-7))) as network, state, tgshai_number.idcategory ";
			//$sql .="(SUBSTRING(number, length(number),1)+SUBSTRING(number, length(number)-1,1)+SUBSTRING(number, length(number)-2,1)+SUBSTRING(number, length(number)-3,1)+SUBSTRING(number, length(number)-4,1)+SUBSTRING(number, length(number)-5,1)) as Weight ";
			$sql .="FROM tgshai_number ";
			$sql .="where tgshai_number.idcategory=? order by right(number, 6), ";
			$sql .="(SUBSTRING(number, length(number),1)+SUBSTRING(number, length(number)-1,1)+SUBSTRING(number, length(number)-2,1)+SUBSTRING(number, length(number)-3,1)+SUBSTRING(number, length(number)-4,1)+SUBSTRING(number, length(number)-5,1))	limit $countfrom, $countto";
		}
		else
		{
			$sql ="SELECT formatnumber, price, id, number, (select picture from tgshai_network where id = (select idnetwork from tgshai_headnumber where name = left(number, length(number)-7))) as network, state, idcategory ";
			$sql .="FROM tgshai_number ";
			$sql .="WHERE tgshai_number.idcategory=? Order by price desc, number limit $countfrom, $countto";				
		}		
		$selectAllStmt = self::$PDO->prepare($sql);		
        $selectAllStmt->execute(array($idcategory));
		$NumberPhone = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_number");		
        return $NumberPhone;
    }
	function countPhoneNumberbyPrice($from, $to) 
	{
		$sql ="SELECT count(id) as sum ";
		$sql .="FROM tgshai_number WHERE price >=? and price <=?";				
		$selectAllStmt = self::$PDO->prepare($sql);		
        $selectAllStmt->execute(array((int)$from,(int)$to));
		$result = $selectAllStmt->fetchAll();		
        return $result[0]['sum'];
        
    }
	
	function findPhoneNumberbyPrice($from, $to, $countfrom, $countto) 
	{
		$sql ="SELECT formatnumber, price, id, number, (select picture from tgshai_network where id = (select idnetwork from tgshai_headnumber where name = left(number, length(number)-7))) as network, state, idcategory ";
		$sql .="FROM tgshai_number WHERE price >=? and price <=? Order by price desc, number limit $countfrom, $countto";
		$selectAllStmt = self::$PDO->prepare($sql);		
        $selectAllStmt->execute(array((int)$from,(int)$to));
		$NumberPhone = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_number");		
        return $NumberPhone;
    }
	
	function countPhoneNumberbyNumber($number) 
	{
		$sql ="SELECT count(id) as sum ";
		$sql .="FROM tgshai_number WHERE number like '%$number%'";				
		$selectAllStmt = self::$PDO->prepare($sql);		
        $selectAllStmt->execute();
		$result = $selectAllStmt->fetchAll();		
        return $result[0]['sum'];
    }
		
	function findPhoneNumberbyNumber($number, $countfrom, $countto) 
	{
		$sql ="SELECT formatnumber, price, id, number, (select picture from tgshai_network where id = (select idnetwork from tgshai_headnumber where name = left(number, length(number)-7))) as network, state, idcategory ";
		$sql .="FROM tgshai_number WHERE number like '%$number%' Order by price desc, number limit $countfrom, $countto";				
		$selectAllStmt = self::$PDO->prepare($sql);		
        $selectAllStmt->execute();
		$NumberPhone = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_number");		
        return $NumberPhone;
    }
	
	function countPhoneNumberbyNetwork($network) 
	{
		$sql ="SELECT count(N.id) as sum";		
		$sql .=" FROM tgshai_number N inner join tgshai_headnumber H ON H.name = left(number, length(number)-7) WHERE H.idnetwork =?";
		$selectAllStmt = self::$PDO->prepare($sql);		
        $selectAllStmt->execute(array($network));
		$result = $selectAllStmt->fetchAll();		
        return $result[0]['sum'];
    }
	function findPhoneNumberbyNetwork($network, $countfrom, $countto) 
	{
		$sql ="SELECT N.formatnumber, N.price, N.id, N.number, ";
		$sql .=" (select picture from tgshai_network where id = H.idnetwork) as network,";
		$sql .=" N.state, N.idcategory";
		$sql .=" FROM tgshai_number N inner join tgshai_headnumber H ON H.name = left(number, length(number)-7) WHERE H.idnetwork =? Order by price desc, number limit $countfrom, $countto";
		
		$selectAllStmt = self::$PDO->prepare($sql);		
        $selectAllStmt->execute(array($network));
		$NumberPhone = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_number");		
        return $NumberPhone;
    }
	
	function updatePhoneNumberbyID($format, $price, $state, $idcategory, $number, $idnumber) 
	{		
		$selectAllStmt = self::$PDO->prepare("UPDATE tgshai_number set formatnumber=?, price=? , state=?, idcategory=?, number=? WHERE id=?");
        $result = $selectAllStmt->execute(array($format, $price, $state, $idcategory, $number, $idnumber));
        return $result;
    }
	function updateStatePhoneNumberbyID($number, $state) 
	{		
		$selectAllStmt = self::$PDO->prepare("UPDATE tgshai_number set state=? WHERE number=?");
        $result = $selectAllStmt->execute(array($state, $number ));
        return $result;
    }
	function updatePricebyPrice($fromprice, $toprice, $idnetwork) 
	{		
		$selectAllStmt = self::$PDO->prepare("UPDATE tgshai_number set price=? WHERE price=? and (left(number, length(number)-7) in (Select tgshai_headnumber.name From tgshai_headnumber WHERE tgshai_headnumber.idnetwork =?))");
        $result = $selectAllStmt->execute(array($toprice, $fromprice, $idnetwork));
        return $result;
    }
	
	function deletePhoneNumberbyID($idnumber) 
	{				
		$selectAllStmt = self::$PDO->prepare("DELETE FROM tgshai_number WHERE id=?");
        $result = $selectAllStmt->execute(array($idnumber));
        return $result;
    }
	
	function findDeletePhoneNumber($idnumber) 
	{		
		$selectAllStmt = self::$PDO->prepare("Delete From tgshai_number Where number='?'");
        $result = $selectAllStmt->execute(array($idnumber));		
        return $$result;
    }
	//=================== Hàm sử lý table order====================================================
		
	function findOrder($from , $to) 
	{
		$selectAllStmt = self::$PDO->prepare("Select id, (Select name From tgshai_customer where id = tgshai_order.idcustomer) as idcustomer, idsim, date, note From tgshai_order Where state=0 Order by date desc limit $from , $to");
        $selectAllStmt->execute();
		$Order = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_order");		
        return $Order;
    }
	
	function findAllOrder() 
	{
		$selectAllStmt = self::$PDO->prepare("Select id, (Select name From tgshai_customer where id = tgshai_order.idcustomer) as idcustomer, idsim, date, note From tgshai_order Where state=0 Order by date desc");
        $selectAllStmt->execute();
		$Order = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_order");		
        return $Order;
    }
	function findAllViewOrderOther()
	{		
		$selectAllStmt = self::$PDO->prepare("Select o.id, o.idcustomer, o.idsim, o.type, o.date, o.note, c.name, c.phone, c.address From tgshai_order as o inner join tgshai_customer as c on o.idcustomer = c.id Where state=0 and o.type = 0 Order by date desc");
        $selectAllStmt->execute();
		$vieworder = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_vieworder");		
        return $vieworder;
    
	}
	function findViewOrderOtherByID($id)
	{		
		$selectAllStmt = self::$PDO->prepare("Select o.id, o.idcustomer, o.idsim, o.type, o.date, o.note, c.name, c.phone, c.address From tgshai_order as o inner join tgshai_customer as c on o.idcustomer = c.id Where state=0 and o.type = 0 and o.idcustomer=? Order by date desc");
        $selectAllStmt->execute(array($id));
		$vieworder = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_vieworder");		
        return $vieworder;
    }
	
	function findViewCustomerByID($id)
	{		
		$selectAllStmt = self::$PDO->prepare("Select o.id, o.idcustomer, o.idsim, o.type, o.date, o.note, c.name, c.phone, c.address From tgshai_order as o inner join tgshai_customer as c on o.idcustomer = c.id Where o.idcustomer=?");
        $selectAllStmt->execute(array($id));
		$vieworder = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_vieworder");		
        return $vieworder;
    }
	function findAllViewOrder() 
	{		
		$selectAllStmt = self::$PDO->prepare("Select o.id, o.idcustomer, o.idsim, o.type, o.date, o.note, c.name, c.phone, c.address From tgshai_order as o inner join tgshai_customer as c on o.idcustomer = c.id Where state=0 and o.type = 1 Order by date desc");
        $selectAllStmt->execute();
		$vieworder = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_vieworder");		
        return $vieworder;
    }
	
	function findViewOrderByID($id) 
	{		
		$selectAllStmt = self::$PDO->prepare("Select o.id, o.idcustomer, o.idsim, o.type, o.date, o.note, c.name, c.phone, c.address From tgshai_order as o inner join tgshai_customer as c on o.idcustomer = c.id Where state=0 and o.type = 1 and o.idcustomer=? Order by date desc");
        $selectAllStmt->execute(array($id));
		$vieworder = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_vieworder");		
        return $vieworder;
    }
	
	function insertOrder($number, $type, $note) 
	{
		$sql = "Insert into tgshai_order(id, idcustomer, idsim, type, date, note) values(null,(Select id From tgshai_customer Order by id desc Limit 0,1), ? , ?, null , ? )";
		$selectAllStmt = self::$PDO->prepare($sql);
        $result = $selectAllStmt->execute(array($number, $type, $note));
        return $result;
    }
	
	function updateOrder($id) 
	{		
		$selectAllStmt = self::$PDO->prepare("UPDATE tgshai_order set state=1 WHERE id=?");
        $result = $selectAllStmt->execute(array($id));	
        return $result;
    }
	function deleteOrder($id) 
	{		
		$selectAllStmt = self::$PDO->prepare("DELETE FROM tgshai_order WHERE id=?");
        $result = $selectAllStmt->execute(array($id));	
        return $result;
    }
		
	function findTotalIncome($fromdate, $todate) 
	{		
		$selectAllStmt = self::$PDO->prepare("Select * , (Select name From tgshai_customer where id = o.idcustomer) as name From tgshai_order as o INNER JOIN tgshai_number as n ON o.idsim = n.number Where o.state=1 and date(o.date) BETWEEN ? AND ?");
        $selectAllStmt->execute(array($fromdate, $todate));
		$vieworder = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_vieworder");		
        return $vieworder;
    }
	function sumTotalIncome($fromdate, $todate) 
	{		
		$selectAllStmt = self::$PDO->prepare("Select sum(n.price) as total From tgshai_order as o INNER JOIN tgshai_number as n ON o.idsim = n.number Where o.state=1 and date(o.date) BETWEEN ? AND ?");
        $selectAllStmt->execute(array($fromdate, $todate));
		$result = $selectAllStmt->fetchAll();		
        return $result[0]['total'];
    }
	////=================== Hàm sử lý  tgshai_customer ===================================================
	function insertCustomer($name, $phone, $adsress, $email) 
	{
		$sql = "Insert into tgshai_customer(id, name, phone, address, note) values(null, ?,  ? , ? , ? )";
		$selectAllStmt = self::$PDO->prepare($sql);
        $result = $selectAllStmt->execute(array($name, $phone, $adsress, $email));
        return $result;
    }
	function deleteCustomer($idorder) 
	{		
		$selectAllStmt = self::$PDO->prepare("DELETE FROM tgshai_customer WHERE id=(Select idcustomer From tgshai_order where id=$idorder)");
        $result = $selectAllStmt->execute();	
        return $result;
    }	
	////=================== Hàm sử lý User Admin ===================================================
	
	function checkUser($name, $pass) 
	{		
		$repass = hash("sha512", "saophuongnamnumberone".$pass,false);
		$checkStmt = self::$PDO->prepare("SELECT * FROM tgshai_user where user=? and Pass=?");
		$values = array( $name, $repass);
        $checkStmt->execute( $values );
        $result = $checkStmt->fetchAll();
		return $result[0]['id'];
    }	
	
	function createPass($pass) 
	{
		return hash("sha512", "saophuongnamnumberone".$pass,false);
	}
	////=================== Hàm sử lý User Admin ===================================================
	function findAllCategory() 
	{
		$selectAllStmt = self::$PDO->prepare("Select * From tgshai_category");		
        $selectAllStmt->execute();
		$Categorys = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_category");		
        return $Categorys;
    }
	
	function findUserbyID($id) 
	{		
		$selectAllStmt = self::$PDO->prepare("Select * From tgshai_user Where user=?");
        $selectAllStmt->execute(array($id));
		$User = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_user");		
        return $User;
    }
	
	function updateUserbyID($user, $pass,  $note, $id) 
	{		
		$selectAllStmt = self::$PDO->prepare("UPDATE tgshai_user set user=?, pass=?, note=? WHERE id=?");
        $result = $selectAllStmt->execute(array($user, self::createPass($pass), $note, $id));
        return $result;
    }
	
	////======================xu ly tgshai_enetwork
	function findAllNetwork() 
	{
		$selectAllStmt = self::$PDO->prepare("Select * From tgshai_network");		
        $selectAllStmt->execute();
		$Categorys = $selectAllStmt->fetchAll(PDO::FETCH_CLASS, "tgshai_network");		
        return $Categorys;
    }
	
}
?>