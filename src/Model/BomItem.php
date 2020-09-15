<?php

use Base\BomItem as BaseBomItem;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'pr_bmat_head' table.
 * PURPOSE: BoM Finished Good
 * RELATIONSHIPS: ItemMasterItem
 */
class BomItem extends BaseBomItem {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'  => 'bomhproditem',
		'level'   => 'bomhlevel',
	);
}
