<?php

use Base\InvCommissionCode as BaseInvCommissionCode;

/**
 * Class for representing a row from the 'inv_comm_code' table.
 */
class InvCommissionCode extends BaseInvCommissionCode {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'IntbCommGrup',
        'code'         => 'IntbCommGrup',
		'description'  => 'IntbCommDesc',
		'markup'       => 'IntbCommMarkup',
		'date'         => 'DateUpdtd',
		'time'         => 'TimeUpdtd'
	);
}
