<?php
namespace CustomClass;

class ElectronicItem
{
	/**
	* @var float
	*/
	public $price;
	/**
	* @var string
	*/
	private $type;
	public $wired;
	
	const ELECTRONIC_ITEM_TELEVISION = 'television';
	const ELECTRONIC_ITEM_CONSOLE = 'console';
	const ELECTRONIC_ITEM_MICROWAVE = 'microwave';
	const ELECTRONIC_ITEM_CONTROLLER = 'controller';

	
	private static $types = array(
			self::ELECTRONIC_ITEM_CONSOLE => CONSOLE_PRICE,
			self::ELECTRONIC_ITEM_MICROWAVE => MICROWAVE_PRICE,
			self::ELECTRONIC_ITEM_TELEVISION => array('TELEVISION 1st'=>TV1_PRICE, 'TELEVISION 2nd'=>TV2_PRICE),
			self::ELECTRONIC_ITEM_CONTROLLER => array('Remote Controllers' => REMOTE_CONTROLLER_PRICE,'Wired Controllers'=>WIRED_CONTROLLER_PRICE)
	);
	
	public function getAllElexType()
	{
		return self::$types;
	}
	
	function getPrice()
	{
		return $this->price;
	}
	
	
	function getType()
	{
		return $this->type;
	}
	
	function getWired()
	{
		return $this->wired;
	}
	
	function setPrice($price)
	{
		$this->price = $price;
	}
	
	function setType($type)
	{
		$this->type = $type;
	}
	
	function setWired($wired)
	{
		$this->wired = $wired;
	}
}