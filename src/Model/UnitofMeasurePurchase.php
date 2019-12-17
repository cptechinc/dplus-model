<?php

use Base\UnitofMeasurePurchase as BaseUnitofMeasurePurchase;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_uom_pur' table.
*/
class UnitofMeasurePurchase extends BaseUnitofMeasurePurchase {
    use ThrowErrorTrait;
    use MagicMethodTraits;

    /**
     * Column Aliases to lookup / get properties
     * @var array
     */
    const COLUMN_ALIASES = array(
        'id'            => 'intbuompur',
        'code'          => 'intbuompur',
        'description'   => 'intbuomdesc',
        'conversion'    => 'intbuomconv',
        'pricebyweight' => 'intbuompricbywght',
        'date'          => 'dateupdtd',
        'time'          => 'timeupdtd'
    );
}
