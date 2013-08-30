<?php
class tgshai_category {
		
		function getTitleOrder()
		{
			return "Mua Sim:$this->idsim";
			
		}

		function getUpdateLinked()
		{
			return "vieworder.php?idorder=$this->id";
			
		}
		
		function getPrice()
		{
			return number_format($this->price,0,',','.');
		}
	}
?>