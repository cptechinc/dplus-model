<?php

use Base\ProspectSource as BaseProspectSource;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'prosp_sorc_code' table.
 */
class ProspectSource extends BaseProspectSource {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const CODELENGTH = 6;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'id'           => 'prtbsorccode',
		'code'         => 'prtbsorccode',
		'description'  => 'prtbsorcdesc',
		'name'         => 'prtbsorcdesc',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd',
	];
}
