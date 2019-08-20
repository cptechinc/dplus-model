<?php

use Base\Kits as BaseKits;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_kit_head' table.
 */
class Kits extends BaseKits {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'      => 'intitemnbr',
		'dateupdated' => 'dateupdtd',
		'timeupdated' => 'timeupdtd',
	);
}
