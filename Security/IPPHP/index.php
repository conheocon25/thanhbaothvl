<?php
// Preset PHP settings
error_reporting(E_ALL);
ini_set('display_errors', 1);
set_time_limit(0);
 //$location = file_get_contents('http://freegeoip.net/json/113.161.196.216');
 //$location = file_get_contents('http://freegeoip.net/json/192.185.246.91');
 //$location = file_get_contents('http://www.iplocationfinder.com/192.185.246.91'); 
// print_r($location);

function geoCheckIP($ip)
{
	 
	//check, if the provided ip is valid
	 
	if(!filter_var($ip, FILTER_VALIDATE_IP))
	 
	{
	 
	throw new InvalidArgumentException("IP is not valid");
	 
	}
	 
	//contact ip-server
	 
	$response=@file_get_contents('http://www.netip.de/search?query='.$ip);
	
	 
	if (empty($response))
	 
	{
	 
	throw new InvalidArgumentException("Error contacting Geo-IP-Server");
	 
	}
	 
	//Array containing all regex-patterns necessary to extract ip-geoinfo from page
	 
	$patterns=array();
	 
	$patterns["domain"] = '#Domain: (.*?)&nbsp;#i';
	 
	$patterns["country"] = '#Country: (.*?)&nbsp;#i';
	 
	$patterns["state"] = '#State/Region: (.*?)<br#i';
	 
	$patterns["town"] = '#City: (.*?)<br#i';
	 
	//Array where results will be stored
	 
	$ipInfo=array();
	
	 
	//check response from ipserver for above patterns
	 
	foreach ($patterns as $key => $pattern)
	 
	{
	 
	//store the result in array
	 
	$ipInfo[$key] = preg_match($pattern,$response,$value) && !empty($value[1]) ? $value[1] : 'not found';
	 
	}
	/*I've included the substr function for Country to exclude the abbreviation (UK, US, etc..)
	To use the country abbreviation, simply modify the substr statement to:
	substr($ipInfo["country"], 0, 3)
	*/
	$ipdata = "Ban Ðang o Huyen/TP: " . $ipInfo["town"]. ", Khu vuc: ".$ipInfo["state"].", Ðat nuoc: ".substr($ipInfo["country"], 4);
	 
	return $ipdata;
	 
}
//$ip = '113.161.196.216';
 $ip='94.219.40.96';
//$ip = '112.213.82.66';
 
echo geoCheckIP($ip);


?>
