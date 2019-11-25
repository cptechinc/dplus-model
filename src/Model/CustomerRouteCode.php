<?php

use Base\CustomerRouteCode as BaseCustomerRouteCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_rout' table.
 *
 */
class CustomerRouteCode extends BaseCustomerRouteCode {
    use ThrowErrorTrait;
    use MagicMethodTraits;

    /**
     * Column Aliases to lookup / get properties
     * @var array
     */
    const COLUMN_ALIASES = array(
        'route'        => 'artbroute',
        'description'  => 'artbroutedesc',
        'date'         => 'dateupdtd',
        'time'         => 'timeupdtd'
    );
}
