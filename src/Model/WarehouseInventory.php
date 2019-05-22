<?php

use Base\WarehouseInventory as BaseWarehouseInventory;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'inv_whse_mast' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class WarehouseInventory extends BaseWarehouseInventory {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'       => 'InitItemNbr',
		'whseid'       => 'IntbWhse',
		'whseID'       => 'IntbWhse',
		'warehouseID'  => 'IntbWhse',
		'bin_default'  => 'InwhBin'
	);
}
