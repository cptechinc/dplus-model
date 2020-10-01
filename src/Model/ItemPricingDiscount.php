<?php

use Base\ItemPricingDiscount as BaseItemPricingDiscount;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_price_discount' table.
 * PURPOSE: Item Pricing for Customer
 * RELATIONSHIPS: ItemMasterItem, Customer
 */
class ItemPricingDiscount extends BaseItemPricingDiscount {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE_PRICEDISCOUNT = 'PD';
	const TABLE_CUSTID_ITEMID = 3;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'      => 'oepctype',
		'table'     => 'oepctbltype',
		'custid'    => 'oepccustid',
		'itemid'    => 'oepcitemnbr',
		'baseprice' => 'oepcpricbase',
	);
}
