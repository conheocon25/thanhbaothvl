<?php
	namespace MVC\Command;
	use MVC\Library\ReadRss;
	require_once('mvc/library/SimpleHtmlDom.php');	
	class NewCategoryInsLocal extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			
				//$IdRss = $request->getProperty('IdRss');
				
				//15	Hằng ngày
				$Url = "http://thvl.vn/?cat=10&feed=rss2";
				$IdCategory= 11;
				
				$mNews = new \MVC\Mapper\News();
				$todaytime = new \DateTime('NOW');					
				$strDatatime = "_" . $todaytime->format('Y-m-d_H_i_s');
				
				$Type = 0;
				$ReadRssXml = new ReadRss($Url);				
				$ReadRssXml->ReadRssXMLByCurl();				
				$chItems = $ReadRssXml->GetItems();
				$i = 0;
				$j = 0;
				if (is_array($chItems) and count($chItems)>0)
				{					
					foreach ($chItems as $key => $item)
					{					   
					    if (isset($item['link']) and $item['link'] != null)
						{
							$curl_handle=curl_init();
							curl_setopt($curl_handle, CURLOPT_URL,$item['link']);
							curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
							curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);				
							curl_setopt($curl_handle, CURLOPT_BINARYTRANSFER, true);
							curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);				
							curl_setopt($curl_handle, CURLOPT_USERAGENT, 'thvl.vn');
							$data = curl_exec($curl_handle);
							curl_close($curl_handle);
							
							$dom = new \DOMDocument();
							@$dom->loadHTML($data);						

							$dom->saveHTMLFile("data/thvl_". $IdCategory . "_" . $strDatatime . "_" . $j . ".html");
							$HTML = file_get_html("data/thvl_". $IdCategory . "_" . $strDatatime . "_" . $j . ".html");					
												
																
							
							$NewsContent = $HTML->find('.content', 0);	
							//echo $NewsContent;
							//echo "<br />";
							
							foreach( $NewsContent->find('iframe') as $img){
								if (substr($img->src,0,1) == "/")
									$img->src = "http://thvl.vn/".$img->src; 
							}						
							
							$date = new \DateTime($item['pubDate']);
							
							if (($todaytime->diff($date)->format('%D') <= 0) && ($todaytime->diff($date)->format('%R') == '-')) {
								$News = new \MVC\Domain\News(
									null,
									$IdCategory,
									html_entity_decode($item['dc:creator'], ENT_QUOTES, 'UTF-8'),
									null,
									$NewsContent,
									$item['title'],
									$Type,
									""
								);						
								
								$News->reKey();
								$mNews->insert($News);
								$i= $i + 1;
							}
							
							unset($dom);
							unset($HTML);
							unset($data);
							unset($News);						
							unset($date);						
							unset($tags);						
							unset($related_post_title);						
							unset($related_post);						
							unset($NewsContent);					
							
							$Type = 0;
							$j=$j+1;
						}
					}
						
				}
				echo "Them Thanh Cong ".$i. " cua Id New:" . $IdCategory;
				unset($todaytime);				
				unset($mNews);			
				unset($chItems);				
				unset($i);
				unset($j);			
		}
		
	}	
?>