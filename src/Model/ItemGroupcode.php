<?php

use Base\ItemGroupcode as BaseItemGroupcode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'inv_grup_code' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class ItemGroupcode extends BaseItemGroupcode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'groupcode'   => 'intbgrup',
		'itemgroup'   => 'intbgrup',
		'description' => 'intbgrupdesc',
	);
}
