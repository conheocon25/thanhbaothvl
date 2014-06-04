<?php
	$url = "http://chualongvien.com/tin-tuc-auto/1";
	$curl_handle=curl_init();
	curl_setopt($curl_handle, CURLOPT_URL,$url);
	curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);				
	curl_setopt($curl_handle, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);				
	curl_setopt($curl_handle, CURLOPT_USERAGENT, 'giacngo.vn');
	$data = curl_exec($curl_handle);
	curl_close($curl_handle);
	print_r($data);
	unset($data);
	unset($url);
	$url = "http://chualongvien.com/tin-tuc-auto/130";
	$curl_handle=curl_init();
	curl_setopt($curl_handle, CURLOPT_URL,$url);
	curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);				
	curl_setopt($curl_handle, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);				
	curl_setopt($curl_handle, CURLOPT_USERAGENT, 'giacngo.vn');
	$data = curl_exec($curl_handle);
	curl_close($curl_handle);
	print_r($data);
	unset($data);
	unset($url);
	$url = "http://chualongvien.com/tin-tuc-auto/190";
	$curl_handle=curl_init();
	curl_setopt($curl_handle, CURLOPT_URL,$url);
	curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);				
	curl_setopt($curl_handle, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);				
	curl_setopt($curl_handle, CURLOPT_USERAGENT, 'giacngo.vn');
	$data = curl_exec($curl_handle);
	curl_close($curl_handle);
	print_r($data);
	unset($data);
	unset($url);
	
	$url = "http://chualongvien.com/tin-tuc-auto/200";
	$curl_handle=curl_init();
	curl_setopt($curl_handle, CURLOPT_URL,$url);
	curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);				
	curl_setopt($curl_handle, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);				
	curl_setopt($curl_handle, CURLOPT_USERAGENT, 'giacngo.vn');
	$data = curl_exec($curl_handle);
	curl_close($curl_handle);
	print_r($data);
	unset($data);
	unset($url);
	echo "<br /> Chay Thanh Cong Script PHP!";
?>


