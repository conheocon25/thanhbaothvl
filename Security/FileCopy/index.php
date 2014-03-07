<meta http-equiv="pragma" content="nocache">
<?php
	
	
	$op = $_REQUEST["op"];	
	//echo $op;
	include("filecopy.class.php");
	$cls = new FileCopy();
	$cls->Process($op);
	
?>