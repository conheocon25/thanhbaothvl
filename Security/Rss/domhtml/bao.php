<?php
error_reporting(E_ALL);
include_once('../simple_html_dom.php');

$url = 'http://giacngo.vn/vanhoa/2014/05/19/137051/';	
		$curl_handle=curl_init();
		curl_setopt($curl_handle, CURLOPT_URL,$url);
		curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);				
		curl_setopt($curl_handle, CURLOPT_BINARYTRANSFER, true);
		curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);				
		curl_setopt($curl_handle, CURLOPT_USERAGENT, 'giacngo.vn');
		$data = curl_exec($curl_handle);
		curl_close($curl_handle);
		
	$dom = new DOMDocument();
	@$dom->loadHTML($data);
	$dom->saveHTMLFile("giacngo.html");
	$HTML = file_get_html("giacngo.html");
	//$HTML = file_get_html('http://giacngo.vn/phathoc/2013/08/14/1A4600/');	
			$NewsTitle = $HTML->find('#ZoomContentHeadline', 0);
				
			$NewsAuthor = $HTML->find('.ctcSource', 0);
							
			$NewsContent = $HTML->find('.ctcBody', 0);
		
			foreach( $NewsContent->find('img') as $img){
				if (substr($img->src,0,1) == "/")
					$img->src = "http://giacngo.vn/".$img->src; 
			}
	echo $NewsContent;
?>