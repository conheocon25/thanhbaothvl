<?php	
use MVC\Library\Number;
require_once("mvc/base/ViewHelper.php");
$req = VH::getRequest();

$Networks = $req->getObject('Networks');

require_once('mvc/library/tcpdf/tcpdf.php');
require_once("mvc/library/phptal/PHPTAL.php");
class MYPDF extends TCPDF {
	//Page header
	public function Header() {
						
	}
	// Page footer
	public function Footer() {
		$this->SetY(-15);
		$this->SetFont('freeserif', '', 8);
		$this->Cell(0, 10, 'Trang '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');	
	}
}
	
	$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);	
	$pdf->setHeaderFont(Array('freeserif', '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array('freeserif', '', PDF_FONT_SIZE_DATA));
	
	$pdf->SetMargins(5, 15, 5);	
	$pdf->SetHeaderMargin(1);
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	//$pdf->setLanguageArray($l);

	$pdf->AddPage();
					
	//$pdf->SetFont('freeserif', 'N', 12);
	//$tpl = new PHPTAL( "mvc/templates/PrintBookTitle.html");
	//$html = $tpl->execute();
	//$pdf->writeHTML($html, true, false, true, false, '');
	//$pdf->AddPage();
	
	$tpl = new PHPTAL( "mvc/templates/PrintBookContent.html");
	$tpl->Networks = $Networks;
	$html = $tpl->execute();
	$pdf->writeHTML($html, true, false, true, false, '');
			
	$pdf->lastPage();
	$pdf->Output('PrintEmployeeLog.pdf', 'I');
?>