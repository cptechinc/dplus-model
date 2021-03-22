<?php

use Base\ItemXrefManufacturerQuery as BaseItemXrefManufacturerQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'mfcp_item_xref' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByItemid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method IItemXrefManufacturerQuery filterByItemid(string $itemID)      Return the Query filtered by the inititemnbr column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 *
 */
class ItemXrefManufacturerQuery extends BaseItemXrefManufacturerQuery {
	use QueryTraits;

	/**
	 * Filter the query on the ApveVendid column
	 * @param  string $mnfrID  T  he value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return self               The current query, for fluid interface
	 */
	public function filterByMnfrid($mnfrID, $comparison = null) {
		return $this->filterByApveVendid($mnfrID, $comparison);
	}

	/**
	 * Filter the query on the inititemnbr column
	 * @param  string $itemID     The value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return self               The current query, for fluid interface
	 */
	public function filterByItemid($itemID, $comparison = null) {
		return $this->filterByInititemnbr($itemID, $comparison);
	}
}
