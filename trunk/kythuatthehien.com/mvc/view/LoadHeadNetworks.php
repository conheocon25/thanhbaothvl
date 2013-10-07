<?php	
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();
		
	$Network = $request->getObject('Network');		
	$HNs = $Network->getHeads();
	
	$Data = array();	
	while ($HNs->valid()){
		$HN = $HNs->current();
		$Id = $HN->getId();
		$Name = $HN->getName();
		$D1 = array($Id=>$Name);
		$Data[$Id] = $Name;
		$HNs->next();
	}	
	echo json_encode($Data);
?>
