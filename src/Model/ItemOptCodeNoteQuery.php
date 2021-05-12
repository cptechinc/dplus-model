<?php

use Base\ItemOptCodeNoteQuery as BaseItemOptCodeNoteQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_opt_code_in' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByItemid($itemID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  ItemOptCodeNoteQuery filterByItemid(string $ItemID)      Filter the query inititemnbr column
 *
 */
class ItemOptCodeNoteQuery extends BaseItemOptCodeNoteQuery {
	use QueryTraits;

	/**
	 * Filter the Query By the inititemnbr column
	 * @param  mixed  $itemID      Item ID
	 * @param  string $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return self                The current query, for fluid interface
	 */
	public function filterByItemid($itemID = null, $comparison = null) {
		return $this->filterByInititemnbr($itemID , $comparison);
	}
}
