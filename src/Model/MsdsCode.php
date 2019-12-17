<?php

use Base\MsdsCode as BaseMsdsCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_msds_code' table.
*/
class MsdsCode extends BaseMsdsCode {
    use ThrowErrorTrait;
    use MagicMethodTraits;

    /**
     * Column Aliases to lookup / get properties
     * @var array
     */
    const COLUMN_ALIASES = array(
        'id'              => 'intbmsdscode',
        'code'            => 'intbmsdscode',
        'description'     => 'intbmsdsdesc',
        'effective_date'  => 'intbmsdsefftdate',
        'date'            => 'dateupdtd',
        'time'            => 'timeupdtd'
    );
}
