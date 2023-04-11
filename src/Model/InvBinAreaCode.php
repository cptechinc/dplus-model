<?php

use Base\InvBinAreaCode as BaseInvBinAreaCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_bina_code' table.
 * 
 * REPRESENTS: Bin Area Code Table
 */
class InvBinAreaCode extends BaseInvBinAreaCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'intbinacode',
		'code'         => 'intbinacode',
		'description'  => 'intbinadesc',
		'name'         => 'intbinadesc',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);
}
