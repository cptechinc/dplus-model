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

	const STOCKBYWEIGHT_STANDARD = 'S';
	const STOCKBYWEIGHT_CATCH    = 'C';

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
		'stockbycase'   => 'intbuomstockbycase',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd'
	);

	/**
	 * Return if this code is stocked as weight for each case
	 * @return bool
	 */
	public function isStockedByCaseWeight() {
		return in_array($this->pricebyweight, [self::STOCKBYWEIGHT_CATCH, self::STOCKBYWEIGHT_STANDARD]);
	}
}
