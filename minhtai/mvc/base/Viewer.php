<?php
require_once("mvc/base/Library.php");
class Viewer {
	function __construct($Path=null){
		$this->Path = $Path;
    }
	
	//-------------------------------------------------
	//Hỗ trợ template xuất ra dưới dạng HTML    
	//-------------------------------------------------
	function html(){
		//Lấy các tham số toàn cục
		$Session = \MVC\Base\SessionRegistry::instance();		
		$User = $Session->getCurrentUser();
				
		//Lấy các tham số đã được xử lí
		$request = \MVC\Base\RequestRegistry::getRequest();
		$objects = $request->getObjects();
		$properties = $request->getProperties();
		
		//Khởi tạo template và chuyển các thuộc tính và đối tượng sang
		$tpl = new PHPTAL($this->Path);				
		while (list($key, $val) = each($objects)){
			$tpl->$key = $val;
		}
		while (list($key, $val) = each($properties)){
			$tpl->$key = $val;
		}		
		$tpl->User = $User;
		$Output = $tpl->execute();
		unset($tpl);
		
		//Kết xuất dữ liệu ra HTML
		return $Output;
	}
	
	//-------------------------------------------------
	//Hỗ trợ template xuất ra dưới dạng HTML    
	//-------------------------------------------------
	function pdf(){
		
		$html = $this->html();		
		$pdf = new \TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		$pdf->SetMargins(5, 15, 5);
		$pdf->SetHeaderMargin(1);
		$pdf->setPrintHeader(false);		
		$pdf->setPrintFooter(false);
		//$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);			
		$pdf->AddPage();
		$pdf->SetFont('freeserif', 'N', 10);					
		$pdf->writeHTML($html, true, false, true, false, '');				
		$Out = $pdf->Output("abc.pdf", 'I');
		unset($Out);
		
		return $Out;
	}
	function pdf1(){
				
		$html = $this->html();
		$pdf = new \MVC\Library\PDF1(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
				
		$pdf->SetMargins(5, 15, 5);
		$pdf->SetHeaderMargin(1);
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);	
		$pdf->AddPage();
		$pdf->SetFont('freeserif', 'N', 10);
					
		$pdf->writeHTML($html, true, false, true, false, '');
		
		$arr = split('[/\]', $this->Path);
		
		$pdf->Output(end($arr).".pdf", 'I');
	}
	
	function pdfBarcode(){
		
		$html = $this->html();		
		$pdf = new \TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		$pdf->SetMargins(10, 5, 5);
		$pdf->SetHeaderMargin(1);
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);			
		$pdf->AddPage();
		$pdf->SetFont('freeserif', 'N', 10);	
		
        $pdf->resetColumns();
        // print chapter title
        //$this->ChapterTitle($num, $title);
        // set columns
        $pdf->setEqualColumns(3, 60);
		// -----------------------------------------------------------------------------

		
		// define barcode style
		$style = array(
			'position' => '',
			'align' => 'C',
			'stretch' => false,
			'fitwidth' => true,
			'cellfitalign' => '',
			'border' => true,
			'hpadding' => 'auto',
			'vpadding' => 'auto',
			'fgcolor' => array(0,0,0),
			'bgcolor' => false, //array(255,255,255),
			'text' => true,
			'font' => 'freeserif',
			'fontsize' => 8,
			'stretchtext' => 4
		);
		
		$pdf->selectColumn(0);		
		$pdf->Ln(3); 
		$pdf->Cell(0, 0, 'BDC 001', 0, 1);
		$pdf->write1DBarcode('893970784001', 'EAN13', '', '', '', 18, 0.4, $style, 'N');		
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 002', 0, 1);		
		$pdf->write1DBarcode('893970784002', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);	
		$pdf->Cell(0, 0, 'BDC 003', 0, 1);
		$pdf->write1DBarcode('893970784003', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 004', 0, 1);
		$pdf->write1DBarcode('893970784004', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 005', 0, 1);
		$pdf->write1DBarcode('893970784005', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 006', 0, 1);
		$pdf->write1DBarcode('893970784006', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 007', 0, 1);
		$pdf->write1DBarcode('893970784007', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 008', 0, 1);
		$pdf->write1DBarcode('893970784008', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 009', 0, 1);
		$pdf->write1DBarcode('893970784009', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 010', 0, 1);
		$pdf->write1DBarcode('893970784010', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		
		$pdf->selectColumn(1);
		
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 011', 0, 1);
		$pdf->write1DBarcode('893970784011', 'EAN13', '', '', '', 18, 0.4, $style, 'N');		
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 012', 0, 1);		
		$pdf->write1DBarcode('893970784012', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);	
		$pdf->Cell(0, 0, 'BDC 013', 0, 1);
		$pdf->write1DBarcode('893970784013', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 014', 0, 1);
		$pdf->write1DBarcode('893970784014', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 015', 0, 1);
		$pdf->write1DBarcode('893970784015', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 016', 0, 1);
		$pdf->write1DBarcode('893970784016', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 017', 0, 1);
		$pdf->write1DBarcode('893970784017', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 018', 0, 1);
		$pdf->write1DBarcode('893970784018', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 019', 0, 1);
		$pdf->write1DBarcode('893970784019', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 020', 0, 1);
		$pdf->write1DBarcode('893970784020', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		
		
		$pdf->selectColumn(2);
		
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 021', 0, 1);
		$pdf->write1DBarcode('893970784021', 'EAN13', '', '', '', 18, 0.4, $style, 'N');		
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 022', 0, 1);		
		$pdf->write1DBarcode('893970784022', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);	
		$pdf->Cell(0, 0, 'BDC 023', 0, 1);
		$pdf->write1DBarcode('893970784023', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 024', 0, 1);
		$pdf->write1DBarcode('893970784024', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 025', 0, 1);
		$pdf->write1DBarcode('893970784025', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 026', 0, 1);
		$pdf->write1DBarcode('893970784026', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 027', 0, 1);
		$pdf->write1DBarcode('893970784027', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 028', 0, 1);
		$pdf->write1DBarcode('893970784028', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 029', 0, 1);
		$pdf->write1DBarcode('893970784029', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		$pdf->Ln(3);
		$pdf->Cell(0, 0, 'BDC 030', 0, 1);
		$pdf->write1DBarcode('893970784030', 'EAN13', '', '', '', 18, 0.4, $style, 'N');
		
		
		return $pdf->Output("abc.pdf", 'I');
	}
	
}
?>