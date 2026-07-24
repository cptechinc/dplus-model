<?php

declare(strict_types=1);

use Base\InvAssortmentCode as BaseInvAssortmentCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_asst_code' table.
 */
class InvAssortmentCode extends BaseInvAssortmentCode {
    use ThrowErrorTrait;
    use MagicMethodTraits;

    const MAX_LENGTH_CODE = 3;

    /**
     * Column Aliases to lookup / get properties
     * @var array
     */
    const COLUMN_ALIASES = [
        'id'           => 'intbasstcode',
        'code'         => 'intbasstcode',
        'description'  => 'intbasstdesc',
        'date'         => 'dateupdtd',
        'time'         => 'timeupdtd'
    ];

    /**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}
}
