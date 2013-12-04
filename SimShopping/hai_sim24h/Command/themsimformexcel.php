<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	
	$template = new PHPTAL('../Template/ThemSimFormExcel.html');
	
	$connetionPDO = new PDOConnection();
	if ($_SESSION["UID"] != "")
	{		
		$UserName = $_SESSION["UID"];
	}
	
	if (isset($_FILES["file"]["size"]))
			{
				if ( ($_FILES["file"]["size"] < 200000000))
				{
					if ($_FILES["file"]["error"] > 0){
						echo "Lỗi inport";
					}
					else
					{	
						$currenttime = getdate();
						$NewFileName = $currenttime['seconds']."-".$currenttime['minutes']."-".$currenttime['hours']."-".$currenttime['mday']."-".$currenttime['month']."-".$currenttime['year'];
						move_uploaded_file($_FILES["file"]["tmp_name"],"../admin_hns/".$NewFileName.".xml");
						
						$dom = \DOMDocument::load("../admin_hns/".$NewFileName.".xml");
						$rows = $dom->getElementsByTagName( 'Row' );
						$first_row = true;												
						
						foreach ($rows as $row){
							if ( !$first_row )
							{
								$number = "";
								$formatnumber = "";
								$price= "";
								$idcategory= "";
								$index = 1;
								$cells = $row->getElementsByTagName( 'Cell' );
								foreach( $cells as $cell )
								{ 
									$ind = $cell->getAttribute( 'Index' );
									
									if ( $ind != null ) $index = $ind;  
									if ( $index == 1 ) $number = $cell->nodeValue;
									if ( $index == 2 ) $formatnumber = $cell->nodeValue;
									if ( $index == 3 ) $price = $cell->nodeValue;
									if ( $index == 4 ) $idcategory = $cell->nodeValue;
									$index += 1;	
									if ($index > 4)
									{
										break;
									}
								}
								if ($idcategory != "")
								{
									$result = $connetionPDO->InsertPhoneNumber($number, $formatnumber, $price, $idcategory); 					
								}
							}
							$first_row = false;
						}						
					}
				}
			}
	
	$ListOrder = $connetionPDO->findOrder(0,10);
	$PhoneNumberHotLine = $connetionPDO->findPhoneHotNumber();
	
	$template->UserName = $UserName;	
	$template->title = 'Danh Sách Sim Số ';
	$template->ListOrder = $ListOrder;
	$template->PhoneNumberHotLine = $PhoneNumberHotLine; 	
	try {
		echo $template->execute();
	}
	catch (Exception $e){
		echo $e;
	}				
?>