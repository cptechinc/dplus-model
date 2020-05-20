<?php

use Base\ItemMasterItem as BaseItemMasterItem;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_item_mast' table.
 *
 * NOTE: Foreign Key Relationship to UnitofMeasurePurchase, UnitofMeasureSale
 * InvGroupCode, InvCommissionCode, ItemPricing
 *
 */
class ItemMasterItem extends BaseItemMasterItem {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const VALUE_TRUE  = 'Y';
	const VALUE_FALSE = 'N';

	const ITEMTYPE_SERIALIZED = 'S';
	const ITEMTYPE_LOTTED     = 'L';
	const ITEMTYPE_NORMAL     = 'N';
	const ITEMTYPE_PRICEONLY  = 'P';

	const ITEMID_NONSTOCK     = 'N';

	const LENGTH_ITEMID = 30;

	const STANDARDCOST_BASE_OPTIONS = array(
		'A' => 'Average Cost',
		'H' => 'High',
		'L' => 'Last Cost',
		'M' => 'Manual',
		'R' => 'Replacement'
	);

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'      => 'inititemnbr',
		'desc'        => 'initdesc1',
		'description' => 'initdesc1',
		'desc2'       => 'initdesc2',
		'description2' => 'initdesc2',
		'itemgroup'   => 'intbgrup',
		'pricegroup'  => 'intbpricgrup',
		'pricecode'   => 'intbpricgrup',
		'commissiongroup' => 'intbcommgrup',
		'itemtype'    => 'inittype',
		'taxable'     => 'inittax',
		'supercede'   => 'initsupritemnbr',
		'weight'      => 'initwght',
		'liters'      => 'initliters',
		'qtypercase'  => 'initqtypercase',
		'specialitemcode' => 'initspecitemcd',
		'assortmentcode'  => 'initasstcode',
		'assortmentqty'   => 'initasstqty',
		'vendor_primary'  => 'initvendid',
		'uom_purchase'    => 'intbuompur',
		'uom_sale'        => 'intbuomsale',
		'standardcost'    => 'initstancost',
		'standardcostbasedon' => 'initstancostbase',
		'pricing'         => 'itemPricing',
		'unitofmsale'     => 'unitofMeasureSale',
		'unitofmpurchase' => 'unitofMeasurePurchase',
		'lastcost'        => 'initlastcost',
		'date_lastcost'   => 'initlastcostdate',
		'date_laststandardcost'   => 'initstancostlastdate',
		'primaryvxm'      => 'primaryItemXrefVendor',
		'primary_item_xref_vendor' => 'primaryItemXrefVendor',
		'allow_discount'   => 'initgivedisc',
		'revision'        => 'initrevision',
		'inspection'      => 'initinspect',
		'splitorder'      => 'initsplit',
		'custid'          => 'initspecificcust',
		'timefence'       => 'inittimefence',
		'allow_backorder' => 'initbord',
		'require_freight' => 'initrequirefrt',
		'cubes'           => 'initcubes',
		'stockcode'       => 'initstockcode',
		'core'            => 'InitCoreYN',
		'preference'      => 'initpreference',
		'producer'        => 'initproducer',
		'documentation'   => 'initdocumentation',
		'basestandardcost' => 'initbasestancost',
		'minmargin'        => 'initminmarg',
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
	public function get_length_itemid() {
		return self::LENGTH_ITEMID;
	}

	public function calculate_grams() {
		return $this->weight / $this->unitofmsale->conversion * 453.59237;
	}

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
		return $query->is_kit($this->itemid);
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

	public function is_inspection() {
		return $this->is_true('inspection');
	}

	public function is_splitorder() {
		return $this->is_true('splitorder');
	}

	public function allow_backorder() {
		return $this->is_true('allow_backorder');
	}

	public function taxable() {
		return $this->is_true('taxable');
	}

	public function require_freight() {
		return $this->is_true('require_freight');
	}

	public function is_true($property) {
		return $this->$property == self::VALUE_TRUE;
	}

	public function is_superceded() {
		return boolval(strlen($this->supercede));
	}

	/**
	 * Returns the Standard Cost For the Unit of Measurement Sale
	 *
	 * @return float
	 */
	public function get_standardcost_uom_sale() {
		return $this->standardcost > 0 ? $this->standardcost * $this->unitofmsale->conversion : $this->standardcost;
	}

	/**
	 * Returns the Last Cost For the Unit of Measurement Sale
	 *
	 * @return float
	 */
	public function get_lastcost_uom_sale() {
		return $this->lastcost > 0 ? $this->lastcost * $this->unitofmsale->conversion : $this->lastcost;
	}

	/**
	 * Returns the Primary ItemXrefVendor for this item
	 *
	 * @return ItemXrefVendor
	 */
	public function getPrimaryItemXrefVendor() {
		$q = ItemXrefVendorQuery::create();
		$q->filterByPo_ordercode(ItemXrefVendor::POORDERCODE_PRIMARY);
		$q->filterByOuritemid($this->itemid);
		return $q->findOne();
	}

	/**
	 * Return Item that Supercedes this
	 * @return ItemMasterItem
	 */
	public function getSupercedeItem() {
		$q = ItemMasterItemQuery::create();
		$q->filterByItemid($this->supercede);
		return $q->findOne();
	}

	public function getItemXrefCustomerItem($itemID, $custID) {
		$q = ItemXrefCustomerQuery::create();
		$q->filterByItemid($this->itemid);
		$q->filterByCustid($this->itemid);
		return $q->findOne();
	}

	public function getItemXrefUpcPrimary($itemID) {
		$q = ItemXrefUpcQuery::create();
		$q->filterByItemid($this->itemid);
		$q->filterPrimary(ItemXrefUpc::PRIMARY_TRUE);
		return $q->findOne();
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
