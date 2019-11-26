<?php

use Base\CustomerWriteOffCode as BaseCustomerWriteOffCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_woff' table.
 *
 */
class CustomerWriteOffCode extends BaseCustomerWriteOffCode {
    use ThrowErrorTrait;
    use MagicMethodTraits;

    /**
     * Column Aliases to lookup / get properties
     * @var array
     */
    const COLUMN_ALIASES = array(
        'id'           => 'artbwoffcode',
        'code'         => 'artbwoffcode',
        'yesno'        => 'artbwoffyn',
        'description'  => 'artbroutedesc',
        'date'         => 'dateupdtd',
        'time'         => 'timeupdtd'
    );
}
