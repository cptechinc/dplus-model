<?php

use Base\ConfigAp as BaseConfigAp;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;


/**
 * Class for representing a row from the 'ap_config' table.
 * ***Config for Accounts Payable***
 *
 * NOTE: There will only be one record in the database for the company
 *
 */
class ConfigAp extends BaseConfigAp {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'                  => 'aptbconfkey',
		'columns_notes_pord'  => 'aptbconfpocols'
	);

}
