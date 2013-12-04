<?php
class page {
		public $cmd;
		public $id;		
		
		function page($id, $cmd)
		{			
			$this->id = $id;
			$this->cmd = $cmd;
		}		
		function getPageLinked()
		{
			return "index.php?page=$this->id";			
		}
		function getLinked()
		{
			return $this->cmd."&page=".$this->id;
		}				
			
	}
?>