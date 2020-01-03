<?php

use Base\ApBuyer as BaseApBuyer;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ap_buyr_code' table.
 */
class ApBuyer extends BaseApBuyer {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'aptbbuyrcode',
		'code'         => 'aptbbuyrcode',
		'description'  => 'aptbbuyrdesc',
		'name'         => 'aptbbuyrdesc',
		'email'        => 'aptbbuyremail',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd'
	);
}
