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
	
	$url = 'http://giacngo.vn/vanhoa/phatgiao/2014/05/17/32E010/';
	
	$curl_handle=curl_init();
		curl_setopt($curl_handle, CURLOPT_URL,$url);
		curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
				
		curl_setopt($curl_handle, CURLOPT_BINARYTRANSFER, true);
		curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl_handle, CURLOPT_HEADER, 0);	
		curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('Host:giacngo.vn'));
		curl_setopt($curl_handle, CURLOPT_USERAGENT, 'giacngo.vn');
		$xmlcontent = curl_exec($curl_handle);
		
	*/
	$curl = curl_init();
     
    // Setup headers - I used the same headers from Firefox version 2.0.0.6
    // below was split up because php.net said the line was too long. :/
    $header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
    $header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
    $header[] = "Cache-Control: max-age=0";
    $header[] = "Connection: keep-alive";
    $header[] = "Keep-Alive: 300";
    $header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $header[] = "Accept-Language: en-us,en;q=0.5";
    $header[] = "Pragma: ";
    // browsers keep this blank.
     
     
    $referers = array("google.com", "yahoo.com", "msn.com", "ask.com", "live.com");
    $choice = array_rand($referers);
    $referer = "http://" . $referers[$choice] . "";
     
    $browsers = array("Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.3) Gecko/2008092510 Ubuntu/8.04 (hardy) Firefox/3.0.3", "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1) Gecko/20060918 Firefox/2.0", "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.3", "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506)");
    $choice2 = array_rand($browsers);
    $browser = $browsers[$choice2];
	
    $url = 'http://giacngo.vn/vanhoa/phatgiao/2014/05/17/32E010/';
	 
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_USERAGENT, $browser);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    curl_setopt($curl, CURLOPT_REFERER, $referer);
    curl_setopt($curl, CURLOPT_AUTOREFERER, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 30);
    curl_setopt($curl, CURLOPT_MAXREDIRS, 7);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_HEADER, 0); 
    $data = curl_exec($curl);
	
	curl_close($curl);

	$dom = new DOMDocument();	 	 
	// load the html into the object
	//$dom = dom_import_simplexml(simplexml_load_string($xmlcontent));
	//$test = $dom->load($data);
	@$dom->loadHTML($data);
	//print_r($dom);
	$test = getElementsByClassName($dom, "ctcBody");
	$Elements = $test[0]->getElementsByTagName("img");
	
	
	for ($i = 0; $i < $Elements->length; ++$i) {
		echo "Name: ". $Elements->item($i)->nodeName . "<br/>";
		
		//echo "Value: ".$Elements->item($i)->nodeValue . "<br/>";
		if (substr($Elements->item($i)->getAttribute('src'),0,1) == "/")
			$Elements->item($i)->setAttribute('src', "http://giacngo.vn/".$Elements->item($i)->getAttribute('src')); 
			
		echo "SRC: ". $Elements->item($i)->getAttribute('src') . "<br/>";
	}
	print_r($dom->saveHTML());
	
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