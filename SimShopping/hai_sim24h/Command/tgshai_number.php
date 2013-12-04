<?php
class tgshai_number {		
		function getId()
		{
			return $this->id;
		}
		function getNumber()
		{
			return $this->number;
		}
		function getFormatNumber()
		{
			return trim($this->formatnumber, ' ');
		}
		function getState()
		{
			if ($this->state == 0)
				return "Còn hàng";
			else	return "Hết hàng";
		}		
		function getPrice()
		{
			return number_format(trim($this->price),0,',','.');
		}
		function getNetworkPicture()
		{
			return "../hai_sim24h/Template/images/$this->network";
			
		}
		function getNetwork()
		{
			return $this->network;
		}
		function getCartLinked()
		{
			return "../hai_sim24h/Command/addcustomer.php?idnumber=$this->number";
			
		}
		function getCartIndexLinked()
		{
			return "../hai_sim24h/Command/addcustomer.php?idnumber=$this->number";
			
		}
		function getDeleteLinked()
		{
			return "../hai_sim24h/Command/editnumber.php?delnumber=$this->id";
			
		}
		function getDeleteHotNumberLinked()
		{
			return "../Command/viewhotnumber.php?id=$this->id";
			
		}
		function getHotNumberLinked()
		{
			return "../Command/inserthotnumber.php?id=$this->id";
			
		}
		function getEditLinked()
		{
			return "../hai_sim24h/Command/editnumber.php?idnumber=$this->id";
			
		}
		function getTitleCartLinked()
		{
			return "Bạn chọn để mua Sim $this->number";
			
		}
	}
?>