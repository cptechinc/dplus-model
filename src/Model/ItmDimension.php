<?php

use Base\ItmDimension as BaseItmDimension;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_inv_dimen' table.
 * 
 * RELATIONSHIP: Foreign Key Relationship to ItemMasterItem
 */
class ItmDimension extends BaseItmDimension {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'     => 'inititemnbr',
		'thickness'  => 'indmthick',
		'length'     => 'indmlength',
		'width'      => 'indmwidth',
		'sqft'       => 'indmsqft',
		'date'       => 'dateupdtd',
		'time'       => 'timeupdtd',

		// FOREIGN KEY
		'itm'        => 'itemMasterItem',
	);
}
