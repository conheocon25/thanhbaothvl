<?php
class tgshai_vieworder {		
		function getTitleOrder()
		{
			return "Mua Sim:$this->idsim";
			
		}		
		function getUpdateLinked()
		{
			return "vieworder.php?idorder=$this->id&idsim=$this->idsim";
			
		}
		function getDeleteLinked()
		{
			return "vieworder.php?idorderdel=$this->id";
			
		}
		
		function getViewOrderDetailIndexLinked()
		{
			return "../Command/vieworderdetail.php?id=$this->idcustomer&type=$this->type";
			
		}	
		function getViewTotalIncomeIndexLinked()
		{
			return "../Command/viewcustomer.php?id=$this->idcustomer";
			
		}
		function getPrice()
		{
			return number_format($this->price,0,',','.');
		}
	}
?>