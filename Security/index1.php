<?php
class Printer
	{
	public $_auth;
	public $_username;
	public $_password;
	public $_printerId;
	
	function __construct($_auth = null, $_username = null, $_password = null, $_printerId = null )
		{			
			$this->_auth = $_auth;
			$this->_username = $_username;
			$this->_password= $_password;
			$this->_printerId=$_printerId;
			
		}
	function processRequest($url, $postFields, $referer) {  
		$ret = "";
		$ch = curl_init(); 

		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_USERAGENT, "");
		if(!is_null($postFields)) {
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS,
				 $postFields);
			// http_build_query() will properly escape the fields and
			//  build a query string.
		}

		if(strlen($this->_auth) > 0) {
			$headers = array(
			"Authorization: GoogleLogin auth=". $this->_auth,
			//"GData-Version: 3.0",
			"X-CloudPrint-Proxy", "yourappname"
			);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		}

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_REFERER, $referer);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);    

		$ret = curl_exec ($ch);

		curl_close ($ch); 

		return $ret;
	}

	public function authorize() {
		$url = "https://www.google.com/accounts/ClientLogin";
		$post = array("accountType" => "HOSTED_OR_GOOGLE",
		"Email" => $this->_username,
		"Passwd" => $this->_password,
		"service" => "cloudprint",
		"source" => "yourappname");
		$resp = $this->processRequest($url, $post, "");

		preg_match("/Auth=([a-z0-9_\-]+)/i", $resp, $matches);
		$this->_auth = $matches[1];
	  }
	  
	  function printDocument($title, $docBytes)
	{
		$url = "http://www.google.com/cloudprint/submit?printerid=". $this->_printerId."&output=json";

		$post = array(
			"printerid" => $this->_printerId,
			"capabilities" => "",
			"contentType" => "dataUrl",
			"title" => $title,
			"content" => 'data:application/pdf;base64,'. base64_encode($docBytes)
		);

		$ret = $this->processRequest($url, $post, "");

		echo $ret;
	}
}

	

	// Test print a job:
	$b64_pathname = 'd:\\In.pdf'.'.b64';
	$fileType = "application/pdf";
	// Open the original file and base64 encode it:
	$dataHandle = fopen('d:\\In.pdf', "rb");
	$dataContent = fread($dataHandle, filesize('D:\\ec22ed167763a15e8591a3776f3c65c3.pdf'));
	fclose($dataHandle);
	$b64data = $fileType.base64_encode($dataContent);
	// Store the base64 encoded file:
	$ourFileHandle = fopen($b64_pathname, 'w');
	fwrite($ourFileHandle, $b64data);
	fclose($ourFileHandle);
	// Read the contents of the base64 encoded file and delete it:
	$fileHandle = fopen($b64_pathname, "rb");
	$fileContent = fread($fileHandle, filesize($b64_pathname));
	fclose($fileHandle);
	unlink($b64_pathname);
	// URL encode the file contents:
	$file = urlencode($fileContent);
	
	$Printed = new Printer( "bao", "thanhbao2007vl@gmail.com", "nhatkyty25", "admin123456");	
	$Printed->printDocument("safasdfas",$file);
	// Add the file and send to the printer:
	//$client->setParameterPost('content', $file);
	//$client->setParameterPost('contentType', $fileType);
	//$client->request(Zend_Http_Client::POST);
?>

