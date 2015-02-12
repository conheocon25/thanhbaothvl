<?php
	namespace MVC\Command;	
	use MVC\Library\ReadRss;
	require_once('mvc/library/SimpleHtmlDom.php');	
	class AppNewsRssPublish extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			
			//$IdRss = $request->getProperty('IdRss');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			
			$mRssLink 		= new \MVC\Mapper\RssLink();
			$mNewsRss 		= new \MVC\Mapper\NewsRss();
			$mNews 			= new \MVC\Mapper\News();
			$mConfig 		= new \MVC\Mapper\Config();
			$mCategoryNews = new \MVC\Mapper\CategoryNews();
		
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------	
			
			\ini_set('max_execution_time', 300); //300 seconds = 5 minutes
			
			$dConfig = $mConfig->findByName("AUTO_NEWS");
			
			$AUTONEWS = $dConfig->getValue();
			
			//if(isset($IdRss)) 
			//{
				$DRssLinkAll = $mRssLink->findAll();
			
			while ($DRssLinkAll->valid())
			{			
				$dRssLink 	= $DRssLinkAll->current();	
				//$dRssLink 	= $mRssLink->find($IdRss);
				$IdRss 		= $dRssLink->getId();
				$WebUrl 	= $dRssLink->getWeburl();
				$Url 		= $dRssLink->getRssurl();
				
				$ClassAuthor 		= $dRssLink->getClassAuthor();
				$ClassContent 		= $dRssLink->getClassContentName();
				$ImgPath 			= $dRssLink->getImgPath();
				
				$IdCategory = $dRssLink->getIdCategory();
				
				$dCategoryVideo = $mCategoryNews->find($IdCategory);
				
					$todaytime = new \DateTime('NOW');
					$interval = new \DateInterval('P0Y0DT11H0M');	
					$strDatatime = "_" . $todaytime->format('Y-m-d_H_i_s');
					
					$ReadRssXml = new ReadRss($Url);				
					$ReadRssXml->ReadRssXMLByCurl();				
					$chItems = $ReadRssXml->GetItems();
					
					
					//không Công thêm 11 tiếng do lệch múi giờ Mỹ - Việt Nam
					//$DateNews = $todaytime->add($interval);
					$DateNews = $todaytime;
					//Số lấy tin trước đó để so sánh
					$intervalSub = new \DateInterval('P0Y02DT0H0M');
					
					$DateEnd = $DateNews->format('Y-m-d') . " 23:59:59";
					
					$DateNews = $DateNews->sub($intervalSub);
					$DateStart = $DateNews->format('Y-m-d') . " 0:0:0";
					
					//echo "Ngày bắt đầu: " . $DateStart . "<br />";
					//echo "Ngày kết thúc: " .$DateEnd. "<br />";
					
					$ListNews = $mNews->findByDateTime(array($IdCategory, $DateStart, $DateEnd));
					
					$ListOldNews = array();
					$k=0;		
					while ($ListNews->valid()){
						$dNews = $ListNews->current();
							$OldNew = trim($dNews->getTitle());
							$OldNew = mb_convert_case($OldNew, MB_CASE_LOWER, "UTF-8"); 
							$ListOldNews[$k] = $OldNew;	
							$k=$k +1;
						$ListNews->next();
					}
							
								
					$flagIns = false;				
					$i = 0;
					$lengthOld = count($ListOldNews);
					
					if (is_array($chItems) and count($chItems)>0)
					{					
						foreach ($chItems as $key => $item)
						{
							$CurTitle = trim($item['title']);						
							$CurTitle = mb_convert_case($CurTitle, MB_CASE_LOWER, "UTF-8"); 
							
							if ($lengthOld < 0) 
							{
								$lengthOld =0;
							}
								for($l=0; $l < $lengthOld; ++$l) {
										$OldNew = $ListOldNews[$l];															
										if (strcmp($OldNew, $CurTitle) == 0) {
											$flagIns = true;									
											break;
										}								
								}
							
							if ($flagIns == false) {
								
								$curl_handle=curl_init();
								curl_setopt($curl_handle, CURLOPT_URL,$item['link']);
								curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 30);
								curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);				
								curl_setopt($curl_handle, CURLOPT_BINARYTRANSFER, true);
								curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);				
								curl_setopt($curl_handle, CURLOPT_USERAGENT, $WebUrl);
								$data = curl_exec($curl_handle);
								curl_close($curl_handle);
								
								$dom = new \DOMDocument();
								@$dom->loadHTML($data);							
								
								$dom->saveHTMLFile("data/giacngo_". $IdCategory . "_" . $strDatatime . "_" . $i . ".html");
								$HTML = file_get_html("data/giacngo_". $IdCategory . "_" . $strDatatime . "_" . $i . ".html");					
								
								
								$NewsAuthor = $HTML->find('.' . $ClassAuthor, 0);										
								$NewsContent = $HTML->find('.' . $ClassContent, 0);					
								
								// Loc Class ko hien thi
								
								
								foreach( $NewsContent->find('.related_post') as $repost) {
									if (isset($repost)) $repost->hidden = "hidden";;
								}
								
								foreach( $NewsContent->find('.related_post_title') as $reposted) {
									if (isset($reposted)) $reposted->hidden = "hidden";;
								}
								
								foreach( $NewsContent->find('.tags') as $tags) {
									if (isset($tags)) $tags->hidden = "hidden";;
								}
								
								foreach( $NewsContent->find('.adv_items') as $ssContent) {
									if (isset($ssContent)) $ssContent->hidden = "hidden";
								}
								
								foreach( $NewsContent->find('script') as $Zone) {
									if (isset($Zone)) $Zone->src = "";
								}
								
								foreach( $NewsContent->find('#ads_zone6981') as $Zone) {
									if (isset($Zone)) $Zone->hidden = "hidden";
								}
								
								
								
								if ( $ImgPath == 0) {
									foreach( $NewsContent->find('img') as $img){
										if (substr($img->src,0,1) == "/")
											$img->src =  $WebUrl .$img->src; 
									}
								}
								foreach( $NewsContent->find('iframe') as $ifra){
									if (substr($ifra->src,0,1) == "/")
										$ifra->src = $WebUrl .$ifra->src; 
								}
																
								$NewsContent 	= \stripslashes($NewsContent);
								
								if (!isset($NewsAuthor)) {
									$NewsAuthor = "Nguồn THVL.VN";
								}else {
									$NewsAuthor = html_entity_decode($NewsAuthor->plaintext, ENT_QUOTES, 'UTF-8');
								}				
								// Thêm tin mới	nếu $AUTONEWS = 1 thì ko cần duyệt tin còn $AUTONEWS = 0 thì vào NewsRss chờ duyệt tin	
								if ($AUTONEWS == 1) {
									$News = new \MVC\Domain\News(
										null,
										$IdCategory,										
										$NewsAuthor,
										null,
										$NewsContent,
										$item['title'],
										0,
										""
									);
									$News->reKey();
									$mNews->insert($News);
									
								} else {
									$NewsRss = new \MVC\Domain\NewsRss(
										null,
										$IdCategory,
										$IdRss,
										$NewsAuthor,
										null,
										$NewsContent,
										$item['title'],
										0,
										""
									);						
									
									$NewsRss->reKey();
									$mNewsRss->insert($NewsRss);
								}
								
								$i = $i + 1;
									
									echo "<br />" . $i . "Đã thêm tin moi: " . $CurTitle . "<br />";							
								
								
								unset($dom);
								unset($HTML);								
								unset($News);						
								unset($NewsRss);														
								$NewsAuthor = "";
								$NewsContent = "";														
							}
							$flagIns = false;
						}
							
					}
					
					echo "Đã thêm ". $i . " của vào Danh mục: " . $dCategoryVideo->getName() . "<br />";
					
				array_map('unlink', glob("data/*.html")); 
				$DRssLinkAll->next();				
			}
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			return self::statuses('CMD_OK');			
		}
	}
?>