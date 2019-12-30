<?php

use Base\TariffCodeCountry as BaseTariffCodeCountry;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_trco_code' table.
 */
class TariffCodeCountry extends BaseTariffCodeCountry {
    use ThrowErrorTrait;
    use MagicMethodTraits;

    /**
     * Column Aliases to lookup / get properties
     * @var array
     */
    const COLUMN_ALIASES = array(
        'id'           => 'intbtaricode',
        'code'         => 'intbtaricode',
        'country'      => 'intbtrcoctry',
        'date'         => 'dateupdtd',
        'time'         => 'timeupdtd'
    );
}
