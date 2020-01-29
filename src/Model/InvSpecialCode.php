<?php

use Base\InvSpecialCode as BaseInvSpecialCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_spit_code' table.
*/
class InvSpecialCode extends BaseInvSpecialCode {
    use ThrowErrorTrait;
    use MagicMethodTraits;

	const MAX_LENGTH_CODE = 1;

    /**
     * Column Aliases to lookup / get properties
     * @var array
     */
    const COLUMN_ALIASES = array(
        'id'           => 'intbspitcode',
        'code'         => 'intbspitcode',
        'description'  => 'intbspitdesc',
        'date'         => 'dateupdtd',
        'time'         => 'timeupdtd'
    );

    /**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}
}
