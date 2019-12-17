<?php

use Base\CustomerStockingCell as BaseCustomerStockingCell;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_cell_code' table.
 */
class CustomerStockingCell extends BaseCustomerStockingCell {
    use ThrowErrorTrait;
    use MagicMethodTraits;

    /**
     * Column Aliases to lookup / get properties
     * @var array
     */
    const COLUMN_ALIASES = array(
        'id'           => 'intbcellcode',
        'code'         => 'intbcellcode',
        'description'  => 'intbcelldesc',
        'date'         => 'dateupdtd',
        'time'         => 'timeupdtd'
    );
}
