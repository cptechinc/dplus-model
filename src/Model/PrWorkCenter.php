<?php

use Base\PrWorkCenter as BasePrWorkCenter;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'pr_work_center_cd' table.
 */
class PrWorkCenter extends BasePrWorkCenter {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const CODELENGTH = 4;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'pmtbdeptid',
		'code'         => 'pmtbdeptid',
		'description'  => 'pmtbdeptdesc',
		'name'         => 'pmtbdeptdesc',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);
}
