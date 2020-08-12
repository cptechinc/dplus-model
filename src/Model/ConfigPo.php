<?php

use Base\ConfigPo as BaseConfigPo;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'po_config' table.
 */
class ConfigPo extends BaseConfigPo {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'decimal_places_cost'  => 'potbconfvxmroundpos',
		'allow_change_cost'    => 'potbconfallowchgcost',
	);
}
