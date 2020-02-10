<?php

use Base\SoReasonCode as BaseSoReasonCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_reas_code' table.
 */
class SoReasonCode extends BaseSoReasonCode {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'oetbreascode',
		'code'         => 'oetbreascode',
		'description'  => 'oetbreasdesc',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd'
	);
}
