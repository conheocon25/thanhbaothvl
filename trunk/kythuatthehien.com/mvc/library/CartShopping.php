<?php
Namespace MVC\Library;

class CartShopping {
	
	private $Id;
	
	function __construct() {
		if (!isset($this->Id)) {
			$this->Id = array();					
		}
    }			
	function count()
	{
		return count($this->Id);
	}
	function getAll()
	{
		return $this->Id;
	}
	
	function getId($key)
	{
		if(isset($key))
		{
			return ($this->Id[$key]);
		}
		return null;
	}
	
	function add($id)
	{
		if (isset($id))
        { 			
			$this->Id[$this->count()] = $id;
			$this->Id = array_values($this->Id);			
        } 
	}
	function remove($index)
	{		
        if (($index < $this->count()))
		{
			if($index == 0)
			{
				unset($this->Id);
				return true;
			}
			unset($this->Id[$index]);
			$this->Id = array_values($this->Id);			
			return true;
		}
		return false;
	}
	function clear()
	{	
		unset($this->Id);
	}
}
?>