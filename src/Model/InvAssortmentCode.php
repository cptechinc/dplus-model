<?php

use Base\InvAssortmentCode as BaseInvAssortmentCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_asst_code' table.
 */
class InvAssortmentCode extends BaseInvAssortmentCode {
    use ThrowErrorTrait;
    use MagicMethodTraits;

    /**
     * Column Aliases to lookup / get properties
     * @var array
     */
    const COLUMN_ALIASES = array(
        'id'           => 'intbasstcode',
        'code'         => 'intbasstcode',
        'description'  => 'intbasstdesc',
        'name'         => 'dateupdtd',
        'email'        => 'timeupdtd'
    );
}
