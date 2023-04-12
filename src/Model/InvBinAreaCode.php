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
	const COLUMN_ALIASES = [
		'id'           => 'intbbinacode',
		'code'         => 'intbbinacode',
		'description'  => 'intbbinadesc',
		'name'         => 'intbbinadesc',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	];
}
