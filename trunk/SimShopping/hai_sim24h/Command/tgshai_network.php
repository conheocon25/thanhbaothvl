<?php
class tgshai_network {			
		function getNumber()
		{
			return number_format($this->name,0,',','.');
		}		
		function getSearchLinked()
		{
			return "index.php?SearchNetwork=$this->Network&SearchNetworkNumber=$this->name";
		}
	}
?>