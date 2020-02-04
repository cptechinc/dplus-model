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
		'description' => 'initdesc1',
		'desc2'       => 'initdesc2',
		'itemgroup'   => 'intbgrup',
		'pricegroup'  => 'intbpricgrup',
		'pricecode'   => 'intbpricgrup',
		'commissiongroup' => 'intbcommgrup',
		'itemtype'    => 'inittype',
		'taxable'     => 'inittax',
		'supercede'   => 'initsupritemnbr',
		'weight'      => 'initweight',
		'liters'      => 'initliters',
		'qtypercase'  => 'initqtypercase',
		'specialitemcode' => 'initspecitemcd',
		'assortmentcode'  => 'initasstcode',
		'vendor_primary'  => 'initvendid',
		'uom_purchase'    => 'intbuompur',
		'uom_sale'        => 'intbuomsale',
		'pricing'         => 'itemPricing',
	);

	const ITEMTYPE_DESCRIPTIONS = array(
		'N' => 'normal',
		'L' => 'lotted',
		'S' => 'serialized',
		'P' => 'price only'
	);

	/**
	 * ===================================================================
	 *
	 * CLASS OBJECT FUNCTIONS
	 *
	 * ===================================================================
	 */

	/**
	 * Return Item Group Code Description
	 *
	 * @return string
	 */
	public function get_itemgroupdescription() {
		$query = InvGroupCodeQuery::create();
		$query->select(InvGroupCode::get_aliasproperty('description'));
		return $query->findOneByItemgroup($this->intbgrup);
	}

	/**
	 * Return Description for Item Type
	 *
	 * @return string
	 */
	public function get_itemtypedescription() {
		return self::ITEMTYPE_DESCRIPTIONS[$this->inittype];
	}

	/**
	 * self::ITEMTYPE_DESCRIPTIONS
	 *
	 * @return array
	 */
	public function get_itemtypedescriptions() {
		return self::ITEMTYPE_DESCRIPTIONS;
	}


	/**
	 * Returns if this item is a Kit
	 *
	 * @param  string $itemID
	 * @return bool
	 */
	public function is_kit() {
		$query = KitQuery::create();
		return $query->is_kit($this->inititemnbr);
	}

	/**
	 * Return KitItems objects for this Kit
	 *
	 * @return ChildKitItems[]|ObjectCollection
	 */
	public function get_kititems() {
		$query = KitItemsQuery::create();
		return $query->findByKititemid($this->inititemnbr);
	}

	/**
	 * ===================================================================
	 *
	 * STATIC LOOKUP FUNCTIONS
	 *
	 * ===================================================================
	 */

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
	 * Returns if provided Item Type is Serialized
	 *
	 * @param  string $itemtype Item Type S
	 * @return bool             Is Item Type Serialized
	 */
	public static function is_itemtype_serialized($itemtype) {
		return strtoupper($itemtype) == self::ITEMTYPE_SERIALIZED;
	}

	/**
	 * Returns if provided Item Type is Lotted
	 *
	 * @param  string $itemtype Item Type L
	 * @return bool             Is Item Type Lotted
	 */
	public static function is_itemtype_lotted($itemtype) {
		return strtoupper($itemtype) == self::ITEMTYPE_LOTTED;
	}

	/**
	 * Returns if provided Item Type is Normal
	 *
	 * @param  string $itemtype Item Type N
	 * @return bool             Is Item Type Normal
	 */
	public static function is_itemtype_normal($itemtype) {
		return strtoupper($itemtype) == self::ITEMTYPE_NORMAL;
	}

	/**
	 * Returns if provided Item Type is Price Only
	 *
	 * @param  string $itemtype Item Type P
	 * @return bool             Is Item Type Price Only
	 */
	public static function is_itemtype_priceonly($itemtype) {
		return strtoupper($itemtype) == self::ITEMTYPE_PRICEONLY;
	}
}
