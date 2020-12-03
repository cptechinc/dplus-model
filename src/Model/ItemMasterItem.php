<?php

use Base\ItemMasterItem as BaseItemMasterItem;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_item_mast' table.
 *
 * RELATIONSHIPS: UnitofMeasurePurchase, UnitofMeasureSale
 * InvGroupCode, InvCommissionCode, ItemPricing
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
	const MAX_LENGTH_ITEMID = 30;

	const STANDARDCOST_BASE_OPTIONS = array(
		'A' => 'Average Cost',
		'H' => 'High',
		'L' => 'Last Cost',
		'M' => 'Manual',
		'R' => 'Replacement'
	);

	const OPTIONS_PRODUCER = ['Y' => 'Yes', 'N' => 'No'];
	const OPTIONS_PREFERENCE = ['A', 'B', 'C', 'D', 'E', 'F'];
	const OPTIONS_DOCUMENTATION = [1, 2, 3];

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
		'supercededby' => 'initsupritemnbr',
		'weight'      => 'initwght',
		'liters'      => 'initliters',
		'qtypercase'  => 'initqtypercase',
		'qty_percase'     => 'initqtypercase',
		'specialitemcode' => 'initspecitemcd',
		'assortmentcode'  => 'initasstcode',
		'assortmentqty'   => 'initasstqty',
		'vendor_primary'  => 'initvendid',
		'uom_purchase'    => 'intbuompur',
		'uom_sale'        => 'intbuomsale',
		'standardcost'    => 'initstancost',
		'standardcostbasedon' => 'initstancostbase',
		'lastcost'        => 'initlastcost',
		'date_lastcost'   => 'initlastcostdate',
		'date_laststandardcost'   => 'initstancostlastdate',
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
		'qty_pack_inner'  => 'initinnerpackqty',
		'qty_pack_outer'  => 'initouterpackqty',
		'qty_tare'        => 'initshiptareqty',
		'buyer'           => 'aptbbuyrcode',
		'qty_purchase_carton'  => 'initpurchcrtnqty',
		'tariffcode'  => 'IntbTariffCode',
		'msdscode'    => 'IntbMsdsCode',
		'freightcode' => 'InitMfrtCode',
		'origincountry' => 'InitCntryOfOrigin',

		// Foreign Key Aliases
		'primaryvxm'      => 'primaryItemXrefVendor',
		'primary_item_xref_vendor' => 'primaryItemXrefVendor',
		'pricing'         => 'itemPricing',
		'unitofmsale'     => 'unitofMeasureSale',
		'unitofmpurchase' => 'unitofMeasurePurchase',
		'invgroup'        => 'invgroupcode',
	);

	const ITEMTYPE_DESCRIPTIONS = array(
		'N' => 'normal',
		'L' => 'lotted',
		'S' => 'serialized',
		'P' => 'price only'
	);

/* =============================================================
	Instance Constants Functions
============================================================= */
	/**
	 * Return ItemID Max Length
	 * @return int
	 */
	public function get_length_itemid() {
		return self::LENGTH_ITEMID;
	}

	/**
	 * Return Item Type Descriptions
	 * @return array
	 */
	public function get_itemtypedescriptions() {
		return self::ITEMTYPE_DESCRIPTIONS;
	}

	/**
	 * Return Options available for Producer property
	 * @return array
	 */
	public function get_options_producer() {
		return self::OPTIONS_PRODUCER;
	}

	/**
	 * Return Options available for Preference property
	 * @return array
	 */
	public function get_options_preference() {
		return self::OPTIONS_PREFERENCE;
	}

	/**
	 * Return Options available for Documentation property
	 * @return array
	 */
	public function get_options_documentation() {
		return self::OPTIONS_DOCUMENTATION;
	}

/* =============================================================
	Class Property Functions
============================================================= */
	/**
	 * Return Description for Item Type
	 * @return string
	 */
	public function get_itemtypedescription() {
		return self::ITEMTYPE_DESCRIPTIONS[$this->inittype];
	}

	/** @return bool is Item an Inspection item? */
	public function is_inspection() {
		return $this->ynbool('inspection');
	}

	/** @return bool can item Split Order if needed? */
	public function is_splitorder() {
		return $this->ynbool('splitorder');
	}

	/** @return bool Allow Item to be backordered? */
	public function allow_backorder() {
		return $this->ynbool('allow_backorder');
	}

	/** @return bool is Item taxable? */
	public function taxable() {
		return $this->ynbool('taxable');
	}

	/** @return bool does this item require freight? */
	public function require_freight() {
		return $this->ynbool('require_freight');
	}

	/** @return bool does Item property have a value of 'Y'? */
	public function ynbool($property) {
		return $this->$property == self::VALUE_TRUE;
	}

	/** @return bool does this item have a supercede? */
	public function is_superceded() {
		return boolval(strlen($this->supercede));
	}

/* =============================================================
	Class Calculated Functions
============================================================= */
	/**
	 * Return the Weight in Grams
	 * @return float
	 */
	public function calculate_grams() {
		return $this->weight / $this->unitofmsale->conversion * 453.59237;
	}

	/**
	 * Returns the Standard Cost For the Unit of Measurement Sale
	 * @return float
	 */
	public function get_standardcost_uom_sale() {
		return $this->standardcost > 0 ? $this->standardcost * $this->unitofmsale->conversion : $this->standardcost;
	}

	/**
	 * Returns the Last Cost For the Unit of Measurement Sale
	 * @return float
	 */
	public function get_lastcost_uom_sale() {
		return $this->lastcost > 0 ? $this->lastcost * $this->unitofmsale->conversion : $this->lastcost;
	}

/* =============================================================
	Foreign Key Relationship Functions
============================================================= */
	 /**
	 * Returns if this item is a Kit
	 * @param  string $itemID
	 * @return bool
	 */
	public function is_kit() {
		$query = InvKitQuery::create();
		return $query->is_kit($this->itemid);
	}

	/**
	 * Return InvKitComponent objects for this Kit
	 * @return InvKitComponent[]|ObjectCollection
	 */
	public function get_kititems() {
		$query = InvKitComponentQuery::create();
		return $query->findByKititemid($this->inititemnbr);
	}

	/**
	 * Returns if Item is a BoM produced Item
	 * @return bool
	 */
	public function is_bom_item() {
		$q = BomItemQuery::create();
		$q->filterByItemid($this->itemid);
		return boolval($q->count());
	}

	/**
	 * Returns the Primary ItemXrefVendor for this item
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

	/**
	 * Return the First ItemXrefCustomer that matches
	 * @param  string $itemID  Item ID
	 * @param  string $custID  Customer ID
	 * @return ItemXrefCustomer
	 */
	public function getItemXrefCustomerItem($itemID, $custID) {
		$q = ItemXrefCustomerQuery::create();
		$q->filterByItemid($this->itemid);
		$q->filterByCustid($this->itemid);
		return $q->findOne();
	}

	/**
	 * Return the Primary ItemXrefUpc for this Item
	 * @param  string $itemID  Item ID
	 * @return ItemXrefUpc
	 */
	public function getItemXrefUpcPrimary() {
		$q = ItemXrefUpcQuery::create();
		$q->filterByItemid($this->itemid);
		$q->filterPrimary(ItemXrefUpc::PRIMARY_TRUE);
		return $q->findOne();
	}

	/**
	 * Return if Item has Substitutes
	 * @return bool
	 */
	public function has_substitutes() {
		return boolval($this->count_substitutes());
	}

	/**
	 * Return the number of Substitutes this Item has
	 * @return int
	 */
	public function count_substitutes() {
		return $this->countItemSubstitutesRelatedByInititemnbr();
	}

	/**
	 * Return Item's Substitutes
	 * @return ItemSubstitute[]|Object Array
	 */
	public function get_substitutes() {
		return $this->getItemSubstitutesRelatedByInititemnbr();
	}

	/**
	 * Return if Item is a subsitute
	 * @return bool
	 */
	public function is_substitute() {
		return boolval($this->countItemSubstitutesRelatedByInsisubitemnbr());
	}

	/**
	 * Return the number of Items this Item is a substitute for
	 * @return int
	 */
	public function count_substitutes_for() {
		return $this->countItemSubstitutesRelatedByInsisubitemnbr();
	}

	/**
	 * Return Items this item substitutes for
	 * @return ItemSubstitute[]|Object Array
	 */
	public function get_substitutes_for() {
		return $this->getItemSubstitutesRelatedByInsisubitemnbr();
	}

	/**
	 * Returns if this Item has Addon Items
	 * @return bool
	 */
	public function has_addon_items() {
		return boolval($this->countItemAddonItemsRelatedByInititemnbr());
	}

	/**
	 * Returns the number of Addon Items
	 * @return int
	 */
	public function count_addonitems() {
		return $this->countItemAddonItemsRelatedByInititemnbr();
	}

	/**
	 * Return the Addon Items for this Item
	 * @return ItemAddonItems[]|ObjectCollection
	 */
	public function get_addonitems() {
		return $this->getItemAddonItemsRelatedByInititemnbr();
	}

	/**
	 * Returns if this Item is an Addon Item
	 * @return bool
	 */
	public function is_addonitem() {
		return boolval($this->countItemAddonItemsRelatedByAdonadditemnbr());
	}

	/**
	 * Returns the number of Items this Item is an Addon to
	 * @return int
	 */
	public function count_addonitem_for() {
		return $this->countItemAddonItemsRelatedByAdonadditemnbr();
	}

	/**
	 * Returns the Items this Item is an Addon to
	 * @return int
	 */
	public function get_addonitem_for() {
		return $this->getItemAddonItemsRelatedByAdonadditemnbr();
	}

	/**
	 * Return TariffCode associated with this Item
	 * @return TariffCode
	 */
	public function getCodeTariff() {
		return TariffCodeQuery::create()->findOneByCode($this->intbtariffcode);
	}

	/**
	 * Return CountryCode associated with this Item's Origin Country Code
	 * @return CountryCode
	 */
	public function getCodeOriginCountry() {
		return CountryCodeQuery::create()->findOneByCode($this->initcntryoforigin);
	}

	/**
	 * Return MsdsCode associated with this Item
	 * @return MsdsCode
	 */
	public function getCodeMsds() {
		return MsdsCodeQuery::create()->findOneByCode($this->intbmsdscode);
	}

	/**
	 * Return FreightCode associated with this Item
	 * @return MotorFreightCode
	 */
	public function getCodeFreight() {
		return MotorFreightCodeQuery::create()->findOneByCode($this->initmfrtcode);
	}

	/**
	 * Return if Hazmat Record exists for this itemid
	 * @return bool
	 */
	public function has_hazmat() {
		return boolval(InvHazmatItemQuery::create()->filterByItemid($this->itemid)->count());
	}

	/**
	 * Return Hazmat Record exists for this itemid
	 * @return InvHazmatItem
	 */
	public function get_hazmat() {
		return $this->getInvHazmatItem();
	}

	/**
	 * Return if Item ID exists on a Sales Order
	 * @return bool
	 */
	public function is_ordered() {
		return boolval(SalesOrderDetailQuery::create()->filterByItemid($this->itemid)->count());
	}

/* =============================================================
	STATIC Lookup Functions
============================================================= */
	/**
	 * Return if the Item ID provided is a NON-STOCK Item ID
	 * @param  string $itemID
	 * @return bool
	 */
	public static function is_itemid_nonstock($itemID) {
		return $itemID == self::ITEMID_NONSTOCK;
	}

	/**
	 * Returns if provided Item Type is Serialized
	 * @param  string $itemtype Item Type S
	 * @return bool             Is Item Type Serialized
	 */
	public static function is_itemtype_serialized($itemtype) {
		return strtoupper($itemtype) == self::ITEMTYPE_SERIALIZED;
	}

	/**
	 * Returns if provided Item Type is Lotted
	 * @param  string $itemtype Item Type L
	 * @return bool             Is Item Type Lotted
	 */
	public static function is_itemtype_lotted($itemtype) {
		return strtoupper($itemtype) == self::ITEMTYPE_LOTTED;
	}

	/**
	 * Returns if provided Item Type is Normal
	 * @param  string $itemtype Item Type N
	 * @return bool             Is Item Type Normal
	 */
	public static function is_itemtype_normal($itemtype) {
		return strtoupper($itemtype) == self::ITEMTYPE_NORMAL;
	}

	/**
	 * Returns if provided Item Type is Price Only
	 * @param  string $itemtype Item Type P
	 * @return bool             Is Item Type Price Only
	 */
	public static function is_itemtype_priceonly($itemtype) {
		return strtoupper($itemtype) == self::ITEMTYPE_PRICEONLY;
	}
}
