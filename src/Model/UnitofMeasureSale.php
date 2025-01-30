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
	const STOCKBYWEIGHT_STANDARD = 'S';
	const STOCKBYWEIGHT_CATCH    = 'C';

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

	/**
	 * Return if this code is stocked as weight for each case
	 * @return bool
	 */
	public function isStockedByCaseWeight() {
		return in_array($this->pricebyweight, [self::STOCKBYWEIGHT_CATCH, self::STOCKBYWEIGHT_STANDARD]);
	}

	/**
	 * Return if Qty is Weight
	 * @return bool
	 */
	public function isWeightQty() {
		return in_array($this->pricebyweight, [self::STOCKBYWEIGHT_CATCH]);
	}
}
