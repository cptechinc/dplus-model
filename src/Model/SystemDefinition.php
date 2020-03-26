<?php

use Base\SystemDefinition as BaseSystemDefinition;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'sys_definition' table.
 * NOTE: Values are coming from sysd
 */
class SystemDefinition extends BaseSystemDefinition {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 * NOTE: @ Provalley use qty_ordered for weight, qty_cases for boxes
	 */
	const COLUMN_ALIASES = array(
		'ordernumber'  => 'oehhnbr',
		'qty_ordered'  => 'oedhqtyord',
		'qty_shipped'  => 'oedhqtyship',
		'price'        => 'oedhpric',
		'total_price'  => 'oedhprictot',
		'itemid'       => 'inititemnbr',
		'desc1'        => 'oedhdesc',
		'desc2'        => 'oedhdesc2',
		'line'         => 'oedhline',
		'linenbr'      => 'oedhline',
		'vendorpo'     => 'oedhponbr',
		'item'         => 'item',
		'qty_cases'    => 'oedhcntrqty',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);
}
