<?php

use Base\InvPriceCode as BaseInvPriceCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_pric_code' table.
 */
class InvPriceCode extends BaseInvPriceCode {
    use ThrowErrorTrait;
    use MagicMethodTraits;

    /**
     * Column Aliases to lookup / get properties
     * @var array
     */
    const COLUMN_ALIASES = array(
        'id'             => 'intbpricgrup',
        'code'           => 'intbpricgrup',
        'description'    => 'intbpricdesc',
        'sales_program'  => 'intbpricsaleprog',
        'cost_precent'   => 'intbpriccostpct',
        'name'           => 'dateupdtd',
        'email'          => 'timeupdtd'
    );
}
