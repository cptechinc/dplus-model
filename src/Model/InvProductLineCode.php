<?php

use Base\InvProductLineCode as BaseInvProductLineCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_plne_code' table.
 */
class InvProductLineCode extends BaseInvProductLineCode {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'intbplnecode',
		'code'         => 'intbplnecode',
		'description'  => 'intbplnedesc',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);
}
