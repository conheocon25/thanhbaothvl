<?php	
use MVC\Library\Number;
require_once("mvc/base/ViewHelper.php");
$req = VH::getRequest();
$Page = $req->getObject('Page');

require_once('mvc/library/tcpdf/tcpdf.php');
require_once("mvc/library/phptal/PHPTAL.php");
class MYPDF extends TCPDF {
	//Page header
	public $nPage;
	public function Header() {
						
	}
	// Page footer
	public function Footer() {
		$this->SetY(-15);
		$this->SetFont('freeserif', 'B', 12);
		$this->Cell(20, 10, 'Trang '.$this->nPage, 0, false, 'L', 0, '', 0, false, 'T', 'M');
		$this->SetFont('freeserif', 'BI', 12);
		$this->Cell(0, 10, 'thegioisim24h.com', 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}
	
	$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);	
	$pdf->setHeaderFont(Array('freeserif', '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array('freeserif', '', PDF_FONT_SIZE_DATA));
	$pdf->nPage = $Page->getPage();
	
	$pdf->SetMargins(5, 5, 5);	
	$pdf->SetHeaderMargin(1);
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	$pdf->AddPage();
		
	$tpl = new PHPTAL( "mvc/templates/PrintPage.html");
	$tpl->Page = $Page;
	$html = $tpl->execute();
	$pdf->writeHTML($html, true, false, true, false, '');
			
	$pdf->lastPage();
	$pdf->Output('PrintPage.pdf', 'I');
?>