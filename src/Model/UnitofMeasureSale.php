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

	const MAX_LENGTH_CODE = 4;

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
        'stockbycase'   => 'intbuomstockbycase',
        'date'          => 'dateupdtd',
        'time'          => 'timeupdtd'
    );

    /**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}
}
