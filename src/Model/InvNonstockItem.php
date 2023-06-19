<?php

use Base\InvNonstockItem as BaseInvNonstockItem;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_nonstock_item' table.
 * REPRESENTS: Non-Stock Item
 * FKRELATIONSHIPS: Vendor
 */
class InvNonstockItem extends BaseInvNonstockItem {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'nsitemid'       => 'nsititemnbr',
		'mnfrid'         => 'nsitmnfrid',
		'vendorid'       => 'nsitmnfrid',
		'description'    => 'nsitdesc1',
		'description1'   => 'nsitdesc1',
		'description2'   => 'nsitdesc2',
		'cost'           => 'nsitcost',
		'available'      => 'nsitavail',
		'uomcode'        => 'nsitavail',
		'price'          => 'nsitprice',
		'dateupdated'    => 'nsitchgdate',
		'date'           => 'dateupdtd',
		'time'           => 'timeupdtd',
	];
}
