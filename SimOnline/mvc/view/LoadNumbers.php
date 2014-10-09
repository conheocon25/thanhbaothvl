<?php	
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();
		
	$Numbers = $request->getObject('Numbers');
		
	$Data = array();	
	while ($Numbers->valid()){
		$Number = $Numbers->current();
		$Id = $Number->getId();
		$Name = $Number->getFormatNumber();
		$D1 = array($Id=>$Name);
		$Data[$Id] = $Name;
		$Numbers->next();
	}
	echo json_encode($Data);
?>
