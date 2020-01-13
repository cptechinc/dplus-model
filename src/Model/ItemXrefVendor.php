<?php

use Base\ItemXrefVendor as BaseItemXrefVendor;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

use Propel\Runtime\ActiveQuery\Criteria;

/**
 * Class for representing a row from the 'vend_item_xref' table.
 *
 * PRIMARY KEY = ApveVendId, VexrVendItemNbr, InitItemNbr
 */
class ItemXrefVendor extends BaseItemXrefVendor {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const UNITS_AVAILABLE = 10;

	const OPTIONS_APPROVALCODE = array(
		'A' => 'Approved',
		'R' => 'Restricted'
	);

	const OPTIONS_POORDERCODE = array(
		'C' => 'Costing',
		'P' => 'Primary',
		'Y' => 'Secondary'
	);

	const POORDERCODE_PRIMARY = 'P';
	const POORDERCODE_SECONDARY = 'Y';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'vendorid'      => 'apvevendid',
		'vendorID'      => 'apvevendid',
		'vendoritemid'  => 'vexrvenditemnbr',
		'vendoritemID'  => 'vexrvenditemnbr',
		'theiritemID'   => 'vexrvenditemnbr',
		'ouritemID'     => 'inititemnbr',
		'ouritemid'     => 'inititemnbr',
		'description'   => 'vexrvenditemdesc',
		'po_ordercode'  => 'vexrpoordercode',
		'qty_percase'   => 'vexrcaseqty',
		'minbuyqty'     => 'vexrminbuyqty',
		'option1'       => 'vexroption1',
		'is_kit'        => 'vexrprtkitdet',
		'approvalcode'  => 'vexraprvcode',
		'date_changed'  => 'vexrcostlastdate',
		'uom_purchase' => 'intbuompur',
		'listprice'     => 'vexrlistprice',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd',
		'imitem'        => 'ItemMasterItem',
		'uompurchase'   => 'UnitofMeasurePurchase',
		'unitcost_base' => 'vexrunitcost'
	);

	/**
	 * Return the number of Units Available to save
	 *
	 * @return int
	 */
	public function get_unitsavailable() {
		return self::UNITS_AVAILABLE;
	}

	/**
	 * Return Purchase Order Code Options
	 *
	 * @return array
	 */
	public function get_po_ordercodeoptions() {
		return self::OPTIONS_POORDERCODE;
	}

	/**
	 * Return self::POORDERCODE_PRIMARY
	 *
	 * @return string
	 */
	public function getOptionpoordercodePrimary() {
		return self::POORDERCODE_PRIMARY;
	}

	/**
	 * Retturns if the PO Order code is the primary
	 *
	 * @return boolean
	 */
	public function is_po_ordercode_primary() {
		return $this->po_ordercode == self::POORDERCODE_PRIMARY;
	}

	/**
	 * Return Approval Code Options
	 *
	 * @return array
	 */
	public function get_approvalcodeoptions() {
		return self::OPTIONS_APPROVALCODE;
	}

	/**
	 * Return the Units at the Qty Posiition
	 *
	 * @param  int $unit  E.g. 1
	 * @return int
	 */
	public function get_unitqty(int $unit) {
		$col_base = 'vexrunitunit';

		if ($unit <= self::UNITS_AVAILABLE) {
			$col = self::get_unitqty_column($unit);
			return $this->$col;
		} else {
			return 0;
		}
	}

	/**
	 * Return the Units at the Qty Posiition
	 *
	 * @param  int $unit  E.g. 1
	 * @return string
	 */
	public static function get_unitqty_column(int $unit) {
		$col_base = 'vexrunitunit';

		if ($unit <= self::UNITS_AVAILABLE) {
			return $col_base . $unit;
		} else {
			return '';
		}
	}

	/**
	 * Return Unit Cost at Qty Position
	 *
	 * @param  int   $unit
	 * @return float
	 */
	public function get_unitcost(int $unit) {
		$col_base = 'vexrunitcost';

		if ($unit <= self::UNITS_AVAILABLE) {
			if ($unit == 0) {
				return $this->unitcost_base;
			}
			$col = $col_base . $unit;
			return $this->$col;
		} else {
			return 0;
		}
	}

	/**
	 * Return Unit Cost at Qty Position
	 *
	 * @param  int   $unit
	 * @return float
	 */
	public static function get_unitcost_column(int $unit) {
		$col_base = 'vexrunitcost';

		if ($unit <= self::UNITS_AVAILABLE) {
			return $col_base . $unit;
		} else {
			return '';
		}
	}

	/**
	 * Returns Margin at Qty Position
	 * @param  int    $unit
	 * @return float
	 */
	public function get_unitmargin(int $unit) {
		if ($this->getEachlistprice() == 0 || $this->get_unitcost($unit) == 0) {
			return '';
		} else {
			$markup = $this->getEachlistprice() - $this->get_unitcost($unit);
			return $markup / $this->getEachlistprice() * 100;
		}
	}

	/**
	 * Returns the Each Price by dividing list price by Unit of Measure Purchase conversion
	 * @return float
	 */
	public function getEachlistprice() {
		if (empty($this->listprice)) {
			return 0;
		}
		return $this->listprice / $this->uompurchase->conversion;
	}

	/**
	 * Initializes List Price AND Unit of Measure Purchase fields
	 * @return void
	 */
	public function init() {
		if ($this->listprice == 0) {
			$itemprice = ItemPricingQuery::create()->filterByItemid($this->ouritemid)->findOne();
			$this->listprice = $itemprice->baseprice;
		}

		if (empty($this->uom_purchase)) {
			$this->uom_purchase = $this->imitem->UnitofMeasurePurchase->conversion;
		}
	}

	/**
	 * Returns the List Price of the Unit of Measure sale
	 * NOTE: Initializes for list price
	 * @return float
	 */
	public function get_listprice_uom_sale() {
		if ($this->listprice == 0 || empty($this->uom_purchase)) {
			$this->init();
		}
		return ($this->getEachlistprice()) * $this->imitem->UnitofMeasureSale->conversion;
	}

	/**
	 * Returns if there as another VXM item that is a primary order code for this Item
	 * @return bool
	 */
	public function other_primary_poordercode_exists() {
		$q = ItemXrefVendorQuery::create();
		$q->filterByOuritemid($this->ouritemid);
		$q->filterByVendoritemid($this->vendoritemID, Criteria::NOT_IN);
		return boolval($q->count());
	}

	/**
	 * Returns ItemXrefVendor that is the primary PO Order code for Item ID
	 *
	 * @return ItemXrefVendor
	 */
	public function get_other_primary_vxm_item() {
		$q = ItemXrefVendorQuery::create();
		$q->filterByOuritemid($this->ouritemid);
		$q->filterByVendoritemid($this->vendoritemID, Criteria::NOT_IN);
		return $q->findOne();
	}

	/**
	 * Returns ItemXrefVendor that is the primary PO Order code for Item ID
	 *
	 * @return ItemXrefVendor
	 */
	public function other_primary_poordercode_itemid() {
		$q = ItemXrefVendorQuery::create();
		$q->select('vexrvenditemnbr');
		$q->filterByOuritemid($this->ouritemid);
		$q->filterByVendoritemid($this->vendoritemID, Criteria::NOT_IN);
		return $q->findOne();
	}

	/**
	 * Returns If theree is another primary PO Order code for Item ID
	 *
	 * @return bool
	 */
	public function other_primary_poordercode_vendorid() {
		$q = ItemXrefVendorQuery::create();
		$q->select('apvevendid');
		$q->filterByOuritemid($this->ouritemid);
		$q->filterByVendoritemid($this->vendoritemID, Criteria::NOT_IN);
		return $q->findOne();
	}
}