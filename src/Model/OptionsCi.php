<?php

use Base\OptionsCi as BaseOptionsCi;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ci_options' table.
 * CI User / System options
 */
class OptionsCi extends BaseOptionsCi {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'user'     => 'citboptncode',
		'days_po'  => 'citboptnpodaysback',
		'days_sh'  => 'citboptnshdaysback'
	);
}
