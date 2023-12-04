<?php

use Base\CpnLoadOrder as BaseCpnLoadOrder;

/**
 * Class for representing a row from the 'load_cpn_order' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class CpnLoadOrder extends BaseCpnLoadOrder {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'lnbr'   => 'lchdloadnbr'
	];
}
