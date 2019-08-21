<?php

use Base\WarehouseQuery as BaseWarehouseQuery;
use Dplus\Model\QueryTraits;


/**
 * Class for performing query and update operations on the 'inv_whse_code' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByWhseid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 *
 * FindOne
 * @method  Warehouse findOneByWhseid(string $whseID)     Return the first Warehouse filtered by the Intbwhse column
 *
 * Find
 *
 */
class WarehouseQuery extends BaseWarehouseQuery {
	use QueryTraits;

	/**
	 * Returns if Bins are ranged for Warehouse ID
	 * @uses Warehouse::BINS_RANGED
	 *
	 * @param  string $whseID Warehouse ID
	 * @return bool           Are Warehouse Bins Ranged
	 */
	public function are_binsranged($whseID) {
		$this->addAsColumn('arranged', 'IntbWhseBinRangeList');
		$this->select('arranged');
		return $this->findOneByIntbwhse($whseID) == Warehouse::BINS_RANGED;
	}

	/**
	 * Returns if Bins are ranged for Warehouse ID
	 * @uses Warehouse::BINS_RANGED
	 *
	 * @param  string $whseID Warehouse ID
	 * @return bool           Are Warehouse Bins Listed
	 */
	public function are_binslisted($whseID) {
		$this->addAsColumn('arranged', 'IntbWhseBinRangeList');
		$this->select('arranged');
		return $this->findOneByIntbwhse($whseID) == Warehouse::BINS_LIST;
	}
}
