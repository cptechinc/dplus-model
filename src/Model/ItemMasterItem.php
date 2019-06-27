<?php

use Base\ItemMasterItem as BaseItemMasterItem;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'inv_item_mast' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class ItemMasterItem extends BaseItemMasterItem {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const ITEMTYPE_SERIALIZED = 'S';
	const ITEMTYPE_LOTTED     = 'L';
	const ITEMTYPE_NORMAL     = 'N';
	const ITEMTYPE_PRICEONLY  = 'P';
	
	const ITEMID_NONSTOCK     = 'N';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'      => 'inititemnbr',
		'desc'        => 'initdesc1',
		'desc2'       => 'initdesc2',
		'groupcode'   => 'intbgrup',
		'pricegroup'  => 'intbpricegrup',
		'itemtype'    => 'initype',
		'taxable'     => 'inittax',
		'supercede'   => 'initsupritemnbr',
		'weight'      => 'initweight',
		'liters'      => 'initliters',
		'qtypercase'  => 'initqtypercase',
		'specialitemcode' => 'initspecitemcd',
		'assortmentcode'  => 'initasstcode',
		'vendor_primary'  => 'initvendid',
		'uom_purchase'    => 'intbuompur'
	);

	const ITEMTYPE_DESCRIPTIONS = array(
		'N' => 'normal',
		'L' => 'lotted',
		'S' => 'serialized',
		'P' => 'price only'
	);

	/**
	 * Return if the Item ID provided is a NON-STOCK Item ID
	 *
	 * @param  string $itemID
	 * @return bool
	 */
	public static function is_itemid_nonstock($itemID) {
		return $itemID == self::ITEMID_NONSTOCK;
	}

	/**
	 * Return Item Group Code Description
	 *
	 * @return string
	 */
	public function get_itemgroupdescription() {
		$query = ItemGroupcodeQuery::create();
		$query->select(ItemGroupcode::get_aliasproperty('description'));
		return $query->findOneByItemgroup($this->intbgrup);
	}
}
