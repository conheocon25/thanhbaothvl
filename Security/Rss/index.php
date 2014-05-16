<?php
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
?>