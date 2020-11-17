<?php

use Base\InvKit as BaseInvKit;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_kit_head' table.
 *
 * RELATIONSHIPS: ItemMasterItem, InvKitComponents
 */
class InvKit extends BaseInvKit {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const FORMAT_DATE = 'Ymd';
	const FORMAT_TIME = 'His';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'  => 'inititemnbr',
		'date'    => 'dateupdtd',
		'time'    => 'timeupdtd',
		// FOREIGN KEY Relationship
		'item'        => 'itemMasterItem',
		'components'  => 'invKitComponents'
	);
}
