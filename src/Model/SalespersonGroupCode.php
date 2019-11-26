<?php

use Base\SalespersonGroupCode as BaseSalespersonGroupCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_spgp' table.
 *
 */
class SalespersonGroupCode extends BaseSalespersonGroupCode {
    use ThrowErrorTrait;
    use MagicMethodTraits;

    /**
     * Column Aliases to lookup / get properties
     * @var array
     */
    const COLUMN_ALIASES = array(
        'id'           => 'artbspgpcode',
        'code'         => 'artbspgpcode',
        'description'  => 'artbspgpdesc',
        'date'         => 'dateupdtd',
        'time'         => 'timeupdtd'
    );
}
