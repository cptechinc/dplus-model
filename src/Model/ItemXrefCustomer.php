<?php

use Base\ItemXrefCustomer as BaseItemXrefCustomer;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;


/**
 * Class for representing a row from the 'cust_item_xref' table.
 *
 * NOTE: Foreign Key Relationship to ItemMasterItem
 */
class ItemXrefCustomer extends BaseItemXrefCustomer {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const ROUNDING_TRUE  = 'Y';
	const ROUNDING_FALSE = 'N';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'custid'          => 'arcucustid',
		'custID'          => 'arcucustid',
		'custitemid'      => 'oexrcustitemnbr',
		'custitemID'      => 'oexrcustitemnbr',
		'theiritemid'     => 'oexrcustitemnbr',
		'itemid'          => 'inititemnbr',
		'itemID'          => 'inititemnbr',
		'description'     => 'oexrcustitemdesc',
		'description2'    => 'oexrcustitemdesc2',
		'revision'        => 'oexrrevision',
		'price_customer'  => 'oexrcustprice',
		'price_retail'    => 'oexrretprice',
		'qty_percase'     => 'oexrqtypercase',
		'qty_pack_inner'  => 'oexrinnerpackqty',
		'qty_pack_outer'  => 'oexrouterpackqty',
		'qty_purchase'    => 'oexrpurchqty',
		'qty_tare'        => 'oexrshiptareqty',
		'convert'         => 'oexrconvert',
		'rounding'        => 'oexrrounding',
		'weight'          => 'oexrwght',
		'uom_customer'    => 'oexrcustuom',
		'uom_pricing'     => 'oexrcustpricuom',

		'item'            => 'itemMasterItem', // FK GET
		'uofmcustomer'    => 'unitofMeasurePricing',

		'date'		      => 'dateupdtd',
		'time'		      => 'timeupdtd',
	);

	/**
	 * Return Pricing Per UoM
	 * @return [type] [description]
	 */
	public function get_pricing_peruom() {
		if ($this->uom_pricing == '') {
			return 0;
		} else {
			$itmitem = $this->getItemMasterItem();
			$uom_pricing = $this->getUnitofMeasurePricing();
			return $this->price_customer / $itmitem->qtypercase * $uom_pricing->conversion;
		}
	}

	public function getUnitofMeasurePricing() {
		return UnitofMeasureSaleQuery::create()->findOneByCode($this->uom_pricing);
	}

	public static function new() {
		$item = new ItemXrefCustomer();
		$item->setPrice_customer(0.00);
		$item->setQty_percase(0);
		$item->setQty_pack_inner(0);
		$item->setQty_pack_outer(0);
		$item->setQty_tare(0);
		$item->setQty_purchase(0);
		$item->setConvert(0.000);
		$item->setPrice_retail(0.000);
		$item->setPrice_customer(0.000);
		$item->setRounding(self::ROUNDING_FALSE);
		$item->setWeight(0.00000);
		return $item;
	}
}
