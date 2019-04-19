<?php

use Base\Warehouse as BaseWarehouse;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'inv_whse_code' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Warehouse extends BaseWarehouse {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const BINS_RANGED = 'R';
	const BINS_LIST   = 'L';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	protected $column_aliases = array(
		'id'       => 'IntbWhse',
		'whseid'   => 'IntbWhse',
		'whseID'   => 'IntbWhse',
		'arranged' => 'IntbWhseBinRangeList'
	);

	/**
	 * Returns if Bins are Ranged
	 * @return bool
	 */
	public function are_binsranged() {
		return $this->IntbWhseBinRangeList == self::BINS_RANGED;
	}

	/**
	 * Returns if Bins are Listed
	 * @return bool
	 */
	public function are_binslisted() {
		return $this->IntbWhseBinRangeList == self::BINS_LIST;
	}

	/**
	 * Returns if Bin is valid according to the Arrangment type rules
	 * @return bool
	 */
	public function validate_bin($binID) {
		return BincntlQuery::create()->validate_bin($this->IntbWhse, $binID);
	}

	public function get_bins() {
		return BincntlQuery::create()->findByWarehouse($this->IntbWhse);
	}
}
