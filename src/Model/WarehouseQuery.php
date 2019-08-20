<?php

use Base\WarehouseQuery as BaseWarehouseQuery;
use Dplus\Model\QueryTraits;


/**
 * Class for performing query and update operations on the 'inv_whse_code' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByWhseid()
 */
class WarehouseQuery extends BaseWarehouseQuery {
	use QueryTraits;
	
	/**
	 * Return the first Warehouse filtered by the IntbWhse column
	 * @uses self::findOneByIntbwhse(string $IntbWhse)
	 *
	 * @param  string $whseID Warehouse ID to grab Configurations for
	 * @return Warehouse
	 */
	public function findOneByWhseid($whseID) {
		return $this->findOneByIntbwhse($whseID);
	}

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
