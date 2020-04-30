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
		'status'       => 'inwhstat'
	);
	
	/**
	 * Returns if Warehouse Item is active
	 *
	 * @return bool
	 */
	public function is_active() {
		return $this->status == self::STATUS_ACTIVE;
	}
}
