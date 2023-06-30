<?php

use Base\InvWhseItemBin as BaseInvWhseItemBin;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_bin_area' table.
 * FKRELATIONSHIPS: ItemMasterItem, Warehouse, WarehouseInventory
 */
class InvWhseItemBin extends BaseInvWhseItemBin {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'itemid'		=> 'inititemnbr',
		'whseid'		=> 'intbwhse',
		'date'			=> 'dateupdtd',
		'time'			=> 'timeupdtd',

		// FOREIGN KEY GETS
		'item'          => 'itemMasterItem'
	];
}
