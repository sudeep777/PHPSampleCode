<?php 
namespace CustomClass;

use CustomInterface\Extra;

class Microwave extends ElectronicItem  implements Extra
{
	public $extraElectronic;
	
	public function returnAllowedExtra($noOfExtras)
	{ 
		$this->maxExtras($noOfExtras);
		return $this->getMaxExtra();
	}
	
	public function maxExtras($noOfExtras)
	{ 
		$this->extraElectronic = $noOfExtras;
	}
	
	public function getMaxExtra()
	{
		return $this->extraElectronic;
	}
}