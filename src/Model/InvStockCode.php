<?php

use Base\InvStockCode as BaseInvStockCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_stck_code' table.
*/
class InvStockCode extends BaseInvStockCode {
    use ThrowErrorTrait;
    use MagicMethodTraits;

    /**
     * Column Aliases to lookup / get properties
     * @var array
     */
    const COLUMN_ALIASES = array(
        'id'           => 'intbstckcode',
        'code'         => 'intbstckcode',
        'description'  => 'intbstckdesc',
        'date'         => 'dateupdtd',
        'time'         => 'timeupdtd'
    );
}
