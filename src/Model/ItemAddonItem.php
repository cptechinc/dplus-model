<?php

use Base\ItemAddonItem as BaseItemAddonItem;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_inv_addon' table.
 * 
 * KEY: inititemnbr, adonadditemnbr
 * FKRELATIONSHIPS: ItemMasterItem
 */
class ItemAddonItem extends BaseItemAddonItem {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'       => 'inititemnbr',
		'addonitemid'  => 'adonadditemnbr',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd'
	);
}
