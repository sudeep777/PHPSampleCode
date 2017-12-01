<?php
namespace CustomClass;

use CustomInterface\Extra;

class Rcontroller extends ElectronicItem  implements Extra
{
	public $extraElectronic;
	public $getPriceController;
	
	public function maxExtras($noOfExtras)
	{
		$this->extraElectronic = $noOfExtra;
	}
	
	public function getMaxExtra()
	{
		return $this->extraElectronic;
	}
	
	function setControllerPrice($price, $quantity = null)
	{
		parent::setPrice($price);
		$this->getPriceController = parent::getPrice();
		if(!empty($quantity)) {
			$this->getPriceController = $this->getPriceController *  $quantity; 
		}
	}
	
	public function getControllerPrice()
	{
		return $this->getPriceController;
	}

}