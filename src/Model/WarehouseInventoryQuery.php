<?php

use Base\WarehouseInventoryQuery as BaseWarehouseInventoryQuery;

use Propel\Runtime\ActiveQuery\Criteria;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_whse_mast' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByWarehouseid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 * @method  WarehouseInventoryQuery filterByWarehouseid(string $whseID)  Filter the query on the IntbWhse column
 * @method  WarehouseInventoryQuery filterByItemid(string $whseID)       Filter the query on the filterByInititemnbr column
 *
 *
 * FindOne
 *
 * Find
 *
 */
class WarehouseInventoryQuery extends BaseWarehouseInventoryQuery {
	use QueryTraits;

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
	 * Filter the Query By Display II List
	 * @param  bool  $display  Filter By Items that Can / cannot be displayed
	 * @return self
	 */
	public function filterByDisplayiilist(bool $display) {
		$comparison = $display ? Criteria::EQUAL : Criteria::NOT_EQUAL;
		return $this->filterByInwhiisrchslct(WarehouseInventory::VALUE_TRUE, $comparison);
	}
}
