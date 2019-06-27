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
		'itemid'      => 'intitemnbr',
		'desc'        => 'intdesc1',
		'desc2'       => 'intdesc2',
		'groupcode'   => 'intbgrup',
		'pricegroup'  => 'intbpricegrup',
		'itemtype'    => 'initype',
		'user'        => 'dociuser',
		'reference1'  => 'docifld1'
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
