<?php

use Base\WarehouseQuery as BaseWarehouseQuery;

/**
 * Skeleton subclass for performing query and update operations on the 'inv_whse_code' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class WarehouseQuery extends BaseWarehouseQuery {
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
}
