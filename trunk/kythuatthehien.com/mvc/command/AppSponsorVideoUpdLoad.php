<?php
	namespace MVC\Command;	
	class AppSponsorVideoUpdLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdSponsor = $request->getProperty('IdSponsor');
			$IdVideo = $request->getProperty('IdVideo');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mCategoryBType = new \MVC\Mapper\CategoryBType();
			$mCategoryAsk = new \MVC\Mapper\CategoryAsk();
			$mCategoryNews = new \MVC\Mapper\CategoryNews();
			$mCategoryVideo = new \MVC\Mapper\CategoryVideo();
			
			$mMonk = new \MVC\Mapper\Monk();
			$mVS = new \MVC\Mapper\VideoSponsor();
			$mPagoda = new \MVC\Mapper\Pagoda();
			$mSponsor = new \MVC\Mapper\Sponsor();
														
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$CategoryBTypeAll = $mCategoryBType->findAll();
			$CategoryAskAll = $mCategoryAsk->findAll();
			$CategoryNewsAll = $mCategoryNews->findAll();
			$CategoryVideoAll = $mCategoryVideo->findAll();
			
			$Sponsor = $mSponsor->find($IdSponsor);
			$VS = $mVS->find($IdVideo);
			$PagodaAll = $mPagoda->findAll();
			$SponsorAll = $mSponsor->findAll();
			
			$Title = mb_strtoupper($VS->getVideo()->getName(), 'UTF8');			
			$Navigation = array(
				array("TRANG CHỦ", "/trang-chu"),
				array("QUẢN LÝ", "/app"),
				array("SỔ VÀNG CÔNG ĐỨC", "/app/sponsor"),
				array(mb_strtoupper($Sponsor->getName(), 'UTF8'), $Sponsor->getURLVideo() )
			);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject('CategoryBTypeAll', $CategoryBTypeAll);
			$request->setObject('CategoryAskAll', $CategoryAskAll);
			$request->setObject('CategoryNewsAll', $CategoryNewsAll);
			$request->setObject('CategoryVideoAll', $CategoryVideoAll);
			
			$request->setObject('Sponsor', $Sponsor);
			$request->setObject('VS', $VS);
			$request->setObject('PagodaAll', $PagodaAll);			
			$request->setObject('SponsorAll', $SponsorAll);
			$request->setObject('Navigation', $Navigation);	
			$request->setProperty('Title', $Title);
			$request->setProperty('ActiveItem', "Home");
		}
	}
?>
