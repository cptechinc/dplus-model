<?php

use Base\WarehouseInventoryQuery as BaseWarehouseInventoryQuery;

/**
 * Skeleton subclass for performing query and update operations on the 'inv_whse_mast' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class WarehouseInventoryQuery extends BaseWarehouseInventoryQuery {

	/**
	 * Returns the default Warehouse Bin for the Item ID
	 *
	 * @param  string $warehouseID Warehouse ID
	 * @param  string $itemID      Item ID
	 * @return string              Default Warehouse Item Bin
	 */
	public function get_warehouseitembin($warehouseID, $itemID) {
		$this->clear();
		$this->select('inwhbin');
		$this->filterByWarehouseid($warehouseID);
		$this->filterByItemid($itemID);
		return $this->findOne();
	}

	/**
	 * Filter the query on the Intbwhse column
	 *
	 * @param  string $warehouseID Warehouse ID
	 * @return WarehouseInventoryQuery
	 */
	public function filterByWarehouseid($warehouseID) {
		return $this->filterByIntbwhse($warehouseID);
	}

	/**
	 * Filter the query on the Inititemnbr column
	 *
	 * @param  string $itemID Item ID
	 * @return WarehouseInventoryQuery
	 */
	public function filterByItemid($itemID) {
		return $this->filterByInititemnbr($itemID);
	}
}
