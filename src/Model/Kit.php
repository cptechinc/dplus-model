<?php

use Base\Kit as BaseKit;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_kit_head' table.
 */
class Kit extends BaseKit {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'      => 'inititemnbr',
		'dateupdated' => 'dateupdtd',
		'timeupdated' => 'timeupdtd',
	);
}
