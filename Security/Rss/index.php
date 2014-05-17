<?php
	/*
	$url = 'http://giacngo.vn/thongtin/rss/?ID=1';
	
	$curl_handle=curl_init();
	curl_setopt($curl_handle, CURLOPT_URL,$url);
	curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl_handle, CURLOPT_USERAGENT, '123');
	$xml = curl_exec($curl_handle);
	curl_close($curl_handle);
	$xml11 = simplexml_load_string($xml);
	print_r($xml11);
	*/
	$url = 'http://giacngo.vn/vanhoa/phatgiao/2014/05/17/32E010/';
	
	$curl_handle=curl_init();
		curl_setopt($curl_handle, CURLOPT_URL,$url);
		curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl_handle, CURLOPT_HEADER, 0);		
		curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
		$xmlcontent = curl_exec($curl_handle);
		curl_close($curl_handle);

	$dom = new DOMDocument();	 	 
	// load the html into the object
	$dom = dom_import_simplexml(simplexml_load_string($xmlcontent));
	// discard white space
	//$dom->preserveWhiteSpace = false;
	//$NewsAuthor = $dom->getElementsByClassName('ctcBody');
	print_r($dom);
	
?>