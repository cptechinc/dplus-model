<?php

use Base\ItemXrefVendor as BaseItemXrefVendor;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

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
		'uom_purchase'  => 'intbuompur',
		'listprice'     => 'vexrlistprice',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd'
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
	public function get_unit(int $unit) {
		$col_base = 'vexrunitunit';

		if ($unit <= self::UNITS_AVAILABLE) {
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
	public function get_unitcost(int $unit) {
		$col_base = 'vexrunitcost';

		if ($unit <= self::UNITS_AVAILABLE) {
			$col = $col_base . $unit;
			return $this->$col;
		} else {
			return 0;
		}
	}
}
