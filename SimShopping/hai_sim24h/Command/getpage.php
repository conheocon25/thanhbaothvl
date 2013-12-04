<?php
function getPage($currentpage, $totalpage, $cmd)
{
	if (($currentpage > 0) && $cmd != "")
	{		
		$LinkPage = array();		
		$j=$currentpage;
		
		for($i=2 ; $i >= 1 && ($j-$i) >= 1 ; $i--)
		{			
			$LinkPage[] = new page( $j - $i, $cmd);			
		}
		$n = $j=$currentpage;
		
		for($i=0; $i < 3 && $n < $totalpage ; $i++)
		{
			$n = $j+$i;
			$LinkPage[] = new page( $n, $cmd);			
		}		
		return $LinkPage;
	}
	else
	{
		return null;
	}
}
function getTotalPage($count)
{
	if( $count > 0 )
	{
		$sodu =  $count%25;				
		$totalpage =  intval((int)$count/25);
		
		if ($sodu > 0)
		{
			$totalpage = 1 + (int)$totalpage;
		}		
		return $totalpage;
	}
	else
	{
		return 0;
	}
}
function getLastLinked($totalpage, $cmd)
{
	return $cmd."&page=".$totalpage;			
}
function getFirstLinked($cmd)
{
	return $cmd."&page=1";			
}	
?>