<?php 
use CustomClass\ElectronicItem;
use CustomClass\ElectronicItems;
use CustomClass\Console;
use CustomClass\Television;
use CustomClass\Microwave;
use CustomClass\Rcontroller;

require_once __DIR__.'/vendor/autoload.php';

//Listing of all Electronic items and its price.
$objElexItem = new ElectronicItem();
$elexItemList = $objElexItem -> getAllElexType();
$elexItemListPrice = array();
$totalOfElexItemPrice = 0;
	foreach($elexItemList as $key => $value) {
		if(!is_array($value)) {
					$elexItemListPrice[] = array('Type'=>$key, 'Item Name'=>'---','price'=>$value);
					$totalOfElexItemPrice = $totalOfElexItemPrice + $value;
		} else {
			foreach($value as $newKey => $newValue) {
				$elexItemListPrice[] = array('Type'=>$key, 'Item Name'=>$newKey ,'price'=>$newValue);
				$totalOfElexItemPrice = $totalOfElexItemPrice + $newValue;
			}
		}
	}


usort($elexItemListPrice,"my_sort");;

//Console and it's extras
//The console has 2 remote controllers and 2 wired controllers.
$objConsole = new Console();
$objConsole -> setPrice(CONSOLE_PRICE);
$consolePrice = $objConsole -> getPrice(); //console price

//setting the number of extras allow
$returnConsoleExtrasAllowed = $objConsole -> returnAllowedExtra(CONSOLE_NUMOFEXTRASALLOWED);
if($returnConsoleExtrasAllowed <= CONSOLE_NUMOFEXTRAS) { 
	$remoteControlPriceForConsole = getControllerGeneralPrice(REMOTE_CONTROLLER_PRICE, 2);  // 2 remote controllers price.
	$wiredControlPriceForConsole = getControllerGeneralPrice(WIRED_CONTROLLER_PRICE, 2);  // 2 wired controllers.
}

$totalConsole = (!empty($consolePrice)?$consolePrice:null) + (!empty($remoteControlPriceForConsole)?$remoteControlPriceForConsole:null) + (!empty($wiredControlPriceForConsole)?$wiredControlPriceForConsole:null);

// end of The console has 2 remote controllers and 2 wired controllers.


//The TV 1 has 2 remote controllers and the TV 2 has 1 remote controller.
$tv = new Television();
$returnTVExtrasAllowed = $tv -> returnAllowedExtra(TELEVISION_NUMOFEXTRASUNLIMITED);
unset($tv);
if($returnTVExtrasAllowed == TELEVISION_NUMOFEXTRASUNLIMITED && TELEVISION_NUMOFEXTRAS_BASE < TELEVISION_NUMOFEXTRASUNLIMITED)
{
	$tv1 = new Television();
	$tv1 -> setPrice(TV1_PRICE);
	$tv1_price = $tv1->getPrice(); //tv1 price
	
	$tv2 = new Television();
	$tv2 -> setPrice(TV2_PRICE);
	$tv2_price = $tv2 -> getPrice(); //tv2 price
	
	$remoteControlPriceForTv1 = getControllerGeneralPrice(REMOTE_CONTROLLER_PRICE, 2);  // 2 remote controllers price.
	$remoteControlPriceForTv2 = getControllerGeneralPrice(REMOTE_CONTROLLER_PRICE, 1);  // 2 remote controllers price.	
}

$totalTelevision = (!empty($tv1_price)?$tv1_price:null) + (!empty($tv2_price)?$tv2_price:null) + (!empty($remoteControlPriceForTv1)?$remoteControlPriceForTv1:null) + (!empty($remoteControlPriceForTv2)?$remoteControlPriceForTv2:null);

//price of 1 microwave
$obj_micro = new Microwave();
$obj_micro -> setPrice(MICROWAVE_PRICE);
$microwavePrice = $obj_micro -> getPrice();

//GrandTotal user spend
$grandTotal = $totalConsole + $totalTelevision + $microwavePrice;

//Sort the items by price and output the total pricing  (Items that are bought by persions)
$itemsArray = array(
				'television' => $tv1_price + $tv2_price,
				'console '=> $consolePrice,
				'microwave'=> $microwavePrice,
				'controller'=> $remoteControlPriceForConsole + $wiredControlPriceForConsole + $remoteControlPriceForTv1 + $remoteControlPriceForTv2
			);

//"Sorted Electronic Items by its total spend price";

$objElectronicItems = new ElectronicItems($itemsArray);
$sortedItem = $objElectronicItems -> customSortItems();
$grandTotalUserSpend = $objElectronicItems->grandTotal(); 

function getControllerGeneralPrice($controller_type, $quantity)
{
	$obj_controller = new Rcontroller();
	$obj_controller -> setControllerPrice($controller_type, $quantity);
	return $obj_controller -> getControllerPrice();
}

function my_sort($a,$b)
{
	return $a['price'] <=> $b['price'];
}
require_once __DIR__.'/mainlayout.php';


