<?php
class tgshai_user {
		function getViewOrderLinked()
		{
			return "vieworder.php?idorder=$this->id";
			
		}
		function getViewOrderIndexLinked()
		{
			return "Command/vieworder.php?idorder=$this->id";
			
		}		
		function getTitleOrder()
		{
			return "Đã đặt Sim $this->idsim";
			
		}
	}
?>