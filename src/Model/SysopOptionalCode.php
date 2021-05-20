<?php

use Base\SysopOptionalCode as BaseSysopOptionalCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'sys_opt_optcode' table.
 */
class SysopOptionalCode extends BaseSysopOptionalCode {
    use ThrowErrorTrait;
	use MagicMethodTraits;

    const MAX_LENGTH_CODE = 30;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
        'system'       => 'optnsystem',
        'opt_code'     => 'optncode',
        'sysop'        => 'optncode',
		'id'           => 'optcid',
        'code'         => 'optcid',
		'description'  => 'optcdesc',
		'description2' => 'optcdesc2',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd'
	);

    /**
     * Return the Max Number of characters allowed for Code
     * @return int
     */
    public function get_max_length_code() {
        return self::MAX_LENGTH_CODE;
    }
}
