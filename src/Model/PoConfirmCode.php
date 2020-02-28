<?php

use Base\PoConfirmCode as BasePoConfirmCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'po_confirm_code' table.
 */
class PoConfirmCode extends BasePoConfirmCode {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'potbcnfmcode',
		'code'         => 'potbcnfmcode',
		'description'  => 'potbcnfmdesc',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd'
	);
}
