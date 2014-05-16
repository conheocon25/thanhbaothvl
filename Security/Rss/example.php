<?php
	include_once "class.AbsRssReader20.php";

	$xml = new AbsRssReader20();

	$url = 'http://giacngo.vn/thongtin/rss/?ID=1';
	
	$xml->Load($url);
	
	// Get Channel Tags
	$chTags = $xml->GetChannelTags();
	if (is_array($chTags) and count($chTags)>0)
	{
		echo '<pre>';
		echo '<strong>Get Channel Tags</strong><hr size="1" />';
		print_r($chTags);
		echo '</pre>';
	}

echo '<p><br/></p>';

	// Get Items
	$chItems = $xml->GetItems();
	if (is_array($chItems) and count($chItems)>0)
	{
		echo '<pre>';
		echo '<strong>Get Items</strong><hr size="1" />';
		print_r($chItems);
		echo '</pre>';
	}

echo '<p><br/></p>';

	// Get ALL
	$all = $xml->GetAll();
	if (is_array($all) and count($all)>0)
	{
		echo '<pre>';
		echo '<strong>Get ALL</strong><hr size="1" />';
		print_r($all);
		echo '</pre>';
	}
?>