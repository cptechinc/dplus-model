<?php

use Base\ItemXrefUpcQuery as BaseItemXrefUpcQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'upc_item_xref' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByItemid(string $itemID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  ItemUpcXref filterByItemid(string $itemID)      Return the first ItemUpcXref filtered by the inititemnbr column
 *
 * FindOneByXXX()
 *
 *
 * FindByXXX()
 *
 */
class ItemXrefUpcQuery extends BaseItemXrefUpcQuery {
	use QueryTraits;

	/**
	 * Filter the query on the inititemnbr column
	 * @param  string $itemID     The value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return self               The current query, for fluid interface
	 */
	public function filterByItemid($itemID, $comparison = null) {
		return $this->filterByInititemnbr($itemID, $comparison);
	}

	/**
	 * Filter the query on the inititemnbr column
	 * @param  string $itemID     The value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return self               The current query, for fluid interface
	 */
	public function filterByUpc($itemID, $comparison = null) {
		return $this->filterByUpcxcode($itemID, $comparison);
	}
}
