<?php
	function getElementsByClassName(DOMDocument $DOMDocument, $ClassName)
	{
		$Elements = $DOMDocument->getElementsByTagName("*");
		$Matched = array();

		foreach($Elements as $node)
		{
			if( ! $node -> hasAttributes())
				continue;

			$classAttribute = $node->attributes->getNamedItem('class');

			if( ! $classAttribute)
				continue;

			$classes = explode(' ', $classAttribute->nodeValue);

			if(in_array($ClassName, $classes))
				$Matched[] = $node;
		}

		return $Matched;
	}
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
	$url = 'http://giacngo.vn/vanhoa/2014/05/19/137051/';
	
	$curl_handle=curl_init();
		curl_setopt($curl_handle, CURLOPT_URL,$url);
		curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);				
		curl_setopt($curl_handle, CURLOPT_BINARYTRANSFER, true);
		curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);				
		curl_setopt($curl_handle, CURLOPT_USERAGENT, 'giacngo.vn');
		$data = curl_exec($curl_handle);
	
	$dom = new DOMDocument();
	@$dom->loadHTML($data);
	$test = getElementsByClassName($dom, "ctcBody");
	$Elements = $test[0]->getElementsByTagName("img");	
	for ($i = 0; $i < $Elements->length; ++$i) {		
		if (substr($Elements->item($i)->getAttribute('src'),0,1) == "/")
			$Elements->item($i)->setAttribute('src', "http://giacngo.vn/".$Elements->item($i)->getAttribute('src')); 		
		
	}
	
	//foreach($ElementKQ as $n) $domExport->appendChild($domExport->importNode($n,true));
	$doc = new DOMDocument();
	@$temp = null;	
	$ElementKQ = $test[0]->getElementsByTagName("*");
	$i = 0;
	$element_ns = new DOMElement('pr:node1', 'thisvalue', 'http://xyz');
	$doc->appendChild($element_ns);
	//foreach ($ElementKQ as $item) {
	for ($i = 0; $i < $ElementKQ->length; ++$i) {
		//echo $ElementKQ->item($i);
		$doc->appendChild($ElementKQ->item($i));
	}
		
	
	
	//foreach($ElementKQ as $n) $doc->appendChild($n));
	//echo $dom->saveHTML();
	
	//echo $test1[0];
	echo $doc->saveHTML();
	//print_r($test);
	/*
	$xpath = new DOMXPath($dom);

	$allClass = $xpath->query("//@class");
	$allClassBar = $xpath->query("//*[@class='ctcBody']");
	//$allClassimg = $xpath->query("//*[@id='ZoomContentBody']");

	echo "There are " . $allClass->length . " with a class attribute<br>";
	echo "There are " . $allClassBar->length . " with a class attribute of 'ctcBody'<br>";
	//echo "There are " . $allClassimg->length . " with a class attribute of 'allClassimg'<br>";
	
	/*
	for ($i = $allClassBar->length - 1; $i > -1; $i--) {
        $result[] = $allClassBar->item($i)->firstChild->nodeValue;
    }
	*/
	//$result = $dom->getElementsByTagName('ZoomContentBody')->item(0)->childNodes;
    
	//$element = $dom->getElementById('ZoomContentBody');
	
	//echo $element->nodeValue."<br />";
	//print_r($result);
	
	// discard white space
	//$dom->preserveWhiteSpace = false;
	//$NewsAuthor = $dom->find('.ctcBody', 0);
	//print_r($data);
	//print_r($dom);
	//print_r($test);
	
?>