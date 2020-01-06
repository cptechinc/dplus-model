<?php

use Base\ItemGroupCode as BaseItemGroupCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_grup_code' table.
 */
class ItemGroupCode extends BaseItemGroupCode {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'intbgrup',
		'code'         => 'intbgrup',
		'description'  => 'intbgrupdesc',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd'
	);
}
