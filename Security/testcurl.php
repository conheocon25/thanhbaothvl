<?php
	$url = "http://www.24h.com.vn/am-thuc/nhung-mon-xui-khong-nen-an-ngay-tet-c460a691229.html";
	$curl_handle=curl_init();
	curl_setopt($curl_handle, CURLOPT_URL,$url);
	curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);				
	curl_setopt($curl_handle, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);				
	curl_setopt($curl_handle, CURLOPT_USERAGENT, "bao");
	$data = curl_exec($curl_handle);
	curl_close($curl_handle);
	
	echo $data;
	$dom = new \DOMDocument();
	@$dom->loadHTML($data);								
	$dom->saveHTMLFile("c:\\bao.html");
?>
