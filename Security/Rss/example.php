<?php
	include_once "ReadRss.php";

	//$url = 'http://thvl.vn/?cat=10&feed=rss2';
	//$url = 'http://www.thvl.vn/?cat=17&feed=rss2';
	$url = 'http://www.thvl.vn/?cat=17&feed=rss2';
	$xml = new ReadRss($url);
	$xml->ReadRssXMLByCurl();
	//$chItems = $xml->GetItems();
				
	//print_r($chItems);
	
	//$xml->Load($url);
	/*
	// Get Channel Tags
	$chTags = $xml->GetChannelTags();
	if (is_array($chTags) and count($chTags)>0)
	{
		echo '<pre>';
		echo '<strong>Get Channel Tags</strong><hr size="1" />';
		print_r($chTags);
		echo '</pre>';
	}
*/
echo '<p> Get Items <br/></p>';

	// Get Items
	$chItems = $xml->GetItems();
	if (is_array($chItems) and count($chItems)>0)
	{		
		foreach ($chItems as $key => $item)
		{
			//echo $item['title'] ;
			//$HTML = file_get_html($item['link']);
			//echo '<br />';
			//print_r($HTML);
			//echo '<br />';
			//echo $item['link'] ;
			echo '<br />';
			print_r($item);
			//echo '<br />';
		}
/*
			$HTML = file_get_html('http://giacngo.vn/phathoc/2013/08/14/1A4600/');	
			$NewsTitle = $HTML->find('#ZoomContentHeadline', 0);				
			$NewsAuthor = $HTML->find('.ctcSource', 0);							
			$NewsContent = $HTML->find('.ctcBody', 0);
*/
		
	}
		
	
	
/*
echo '<p> Get ALL <br/></p>';

	// Get ALL
	$all = $xml->GetAll();
	if (is_array($all) and count($all)>0)
	{
		echo '<pre>';
		echo '<strong>Get ALL</strong><hr size="1" />';
		print_r($all);
		echo '</pre>';
	}
	*/
?>