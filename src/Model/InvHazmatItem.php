<?php

use Base\InvHazmatItem as BaseInvHazmatItem;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;


/**
 * Class for representing a row from the 'inv_inv_hazmat' table.
 * 
 * RELATIONSHIPS: ItemMasterItem
 */
class InvHazmatItem extends BaseInvHazmatItem {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_DOT1  = 35;
	const MAX_LENGTH_DOT2  = 35;
	const MAX_LENGTH_LABEL = 35;
	const MAX_LENGTH_UNNBR = 6;

	const YN_TRUE = 'Y';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid' => 'inititemnbr',
		'dot1'   => 'inhzdot1',
		'dot2'   => 'inhzdot1',
		'class'  => 'inhzclass',
		'unnbr'  => 'inhzunnbr',
		'label'  => 'inhzlabel',
		'air'    => 'inhzairyn',
		'date'   => 'dateupdtd',
		'time'   => 'timeupdtd'
	);

	/**
	 * Return if Itemid is allowed Air Travel
	 * @return bool
	 */
	public function allow_air() {
		return $this->air == self::YN_TRUE;
	}
}
