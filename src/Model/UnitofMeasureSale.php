<?php

use Base\UnitofMeasureSale as BaseUnitofMeasureSale;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_uom_sale' table.
*/
class UnitofMeasureSale extends BaseUnitofMeasureSale {
    use ThrowErrorTrait;
    use MagicMethodTraits;

    /**
     * Column Aliases to lookup / get properties
     * @var array
     */
    const COLUMN_ALIASES = array(
        'id'            => 'intbuomsale',
        'code'          => 'intbuomsale',
        'description'   => 'intbuomdesc',
        'conversion'    => 'intbuomconv',
        'pricebyweight' => 'intbuompricbywght',
        'name'          => 'dateupdtd',
        'email'         => 'timeupdtd'
    );
}
