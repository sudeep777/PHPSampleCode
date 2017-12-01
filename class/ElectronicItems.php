<?php
namespace CustomClass;

class ElectronicItems
{
	private $items = array();
	public function __construct(array $items)
	{
		$this->items = $items;
	}
	/**
	* Returns the items depending on the sorting type requested
	*
	* @return array
	*/
	public function getSortedItems($type)
	{
		$sorted = array();
		foreach ($this->items as $item)
		{
			$sorted[($item->price * 100)] = $item;
		}
		return ksort($sorted, SORT_NUMERIC);
	}
	/**
	*
	* @param string $type
	* @return array
	*/
	public function getItemsByType($type)
	{
		if (in_array($type, ElectronicItem::$types))
		{
			$callback = function($item) use ($type)
			{
				return $item->type == $type;
			};
			$items = array_filter($this->items, $callback);
		}
	return false;
	}
	
	
	public function customSortItems()
	{
		 asort($this->items);
		 return $this->items;
	}
	public function grandTotal()
	{
		$totalPrice = 0;
		foreach($this->items as $price) {
			$totalPrice += $price;
		}
		return $totalPrice;
	}
}