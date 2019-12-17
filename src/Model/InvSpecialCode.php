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
}
