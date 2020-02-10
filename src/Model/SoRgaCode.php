<?php

use Base\SoRgaCode as BaseSoRgaCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_rgas_code' table.
 */
class SoRgaCode extends BaseSoRgaCode {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'               => 'oetbrgascode',
		'code'             => 'oetbrgascode',
		'description'      => 'oetbrgasdesc',
		'warehouse'        => 'oetbrgaswhse',
		'account_number'   => 'oetbrgasshipacctnbr',
		'date'		       => 'dateupdtd',
		'time'		       => 'timeupdtd'
	);
}
