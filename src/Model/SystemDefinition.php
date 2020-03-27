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
		'company_number'  => 'cscpcompnbr',
		'company_id'      => 'cscpcompid',
		'company_name'    => 'cscpcompname',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);
}
