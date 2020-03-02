<?php

use Base\InventoryAdjustmentReason as BaseInventoryAdjustmentReason;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_iarn_code' table.
 */
class InventoryAdjustmentReason extends BaseInventoryAdjustmentReason {
    use ThrowErrorTrait;
	use MagicMethodTraits;

    const MAX_LENGTH_CODE = 8;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'intbiarncode',
		'code'         => 'intbiarncode',
		'description'  => 'intbiarndesc',
        'sys_defined'  => 'intbiarnsysdefined',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd'
	);
}
