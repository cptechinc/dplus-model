<?php

use Base\BomComponent as BaseBomComponent;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'pr_bmat_det' table.
 * PURPOSE: BoM Component
 * RELATIONSHIPS: ItemMasterItem, BomItem
 */
class BomComponent extends BaseBomComponent {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'      => 'bomduseagitem',
		'line'        => 'bomdline',
		'produces'    => 'bomhproditem',
		'qty'         => 'bomdusagqty',
		'scrap'       => 'bomdscrap',
		'serialbase'  => 'bomdserialbase',
	);
}
