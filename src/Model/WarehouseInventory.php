<?php

use Base\WarehouseInventory as BaseWarehouseInventory;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_whse_mast' table.
 */
class WarehouseInventory extends BaseWarehouseInventory {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const STATUS_ACTIVE   = 'A';
	const STATUS_INACTIVE = 'I';
	const STATUS_DELETE   = 'D';

	const SPECIALORDER_SPECIAL  = 'S';
	const SPECIALORDER_NORMAL   = 'N';
	const SPECIALORDER_DROPSHIP = 'D';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'       => 'inititemnbr',
		'whseid'       => 'intbwhse',
		'whseID'       => 'intbwhse',
		'warehouseID'  => 'intbwhse',
		'warehouseid'  => 'intbwhse',
		'bin_default'  => 'inwhbin',
		'status'       => 'inwhstat',
		'orderpoint'   => 'inwhordrpnt',
		'orderqty'     => 'inwhordrqty',
		'maxqty'       => 'inwhmax',
		'countdate'    => 'inwhcntdate',
		'whsesupply'   => 'inwhsupplywhse',
		'specialorder' => 'inwhspecordr'
	);

	/**
	 * Returns if Warehouse Item is active
	 *
	 * @return bool
	 */
	public function is_active() {
		return $this->status == self::STATUS_ACTIVE;
	}

	/**
	 * Returns if Warehouse Item is a special Order
	 *
	 * @return bool
	 */
	public function is_specialorder() {
		return $this->specialorder == self::SPECIALORDER_SPECIAL;
	}
}
