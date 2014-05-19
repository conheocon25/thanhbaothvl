<?php
class AbsRssReader20
{
	private function __clone(){}
	public function __construct(){}

	protected static $_doc = null;
	protected static $_loaded = FALSE;
	protected static $_rssUrl = FALSE;
	/**
	* Load the xml document
	* @param string $filePath  The path to the xml document
	* @return void
	*/
	final public function Load( $filePath )
	{
		if (is_null($filePath) or strlen($filePath) < 1)
			exit("Error in ".__CLASS__.'::'.__FUNCTION__.'<br/>The path to the rss file is missing!');
		// LOAD XML DOCUMENT
		/*
		$curl_handle=curl_init();
		curl_setopt($curl_handle, CURLOPT_URL,$filePath);
		curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl_handle, CURLOPT_HEADER, 0);		
		curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
		$xmlcontent = curl_exec($curl_handle);
		curl_close($curl_handle);
		*/
		self::$_doc = new DOMDocument();
		//@self::$_doc = dom_import_simplexml(simplexml_load_string($xmlcontent));
		
		if (@self::$_doc->load('gn.xml'))
			self::$_loaded = TRUE;
		else exit("Error: The rss file could not be opened!");
	}
	/**
	* Get the channel tags as an associative array
	* @return array
	*/
	final public function GetChannelTags()
	{
		$result = array();
		if ( ! self::$_loaded) return $result;

		$ch = self::$_doc->getElementsByTagName('channel')->item(0);
		if ( ! is_null($ch))
		{
			if ($ch->hasChildNodes())
			{
				foreach ($ch->getElementsByTagName('*') as $tag)
				{
					// do not select item tags
					if ($tag->hasChildNodes() and ($tag->tagName <> 'item'))
						$result[$tag->tagName] = html_entity_decode($tag->nodeValue, ENT_QUOTES, 'UTF-8') ;
				}
			}
		}
		return $result;
	}
	/**
	* Get the channel items as an associative array
	*
	* @param int $maxLimit  The maximum number of channel items to retrieve from the document.
	* If $maxLimit = 0 all records will be retrieved.
	* @return array
	*/
	final public function GetItems( $maxLimit = 0 )
	{
		$result = array();
		if ( ! self::$_loaded) return $result;

		$ch = self::$_doc->getElementsByTagName('channel')->item(0);
		if ( ! is_null($ch))
		{
			if ($ch->hasChildNodes())
			{
				$i = 0;
				foreach ($ch->getElementsByTagName('item') as $tag)
				{
					$result['item_'.$i] = array();
					
					foreach ($tag->getElementsByTagName('*') as $item)
						$result['item_'.$i][$item->tagName] = html_entity_decode($item->nodeValue, ENT_QUOTES, 'UTF-8') ;

					$i++;
					if ($maxLimit == $i) break;
				}
			}
		}
		return $result;
	}

	/**
	* Get all data from the rss feed as an associative array
	* @return array
	*/
	final public function GetAll()
	{
		$result = array();
		if ( ! self::$_loaded) return $result;

		$channelTags = $this->GetChannelTags();
		$channelItems = $this->GetItems();

		$result = array_merge($channelTags, $channelItems);

		return $result;
	}

}
// >> END
?>